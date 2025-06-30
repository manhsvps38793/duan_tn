import aiomysql
from fastapi import APIRouter, Form, Request
from fastapi.responses import HTMLResponse, JSONResponse
import os
import google.generativeai as genai
from fastapi.templating import Jinja2Templates
from dotenv import load_dotenv
from typing import List, Dict

# read the .env
load_dotenv()
router = APIRouter()


MYSQL_HOST = os.getenv("MYSQL_HOST", "localhost")
MYSQL_PORT = int(os.getenv("MYSQL_PORT", 3306))
MYSQL_USER = os.getenv("MYSQL_USER", "root")
MYSQL_PASSWORD = os.getenv("MYSQL_PASSWORD", "")
MYSQL_DB = os.getenv("MYSQL_DB", "data_datn")

GEMINI_API_KEY = os.getenv("GEMINI_API_KEY")
if not GEMINI_API_KEY:
    raise ValueError("Missing GEMINI_API_KEY in .env")

genai.configure(api_key=GEMINI_API_KEY)
CLIENT = genai  # Không cần khởi tạo instance, dùng trực tiếp module genai


async def find_products(query: str) -> List[Dict]:
    """Tìm sản phẩm dựa trên truy vấn"""
    results = []
    query_like = f"%{query.lower()}%"
    conn = await aiomysql.connect(
        host=MYSQL_HOST, port=MYSQL_PORT, user=MYSQL_USER,
        password=MYSQL_PASSWORD, db=MYSQL_DB, autocommit=True
    )
    async with conn.cursor() as cur:
        await cur.execute(
            """
            SELECT p.id, p.name, p.description, p.price, c.name as color, s.name as size
            FROM products p
            JOIN product_variants pv ON pv.product_id = p.id
            JOIN colors c ON c.id = pv.color_id
            JOIN sizes s ON s.id = pv.size_id
            WHERE LOWER(p.name) LIKE %s OR LOWER(p.description) LIKE %s
            LIMIT 10
            """, (query_like, query_like)
        )
        rows = await cur.fetchall()
        # Gom nhóm theo sản phẩm
        product_map = {}
        for row in rows:
            # Chỉ lấy 6 giá trị đầu tiên
            pid, name, desc, price, color, size = row[:6]
            if pid not in product_map:
                product_map[pid] = {
                    "id": pid,
                    "name": name,
                    "description": desc,
                    "price": price,
                    "sizes": set(),
                    "colors": set(),
                }
            product_map[pid]["sizes"].add(size)
            product_map[pid]["colors"].add(color)
        for p in product_map.values():
            p["sizes"] = list(p["sizes"])
            p["colors"] = list(p["colors"])
            results.append(p)
    conn.close()
    return results


def format_product_html(product: Dict) -> str:
    """Tạo HTML cho 1 sản phẩm"""
    return f"""
    <div class="suggestion-card">
        <h3 class="product-name">{product['name']}</h3>
        <ul class="product-details">
            <li><span class="label">Giá:</span> <span class="price">{product['price']:,} VND</span></li>
        </ul>
    </div>
    """

# templates = Jinja2Templates(directory="templates")
# @router.post("/chat")
@router.post("/gpt-chat")
async def gpt_chat(
    my_instructions: str = Form(""),
):
    """
    API endpoint để gửi yêu cầu tư vấn đến ChatGPT.

    Args:
        my_instructions (str): Hướng dẫn hoặc câu hỏi từ người dùng.
    Returns:
        JSONResponse: Phản hồi từ ChatGPT hoặc thông báo lỗi.
    """
    if not my_instructions.strip():
        return JSONResponse(
            content={"message": "Vui lòng nhập câu hỏi của bạn", "status": "error"},
            status_code=400,
        )

    # Xử lý các câu hỏi đặc biệt
    keywords = ["liên hệ", "contact", "sđt", "email", "số điện thoại"]
    if any(word in my_instructions.lower() for word in keywords):
        return JSONResponse(
            status_code=200,
            content={
                "status": "success",
                "message": "Bạn có thể liên hệ với chúng tôi qua email: duy@gmail.com hoặc số điện thoại: 0962615032",
            },
        )

    # Xử lý các câu hỏi thông thường
    try:
        related_products = await find_products(my_instructions)
        print(f"Found {len(related_products)} related products")
        suggestions_html = ""
        if related_products:
             suggestions_html = (
                '<div class="suggestion-section">'
                '<h2>Gợi ý sản phẩm phù hợp</h2>'
                '<div class="suggestion-list">'
                + "".join([format_product_html(p) for p in related_products[:3]])
                + '</div></div>'
            )
        else:
            suggestions_html = ""
            
            
        # Gửi prompt cho Gemini (nếu muốn vẫn có thể dùng product_info như cũ)
        model = genai.GenerativeModel("gemini-2.5-flash")
        response = model.generate_content(my_instructions)
        result = response.text
        
        formatted_response = f"<p>{result.replace('\n', '</p><p>')}</p>"  # Thay dòng mới bằng thẻ <p>
        chat_talk = formatted_response
        
        
        # Tạo prompt chuyên biệt cho thời trang
        fashion_prompt = f"""
        YOU ARE THE FASHION ASSISTANT FOR FASHIONHUB SHOP
        MISSION: Recommend products from our store
        {suggestions_html}
        RULES:
        1. ALWAYS PRIORITIZE PRODUCTS FROM THE ABOVE LIST
        2. When presenting a product, MUST include:
           - Product name
           - Price
           - Available sizes and colors
        3. If no exact match, suggest SIMILAR products from the list
        4. DO NOT recommend products outside the above list
        5. If the question isn’t product‑related, reply naturally and friendly
        6. AVOID jargon or complex terms
        7. DO NOT mention other shops—focus only on FASHIONHUB
        8. DO NOT talk about products or services outside FASHIONHUB
        9. ACT AS A FASHIONHUB EMPLOYEE—ONLY TALK ABOUT THIS SHOP
        10. IF SOMEONE ASKED YOU WHO YOU ARE? WHAT ARE YOU? WHAT YOUR NAME . REPLY FASHIONBOT IN MY SHOP 
        CUSTOMER QUESTION: "{my_instructions}"
        
        **REPLY IN VIETNAMESE USING MARKDOWN FORMAT:**
        - Use bullet points (-) or numbers (1., 2., ...) for lists.
        - Use **bold** to highlight key info.
        - Keep answers concise and clear.
        **RESPOND BRIEFLY AND SUFFICIENTLY WITHOUT OVERDETAILING**
        - Use a friendly, approachable, professional tone.
        - Short, succinct, yet complete.
        **IF SOMEONE ASKED YOU WHO YOU ARE? WHAT ARE YOU? WHAT YOUR NAME . REPLY FASHIONBOT IN MY SHOP**
        *** MAXIMUM 200 CHARACTERS ***

        {my_instructions}
        
        If the question is about a specific product, suggest suitable items.
        If it’s about size, ask for height/weight details.
        """

        print("Prompt gửi đến ChatGPT:")
        print(fashion_prompt)
        print("Asking ChatGPT with fashion context...")

        # Lấy phản hồi từ ChatGPT
        chat_talk = result

        print(f"ChatGPT response: {chat_talk}")
        return JSONResponse(
            content={"message": chat_talk, "status":"success", "suggestions": fashion_prompt}, status_code=200
        )
    except Exception as e:
        print(f"Error in GPT chat: {str(e)}")
        return JSONResponse(
            content={
                "message": "Xin lỗi, tôi gặp sự cố khi xử lý yêu cầu của bạn",
                "status": "error",
                "suggestions": ""
            },
            status_code=500,
        )