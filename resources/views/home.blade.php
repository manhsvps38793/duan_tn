@extends('app')

@section('body')
<style>
</style>
<section class="slider-container">
        <div class="slide-show">
            <div class="list-img">
                <img src="{{asset('/img/slide1.jpg')}}" alt="Image 1">
                <img src="{{asset('/img/slider_2.webp')}}" alt="Image 2">
                <img src="{{asset('/img/slider_3.webp')}}" alt="Image 3">
            </div>
            <div class="btn-left btns"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="btn-right btns"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
    </section>

    <div class="introduce">
        <p class="tieude">Enjoy Your Youth!</p>
        <p class="introduce-test">Không chỉ là thời trang, M A G còn là “phòng thí nghiệm”
            của tuổi trẻ - nơi nghiên cứu và cho  ra đời nguồn năng lượng
            mang tên “Youth”. Chúng mình luôn muốn tạo nên những trải
            nghiệm  vui vẻ, năng động và trẻ trung.
        </p>
    </div>
    <!-- san pham sale hết thời gian thì display none -->
     <section class="product-sale" style="margin-bottom: 10px">
        <div class="header-product-sale">
            <div>
            <h2 class="section-title">Đang giảm giá</h2>
            <img src="{{asset('/img/sale.webp')}}" alt="">
            </div>

            <div class="count-down">
                <p style="color: red;">Kết thúc sau:</p>
                <div class="box-time">
                    <div class="time time-hour">10</div>
                    <div class="time-bottom">Giờ</div>
                </div>
                <div class="box-time">
                    <div class="time time-minute">0</div>
                    <div class="time-bottom">Phút</div>
                </div>
                <div class="box-time">
                    <div class="time time-second">59</div>
                    <div class="time-bottom">Giây</div>
                </div>
            </div>
        </div>
        <div class="product-sale-box">
            <div class="product-sale-banner">
                <img src="{{asset('/img/Ảnh chụp màn hình 2025-05-24 230355.png')}}" alt="">

            </div>
            <ul class="row product-list-sale">
                <li class="item" style="background-color: white; border-radius: 7px;">
                    <div class="item-img" >
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="{{asset('img/aothun.webp')}}" alt=""></a>

                    </div>
                    <div class="item-name item-name-sale">
                        <h3><a href="">
                            Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                        </a></h3>
                    </div>
                    <div class="item-price item-price-sales">
                        <span style="color: red;padding-right: 10px;">195.000đ</span>
                        <span><del>300.000đ</del></span>
                    </div>
                </li>
            <!--  -->
                <li class="item" style="background-color: white; border-radius: 7px;">
                    <div class="item-img" >
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
                    </div>
                    <div class="item-name item-name-sale">
                        <h3><a href="">
                            Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                        </a></h3>
                    </div>
                    <div class="item-price item-price-sales">
                        <span style="color: red;padding-right: 10px;">195.000đ</span>
                        <span><del>300.000đ</del></span>
                    </div>
                </li>
            <!--  -->
                <li class="item" style="background-color: white; border-radius: 7px;">
                    <div class="item-img" >
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
                    </div>
                    <div class="item-name item-name-sale">
                        <h3><a href="">
                            Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                        </a></h3>
                    </div>
                    <div class="item-price item-price-sales">
                        <span style="color: red;padding-right: 10px;">195.000đ</span>
                        <span><del>300.000đ</del></span>
                    </div>
                </li>
            <!--  -->
                <li class="item" style="background-color: white; border-radius: 7px;">
                    <div class="item-img" >
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
                    </div>
                    <div class="item-name item-name-sale">
                        <h3><a href="">
                            Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                        </a></h3>
                    </div>
                    <div class="item-price item-price-sales">
                        <span style="color: red;padding-right: 10px;">195.000đ</span>
                        <span><del>300.000đ</del></span>
                    </div>
                </li>
                <!--  -->
                <li class="item" style="background-color: white; border-radius: 7px;">
                    <div class="item-img" >
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
                    </div>
                    <div class="item-name item-name-sale">
                        <h3><a href="">
                            Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                        </a></h3>
                    </div>
                    <div class="item-price item-price-sales">
                        <span style="color: red;padding-right: 10px;">195.000đ</span>
                        <span><del>300.000đ</del></span>
                    </div>
                </li>
                <li class="item" style="background-color: white; border-radius: 7px;">
                    <div class="item-img" >
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
                    </div>
                    <div class="item-name item-name-sale">
                        <h3><a href="">
                            Áo Thun Local Brand Unisex Summer Fresh Tshirt TS282
                        </a></h3>
                    </div>
                    <div class="item-price item-price-sales">
                        <span style="color: red;padding-right: 10px;">195.000đ</span>
                        <span><del>300.000đ</del></span>
                    </div>
                </li>
        </ul>
        </div>
     </section>
      <!-- load danh muc -->
     <section class="section-cat" style="padding-bottom: 10px; background-color: white; position: relative; z-index: 10;">
        <div class=" grid wide container">
             <h2 class="section-title" style="margin-bottom: 10px;">Danh mục</h2>
        <ul class="list-cat">
                <li class="item-category">
                    <img class="category-img" src="img/aothun.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Áo thun</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </li>


                <li class="item-category">
                    <img class="category-img" src="img/aokhoac.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Áo khoác</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </li>


                <li class="item-category">
                    <img class="category-img" src="img/polo.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Polo</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </li>

                <li class="item-category">
                    <img class="category-img" src="img/somi.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Sơ mi</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </li>
                <li class="item-category">
                    <img class="category-img" src="img/quan.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Quần</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </li>
                <li class="item-category">
                    <img class="category-img" src="img/aothun.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Áo thun</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </li>
        </ul>
    </div>
     </section>
    <!-- san pham pho bien -->
    <section class="product-new product-popular" style="height: 500px;">
        <div style="padding: 0px 7px;">
            <h2 class="section-title">Sản phẩm phổ biến</h2>
            <p class="p-des" style="font-size: 23px; margin-top: 12px;">Đừng bỏ lỡ các sản phẩm hot trong tháng 8 !!!</p>
            <a class="see-all-mobile" style="display: none" href="">Xem thêm</a>
        </div>
        <div class="list-tabs">
            <ul>
                <li class="tab-product-new">Sản phẩm mới</li>
                <li class="tab-product-bestseller">Sản phẩm bán chạy</li>
                <li class="tab-product-recommend">Sản phẩm gợi ý</li>
            </ul>
            <div>
                <a class="see-all-pc" href="">Xem thêm</a>
            </div>
        </div>
        {{-- ds sp mới --}}
        <div class=" grid wide container list-product-new active" style="margin-top: 20px">
            <ul class="product-list" >
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-41%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
            </ul>
        </div>
        {{-- ds sp bán chạychạy --}}
        <div class="grid wide container list-product-bestseller" style="margin-top: 20px">
            <ul class="product-list-bestseller">
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-42%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
            </ul>
        </div>
        {{-- ds sp gợi ý --}}
        <div class="grid wide container list-product-recommend" style="margin-top: 20px">
            <ul class="product-list-recommend">
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-43%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
                <li class="item">
                    <div class="item-img">
                        <span class="item-giam">-44%</span>
                        <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                        <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
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
                </li>
            </ul>
        </div>
    </section>

    <section class="about-mag">
        <div class="grid wide container" style="background-color: white; position: relative; z-index: 99;  ">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div style="padding-top: 30px; padding-bottom: 30px; width: 100%; background-color: white">
                        <h2 style="text-align: center; font-size: 35px;">Về chúng tôi</h2>
                    </div>
                    <div class="about-content">
                        <div class="about-img">
                            <img class="about-image" src="{{asset('/img/slide1.jpg')}}" alt="">
                        </div>
                        <div class="about-text">
                            <h2>Giới thiệu shop M A G</h2>
                            <p>Chúng tôi là một cửa hàng chuyên cung cấp các sản phẩm chất lượng cao với giá cả hợp lý. Với hơn 10 năm kinh nghiệm trong ngành, chúng tôi tự hào mang đến cho khách hàng những trải nghiệm mua sắm tốt nhất.</p>
                            <p>Đội ngũ nhân viên chuyên nghiệp, tận tâm luôn sẵn sàng hỗ trợ khách hàng 24/7. Chúng tôi cam kết chỉ bán những sản phẩm chính hãng, có nguồn gốc xuất xứ rõ ràng.</p>
                            <p>Hãy đến với chúng tôi để trải nghiệm dịch vụ tốt nhất và những ưu đãi hấp dẫn!</p>
                            <button>Xem thêm</button>
                        </div>
                    </div>
            </div>
    </div>
    </section>
    <div class="grid wide container" style="background-color: white; position: relative; z-index: 99;  ">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div style="padding-top: 30px; padding-bottom: 30px; width: 100%; background-color: white">
                   <h2 style="text-align: center; font-size: 35px;">Đăng ký nhận ưu đãi</h2>
                </div>
                <div class="about-us">
                    <div class="box-log">
                        <div class="text-content">
                            <h3 class="text">Trở thành thành viên của M A G ngay hôm nay !!</h3>
                            <h2 class="text" >Nhận ngay voucher freeship cho đơn hàng đầu tiên</h2>
                            <button class="btn-log">Đăng ký ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid wide container post-container" style="background-color: white; position: relative; z-index: 99; top: 0px">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%">
            <h2 style="font-size: 35px; font-weight: normal; padding: 20px 0px;">Tin tức</h2>
            <a href="tintuc.html">Xem tất cả</a>
        </div>

        <div class="row">
            <div class="col l-4 m-6 c-12">
                <div class="post-item">
                    <div class="post-img">
                        <img src="img/aokhoac.webp" alt="">
                    </div>
                    <div class="post-time">
                        <p>13/11/2005</p>
                    </div>
                    <div class="post-name">
                        <h2>Công bố ra mắt sản phẩm mới</h2>
                    </div>
                    <div class="post-content">
                        <p>Chào mừng bạn đến với M A G, nơi cung cấp các sản phẩm thời trang và phụ kiện dành cho giới trẻ yêu thích phong cách </p>
                    </div>
                    <button>Đọc tiếp>></button>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="post-item">
                    <div class="post-img">
                        <img src="img/aokhoac.webp" alt="">
                    </div>
                    <div class="post-time">
                        <p>13/11/2005</p>
                    </div>
                    <div class="post-name">
                        <h2>Công bố ra mắt sản phẩm mới</h2>
                    </div>
                    <div class="post-content">
                        <p>Chào mừng bạn đến với M A G, nơi cung cấp các sản phẩm thời trang và phụ kiện dành cho giới trẻ yêu thích phong cách </p>
                    </div>
                    <button>Đọc tiếp>></button>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="post-item">
                    <div class="post-img">
                        <img src="img/aokhoac.webp" alt="">
                    </div>
                    <div class="post-time">
                        <p>13/11/2005</p>
                    </div>
                    <div class="post-name">
                        <h2>Công bố ra mắt sản phẩm mới</h2>
                    </div>
                    <div class="post-content">
                        <p>Chào mừng bạn đến với M A G, nơi cung cấp các sản phẩm thời trang và phụ kiện dành cho giới trẻ yêu thích phong cách </p>
                    </div>
                    <button>Đọc tiếp>></button>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="post-item">
                    <div class="post-img">
                        <img src="img/aokhoac.webp" alt="">
                    </div>
                    <div class="post-time">
                        <p>13/11/2005</p>
                    </div>
                    <div class="post-name">
                        <h2>Công bố ra mắt sản phẩm mới</h2>
                    </div>
                    <div class="post-content">
                        <p>Chào mừng bạn đến với M A G, nơi cung cấp các sản phẩm thời trang và phụ kiện dành cho giới trẻ yêu thích phong cách </p>
                    </div>
                    <button>Đọc tiếp>></button>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="post-item">
                    <div class="post-img">
                        <img src="img/somi.webp" alt="">
                    </div>
                    <div class="post-time">
                        <p>13/11/2005</p>
                    </div>
                    <div class="post-name">
                        <h2>Công bố ra mắt sản phẩm mới</h2>
                    </div>
                    <div class="post-content">
                        <p>Chào mừng bạn đến với M A G, nơi cung cấp các sản phẩm thời trang và phụ kiện dành cho giới trẻ yêu thích phong cách </p>
                    </div>
                    <button>Đọc tiếp>></button>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="post-item">
                    <div class="post-img">
                        <img src="img/aothun.webp" alt="">
                    </div>
                    <div class="post-time">
                        <p>13/11/2005</p>
                    </div>
                    <div class="post-name">
                        <h2>Công bố ra mắt sản phẩm mới</h2>
                    </div>
                    <div class="post-content">
                        <p>Chào mừng bạn đến với M A G, nơi cung cấp các sản phẩm thời trang và phụ kiện dành cho giới trẻ yêu thích phong cách </p>
                    </div>
                    <button>Đọc tiếp>></button>
                </div>
            </div>
        </div>
    </div>

@endsection
