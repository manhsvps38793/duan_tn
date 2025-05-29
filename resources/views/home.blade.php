@extends('app')

@section('body')
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
     <section class="product-sale">
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
    <!-- san pham moi -->
    <section class="product-new">
        <div style="padding: 0px 5px;">
            <h2 class="section-title">Sản phẩm mới</h2>
            <a class="see-all" style="margin-top: 30px;" href="">Xem thêm</a>
        </div>
        <div class="grid wide container">
            <ul class="product-list">
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
    <!-- load danh muc -->
     <section class="section-cat" style="padding: 0px 20px;">
        <div class="grid wide container categories-container">
        <h2 class="section-title" style="margin-bottom: 10px;">Danh mục</h2>
        <div class="row">
            <div class="col l-2 m-6 c-4">
                <div class="item-category">
                    <img class="category-img" src="img/aothun.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Áo thun</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </div>
            </div>
            <div class="col l-2 m-6 c-4">
                <div class="item-category">
                    <img class="category-img" src="img/aokhoac.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Áo khoác</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </div>
            </div>
            <div class="col l-2 m-6 c-4">
                <div class="item-category">
                    <img class="category-img" src="img/polo.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Polo</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </div>
            </div>
            <div class="col l-2 m-6 c-4">
                <div class="item-category">
                    <img class="category-img" src="img/somi.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Sơ mi</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </div>
            </div>
            <div class="col l-2 m-6 c-4">
                <div class="item-category">
                    <img class="category-img" src="img/quan.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Quần</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </div>
            </div>
            <div class="col l-2 m-6 c-4">
                <div class="item-category">
                    <img class="category-img" src="img/aothun.webp" alt="">
                    <div class="detail-cat">
                        <h2 class="category-name">Áo thun</h2>
                        <a href="#"><button>Xem ngay</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </section>

    <section class="product-thun">
        <h2 class="product-name" style="margin-top: 30px;">Áo thun</h2>
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <a href="{{asset('/detail')}}"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <div class="item-name ">
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
                <!-- item xem them pc -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item-see-more">
                        <!--load ảnh danh mục -->
                        <img class="img-cate" src="img/aothun.webp" alt="Áo thun">
                        <!-- nút xem thêm -->
                        <a href="#" class="see-more-link">Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- item xem them mobile -->
            <div class="pruduct-xemthem">
                <a href="">Xem thêm</a>
            </div>
        </div>
    </section>

    <section class="product-thun">
        <h2 class="product-name">Áo polo</h2>
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6 ">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
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
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
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
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
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
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
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
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
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
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
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
                            <img src="img/polo.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Polo MAG Local Brand Unisex Flame AP055
                            </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!-- item xem them pc -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item-see-more">
                        <!--load ảnh danh mục -->
                        <img class="img-cate" src="img/polo.webp" alt="Áo thun">
                        <!-- nút xem thêm -->
                        <a href="#" class="see-more-link">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="pruduct-xemthem">
                <a href="">Xem thêm</a>
            </div>
        </div>
    </section>

    <section class="product-thun">
        <h2 class="product-name">Áo sơ mi</h2>
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6 ">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
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
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
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
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
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
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
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
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
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
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
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
                            <img src="img/somi.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                                Áo Sơ Mi Cộc Tay MAG Local Brand Line Shirt SS067
                            </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!-- item xem them pc -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item-see-more">
                        <!--load ảnh danh mục -->
                        <img class="img-cate" src="img/somi.webp" alt="Áo thun">
                        <!-- nút xem thêm -->
                        <a href="#" class="see-more-link">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="pruduct-xemthem">
                <a href="">Xem thêm</a>
            </div>
        </div>
    </section>

    <section class="product-thun">
        <h2 class="product-name">Áo khoác</h2>
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6 ">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
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
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
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
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
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
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
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
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
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
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
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
                            <img src="img/aokhoac.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Áo Khoác Len Local Brand Unisex MAG AK125
                            </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!-- item xem them pc -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item-see-more">
                        <!--load ảnh danh mục -->
                        <img class="img-cate" src="img/aokhoac.webp" alt="Áo thun">
                        <!-- nút xem thêm -->
                        <a href="#" class="see-more-link">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="pruduct-xemthem">
                <a href="">Xem thêm</a>
            </div>
        </div>
    </section>

    <section class="product-thun">
        <h2 class="product-name">Quần</h2>
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6 ">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
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
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
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
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
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
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
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
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
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
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
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
                            <img src="img/quan.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Quần Shorts Gió MAG Local Brand Loose Shorts PS083
                            </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!-- item xem them pc -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item-see-more">
                        <!--load ảnh danh mục -->
                        <img class="img-cate" src="img/quan.webp" alt="Áo thun">
                        <!-- nút xem thêm -->
                        <a href="#" class="see-more-link">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="pruduct-xemthem">
                <a href="">Xem thêm</a>
            </div>
        </div>
    </section>

    <section class="product-thun">
        <h2 class="product-name">Phụ kiện</h2>
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-6 c-6 ">
                    <div class="item">
                        <div class="item-img">
                            <span class="item-giam">-44%</span>
                            <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
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
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
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
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
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
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
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
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
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
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
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
                            <img src="img/phukien.webp" alt="">
                        </div>
                        <div class="item-name">
                            <h3><a href="">
                               Balo MAG Local Brand Mini Bag AC100 SS067 SS067
                            </a></h3>
                        </div>
                        <div class="item-price">
                            <span style="color: red;padding-right: 10px;">195.000đ</span>
                            <span><del>300.000đ</del></span>
                        </div>
                    </div>
                </div>
                <!-- item xem them pc -->
                <div class="col l-3 m-6 c-6 row-mobile">
                    <div class="item-see-more">
                        <!--load ảnh danh mục -->
                        <img class="img-cate" src="img/phukien.webp" alt="Áo thun">
                        <!-- nút xem thêm -->
                        <a href="#" class="see-more-link">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="pruduct-xemthem">
                <a href="">Xem thêm</a>
            </div>
        </div>
    </section>
    <div class="grid wide container">
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class="about-us">
                    <h2>Find out M A G more</h2>
                    <p>
                        MAG là thương hiệu thời trang được thành lập với mong muốn mang đến cho người Việt những sản phẩm quần áo chất lượng, hợp xu hướng và giá cả phải chăng. Chúng tôi hiểu rằng mỗi người đều xứng đáng được mặc đẹp mỗi ngày mà không phải lo lắng quá nhiều về chi phí hay sự phù hợp. Vì thế, MAG không ngừng nghiên cứu và phát triển để tạo ra những bộ trang phục đáp ứng được nhu cầu thực tế của người tiêu dùng Việt: vừa thời trang, vừa tiện dụng và phù hợp với nhiều hoàn cảnh sử dụng khác nhau.
Với phương châm "Đơn giản - Thanh lịch - Thoải mái", MAG hướng tới việc xây dựng một phong cách thời trang hiện đại nhưng không phô trương, nhẹ nhàng nhưng vẫn đầy cuốn hút. Sự đơn giản chính là điểm bắt đầu cho sự tinh tế, và chúng tôi tin rằng vẻ đẹp bền vững luôn đến từ những thiết kế hài hòa, dễ ứng dụng và mang tính cá nhân hóa cao.. <span><a style="color: red;" href="/about.html">Xem thêm</a></span>
                    </p>
                    <div style="width: 100%;">
                    <img style="width: 100%; margin-top: 15px;" src="/anh moi (1)/team.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 80%;color: #666;margin: 5px auto 0px auto;">
    <div class="grid wide container post-container">
        <div style="display: flex; justify-content: space-between; align-items: center;">
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
                </div>
            </div>
        </div>
    </div>

@endsection
