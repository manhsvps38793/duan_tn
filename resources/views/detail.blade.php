@extends('app')

@section('body')
    <div class="grid wide container">
        <div class="row">
            <div class="col l-1 c-12 order-1">
                <div class="detail-thumbnails">
                    <div class="detail-itemimg activedeiatl">
                        <img src="{{asset('')}}img/aokhoac.webp" alt="Thumbnail 1">
                    </div>
                    <div class="detail-itemimg">
                        <img src="{{asset('')}}img/aokhoac.webp" alt="Thumbnail 2">
                    </div>
                    <div class="detail-itemimg">
                        <img src="{{asset('')}}img/aokhoac.webp" alt="Thumbnail 3">
                    </div>
                    <div class="detail-itemimg">
                        <img src="{{asset('')}}img/aokhoac.webp" alt="Thumbnail 4">
                    </div>
                </div>
            </div>

            <div class="col l-5 c-12 order-2">
                <div class="detail-imgall" id="sliderdeital">
                    <button class="prev-btndeital"><i class="fa-solid fa-chevron-left"></i></button>
                    <img src="{{asset('')}}img/aokhoac.webp" alt="Imagedaital 1" class="activedeiatl">
                    <img src="{{asset('')}}img/aokhoac.webp" alt="Imagedaital 2">
                    <img src="{{asset('')}}img/aokhoac.webp" alt="Imagedaital 3">
                    <img src="{{asset('')}}img/aokhoac.webp" alt="Imagedaital 4">
                    <button class="next-btndeital"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="col l-5 c-12 order-3">
                <div class="detail-textall">
                    <!-- Wishlist button -->
                    <button class="wishlist-button " id="wishlistBtn">
                        <i class="far fa-heart"></i>
                    </button>

                    <h2>Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>

                    <div class="product-meta">
                        <span class="product-status">
                            <i class="fas fa-check-circle"></i> Tình trạng: <strong>Còn hàng</strong>
                        </span>
                        <span class="product-sku">Mã SKU: <strong>Đang cập nhật</strong></span>
                    </div>

                    <hr>

                    <p class="deital-star">
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <span>4.9 (128 đánh giá)</span>
                    </p>

                    <div class="price-container">
                        <div class="current-price">195.000đ</div>
                        <div class="original-price">300.000đ</div>
                        <div class="discount-badge">-35%</div>
                    </div>
                    <div class="detail-button-mua">
                        <button class="add-button-detail">
                            <i class="fas fa-shopping-cart"></i> THÊM GIỎ HÀNG
                        </button>
                        <button class="buy-button-detail">
                            <i class="fas fa-bolt"></i> MUA NGAY
                        </button>
                    </div>

                    <div class="product-info-title">Thông tin sản phẩm</div>
                    <p class="product-info">- Chất liệu: Cotton cao cấp</p>
                    <p class="product-info">- Form: Oversize thoải mái</p>
                    <p class="product-info">- Màu sắc: Đen/Kem</p>
                    <p class="product-info">- Thiết kế: In lụa bền màu</p>


                    <div class="option-title" id="selected-iconhinhanh">Màu sắc: Chọn màu</div>
                    <div class="option-container">
                        <div class="detail-textall-imgicon active" style="background-color: black;" id="iconhinhanh1">
                            <p hidden>đen</p>
                        </div>
                        <div class="detail-textall-imgicon" style="background-color: #D3D3D3;" id="iconhinhanh2">
                            <p hidden>xám</p>
                        </div>
                        <div class="detail-textall-imgicon" style="background-color: #A52A2A;" id="iconhinhanh3">
                            <p hidden>nâu</p>
                        </div>
                    </div>

                    <div class="option-title" id="selected-icon">Kích thước: Chọn size</div>
                    <div class="option-container">
                        <div class="detail-textall-sizeicon active" id="icondetail1">
                            <p>S</p>
                        </div>
                        <div class="detail-textall-sizeicon" id="icondetail2">
                            <p>M</p>
                        </div>
                        <div class="detail-textall-sizeicon" id="icondetail3">
                            <p>L</p>
                        </div>
                        <div class="detail-textall-sizeicon" id="icondetail4">
                            <p>XL</p>
                        </div>
                    </div>

                    <a class="size-guide-link" href="#" id="openBox">
                        <i class="fas fa-ruler"></i> Hướng dẫn chọn size
                    </a>

                    <div id="overlay"></div>

                    <div id="popupBox">
                        <img src="https://via.placeholder.com/450x300/eee/999?text=HDSD+Chọn+Size"
                            alt="Hướng dẫn chọn size">
                        <button class="close-btn-size" id="closeBox">Đóng</button>
                    </div>

                    <div class="quantity-section">
                        <label class="quantity-label">Số lượng</label>
                        <div class="quantity-control">
                            <div class="quantity-buttons">
                                <button type="button" id="decrease">-</button>
                                <input type="number" id="quantity" value="1" min="1" />
                                <button type="button" id="increase">+</button>
                            </div>
                            <span class="stock-status">Còn hàng</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="grid wide container">
        <div class="row">
            <div class="col l-12 m-10 c-12 khoangcach">
                <div class="deitel-mota">
                    <button id="detail-sp" class="active" onclick="changeContent(1)">MÔ TẢ SẢN PHẨM</button>
                    <button id="detail-bl" onclick="changeContent(2)">ĐÁNH GIÁ SẢN PHẨM</button>
                </div>

                <div id="box-detail-sp" class="box-chuyendoi1" style="display: block;">
                    <p class="section-header">Thông tin sản phẩm:</p>
                    <p>- Chất liệu: Cotton cao cấp, mềm mại và thoáng khí</p>
                    <p>- Form: Oversize phong cách, phù hợp với nhiều dáng người</p>
                    <p>- Màu sắc: Đen/Kem - tone màu trung tính dễ phối đồ</p>
                    <p>- Thiết kế: In lụa sắc nét, không bong tróc sau nhiều lần giặt</p>

                    <img src="img/aothun.webp" alt="Áo thun Local Brand Unisex">

                    <p class="section-header">Về TEELAB:</p>
                    <p>"You will never be younger than you are at this very moment" - "Enjoy Your Youth!"</p>
                    <p>Không chỉ là thời trang, TEELAB còn là "phòng thí nghiệm" của tuổi trẻ - nơi nghiên cứu và cho ra đời
                        năng lượng mang tên "Youth". Chúng mình luôn muốn tạo nên những trải nghiệm vui vẻ, năng động và trẻ
                        trung.</p>
                    <p>Lấy cảm hứng từ giới trẻ, sáng tạo liên tục, bắt kịp xu hướng và phát triển đa dạng các dòng sản
                        phẩm là cách mà chúng mình hoạt động để tạo nên phong cách sống hằng ngày của bạn. Mục tiêu của
                        TEELAB là cung cấp các sản phẩm thời trang chất lượng cao với giá thành hợp lý.</p>
                    <p>Chẳng còn thời gian để loay hoay nữa đâu youngers ơi! Hãy nhanh chân bắt lấy những khoảnh khắc
                        tuyệt vời của tuổi trẻ. TEELAB đã sẵn sàng trải nghiệm cùng bạn!</p>

                    <p class="section-header">"Enjoy Your Youth", now!</p>

                    <img src="img/sidetun.jpg" alt="Áo thun TEELAB nhiều góc nhìn">

                    <p class="section-header">Hướng dẫn sử dụng sản phẩm Teelab:</p>
                    <p>- Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ để giữ màu</p>
                    <p>- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự</p>
                    <p>- Không dùng hóa chất tẩy mạnh để bảo vệ hình in</p>
                    <p>- Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp</p>

                    <p class="section-header">Chính sách bảo hành:</p>
                    <p>- Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng,
                        bị hư hỏng trong quá trình vận chuyển hàng.</p>
                    <p>- Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng</p>
                    <p>- Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ
                        bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.</p>
                </div>

                <div id="box-detail-bl" class="box-chuyendoi1" style="display: none;">
                    <div class="box-danhgia">
                        <h3>Đánh giá Áo Thun Local Brand Unisex M A G Seasonal Tshirt TS295</h3>

                        <!-- Review 1 -->
                        <div class="danhgia-sp">
                            <h4>Nguyễn Văn A</h4>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="rating-text">5/5 - Rất hài lòng</span>
                            </div>
                            <p><strong>Nhận xét:</strong> Áo chất lượng tốt, form rộng thoải mái, hình in đẹp không bai màu
                                sau 2 lần giặt. Sẽ ủng hộ shop dài dài!</p>
                            <p class="review-date">Đánh giá vào 15/05/2023</p>
                        </div>

                        <!-- Review 2 -->
                        <div class="danhgia-sp">
                            <h4>Trần Thị B</h4>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-alt"></i>
                                <span class="rating-text">4.5/5 - Hài lòng</span>
                            </div>
                            <p><strong>Nhận xét:</strong> Chất vải mềm, mặc mát nhưng size hơi lớn so với tưởng tượng. Lần
                                sau sẽ đặt size nhỏ hơn.</p>
                            <p class="review-date">Đánh giá vào 02/06/2023</p>
                        </div>

                        <!-- Review Form (Optional) -->
                        <div class="danhgia-sp review-form">
                            <h4>Viết đánh giá của bạn</h4>
                            <form>
                                <div class="form-group">
                                    <label>Đánh giá của bạn:</label>
                                    <div class="rating-input">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Chia sẻ cảm nhận của bạn về sản phẩm..." rows="4"></textarea>
                                </div>
                                <button type="submit" class="submit-review">Gửi đánh giá</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid wide container">
        <div class="row">
            <div class="col l-12 m-6 c-12 ">
                <div class="text-sp-lq">
                    <h2>Sản phẩm Liên quan</h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <section class="product-thun">
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6 ">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/aothun.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                    Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                                </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col l-3 m-6 c-6">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/aothun.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                    Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                                </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/aothun.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                    Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                                </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/aothun.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                    Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                                </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </section>
    <script src="{{asset('/js/detail.js')}}"></script>

@endsection