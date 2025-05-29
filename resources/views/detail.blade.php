@extends('app')

@section('body')
    <div class="grid wide container">
        <div class="row">
            <div class="col l-8 c-12">
                <div class="detail-imgall" id="sliderdeital">
                    <button class="prev-btndeital"><i class="fa-solid fa-chevron-left"></i></button>
                    <img src="img/aothunall.webp" alt="Imagedaital 1" class="activedeiatl">
                    <img src="img/aothun.webp" alt="Imagedaital 2">
                    <img src="img/aothunden.webp" alt="Imagedaital 3">
                    <img src="img/sauthuntrang.webp" alt="Imagedaital 4">
                    <button class="next-btndeital"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                <div class="detail-thumbnails">
                    <div class="detail-itemimg activedeiatl">
                        <img src="img/aothunall.webp" alt="Thumbnail 1">
                    </div>
                    <div class="detail-itemimg">
                        <img src="img/aothun.webp" alt="Thumbnail 2">
                    </div>
                    <div class="detail-itemimg">
                        <img src="img/aothunden.webp" alt="Thumbnail 3">
                    </div>
                    <div class="detail-itemimg">
                        <img src="img/sauthuntrang.webp" alt="Thumbnail 4">
                    </div>
                </div>


            </div>
            <div class="col l-4 c-12">
                <div class="detail-textall">
                    <h2>Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                    <hr>
                    <p class="deital-star">
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>Đánh giá sản phẩm
                    </p>
                    <h2 style="color: rgb(251, 27, 27);padding: 5px 0px 10px 0px;">195.000đ <span><del style="color:#7c7c7c;font-size: 20px;">300.000đ</del></span></h2>
                    <p style="font-size: 18px;padding: 5px 0px;">Thông tin sản phẩm:</p>
                    <p>- Chất liệu: Cotton</p>
                    <p>- Form: Oversize</p>
                    <p>- Màu sắc: Đen/Kem</p>
                    <p>- Thiết kế: In lụa</p>
                    <p style="font-size: 18px;padding: 15px 0px 5px 0px;" id="selected-iconhinhanh">Màu sắc: None</p>
                    <div class="detail-textall-img">
                        <div class="detail-textall-imgicon" id="iconhinhanh1">
                            <p hidden>đen</p>
                            <img src="img/aothunden.webp" alt="">
                        </div>
                        <div class="detail-textall-imgicon" id="iconhinhanh2">
                            <p hidden>xám</p>
                            <img src="img/aothun.webp" alt="">
                        </div>
                    </div>
                    <p style="font-size: 18px;padding: 15px 0px 5px 0px;" id="selected-icon">Kích thước: None</p>
                    <div class="detail-textall-p">
                        <div class="detail-textall-sizeicon" id="icondetail1">
                            <p>M</p>
                        </div>
                        <div class="detail-textall-sizeicon" id="icondetail2">
                            <p>L</p>
                        </div>
                        <div class="detail-textall-sizeicon" id="icondetail3">
                            <p>XL</p>
                        </div>
                    </div>
                    <br>
                    <a style="color: red;" href="#" id="openBox">+ Hướng dẫn chọn size</a>

                    <div id="overlay"></div>

                    <!-- Popup box -->
                    <div id="popupBox">
                        <img src="img/sidetun.jpg" alt="">
                        <button class="close-btn-size" id="closeBox">Close</button>
                    </div>
                    <p for="quantity" style="font-size: 18px;padding: 15px 0px 7px 0px;">Số lượng</p>
                    <div class="quantity-control">
                        <div class="quantity-buttons">
                          <button type="button" id="decrease">-</button>
                          <input type="number" id="quantity" value="1" min="1" />
                          <button type="button" id="increase">+</button>
                        </div>
                        <span id="stock-status">Còn hàng</span>
                    </div>
                    <div class="detail-button-mua">
                        <button>THÊM GIỎ HÀNG</button>
                        <button><a href="thanhtoan.html">MUA NGAY</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid wide container">
        <div class="row">
            <div class="col l-8 m-6 c-12 khoangcach">
                <div class="deitel-mota">
                    <button id="detail-sp" onclick="changeContent(1)">MÔ TẢ SẢN PHẨM</button>
                    <button id="detail-bl" onclick="changeContent(2)">Đánh giá sản phẩm</button>
                </div>

                <!-- Box 1 sẽ hiển thị mặc định khi trang tải -->
                <div id="box-detail-sp" class="box-chuyendoi1" style="display: block;">
                    <p style="font-size: 18px;padding: 5px 0px;">Thông tin sản phẩm:</p>
                    <p>- Chất liệu: Cotton</p>
                    <p>- Form: Oversize</p>
                    <p>- Màu sắc: Đen/Kem</p>
                    <p>- Thiết kế: In lụa</p>
                    <img src="img/aothun.webp" alt="">
                    <p  style="padding: 10px 0px;">Về TEELAB:</p>
                    <p>You will never be younger than you are at this very moment “Enjoy Your Youth!”</p>
                    <p>Không chỉ là thời trang, TEELAB còn là “phòng thí nghiệm” của tuổi trẻ - nơi nghiên cứu và cho ra đời năng lượng mang tên “Youth”. Chúng mình luôn muốn tạo nên những trải nghiệm vui vẻ, năng động và trẻ trung.
                        Lấy cảm hứng từ giới trẻ, sáng tạo liên tục, bắt kịp xu hướng và phát triển đa dạng các dòng sản phẩm là cách mà chúng mình hoạt động để tạo nên phong cách sống hằng ngày của bạn. Mục tiêu của TEELAB là cung cấp các sản phẩm thời trang chất lượng cao với giá thành hợp lý.
                        Chẳng còn thời gian để loay hoay nữa đâu youngers ơi! Hãy nhanh chân bắt lấy những những khoảnh khắc tuyệt vời của tuổi trẻ. TEELAB đã sẵn sàng trải nghiệm cùng bạn!
                    </p>
                    <p  style="padding: 10px 0px;">“Enjoy Your Youth”, now!</p>
                    <img src="img/sidetun.jpg" alt="">
                    <p style="padding: 10px 0px;">Hướng dẫn sử dụng sản phẩm Teelab:</p>
                    <p>- Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ</p>
                    <p>- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.</p>
                    <p>- Không dùng hóa chất tẩy.</p>
                    <p>- Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.</p>
                    <p style="padding: 10px 0px;">Chính sách bảo hành:</p>
                    <p>- Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng.</p>
                    <p>- Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng</p>
                    <p>- Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.</p>
                </div>

                <div id="box-detail-bl" class="box-chuyendoi1" style="display: none;">
                    <div class="box-danhgia">
                        <h3>Đánh giá Áo Thun Local Brand Unisex M A G Seasonal Tshirt TS295</h3>
                        <div class="danhgia-sp">
                            <h4>buồi phương nam</h4>
                            <p style="padding: 5px 0px;">số sao:  <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            </p>
                            <p>mô tả: <span>woa sản phẩm này thật là tuyệt với</span></p>
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
