@extends('app')

@section('body')
    <div class="pruductall">
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 c-0">
                    <div class="pruductall-danhmuc">
                        <h2>Danh mục</h2>
                        <div class="product-category-filter">
                            <label><input type="checkbox" name="checkbox-cate" value="ao_thun"> Áo Thun</label>
                            <label><input type="checkbox" name="checkbox-cate" value="ao_polo"> Áo Polo</label>
                            <label><input type="checkbox" name="checkbox-cate" value="ao_so_mi" checked> Áo sơ mi</label>
                            <label><input type="checkbox" name="checkbox-cate" value="ao_khoac" checked> Áo khoác</label>
                            <label><input type="checkbox" name="checkbox-cate" value="quan"> Quần</label>
                            <label><input type="checkbox" name="checkbox-cate" value="phu_kien"> Phụ kiện</label>
                        </div>
                    </div>
                </div>
                <style>
                    /* ko được sửa xóa di chuyển css này because will it errol*/
                    .product-filter-bar-mobile {
                        display: none;
                    }

                    @media (max-width: 576px) {
                        .lSSlideOuter .product-filter-bar-mobile {
                            display: flex !important;
                            justify-content: center;
                            align-items: center;
                            padding: 16px;
                            height: auto !important;
                        }

                        .product-filter-bar-mobile > .product-filter-item-mobile{
                            list-style: none;
                            width: auto;
                            border: 1px solid black;
                            border-radius: 5px;
                            padding: 7px 12px;
                            margin-right: 10px;
                            white-space: nowrap;
                            text-align: center;
                            cursor: pointer;
                        }
                        .product-filter-item-mobile.active {
                            background: #000;
                            color: #fff;
                        }
                    }
                </style>
                <!-- lọc danh mục mobile  -->
                <ul class="product-filter-bar-mobile">
                    <li class="product-filter-item-mobile">Tất cả</li>
                    <li class="product-filter-item-mobile">Cho nam</li>
                    <li class="product-filter-item-mobile">Cho nữ</li>
                    <li class="product-filter-item-mobile">Áo thun</li>
                    <li class="product-filter-item-mobile">Polo</li>
                    <li class="product-filter-item-mobile">Sơ mi</li>
                    <li class="product-filter-item-mobile">Quần</li>
                    <li class="product-filter-item-mobile">Áo khoác</li>
                    <li class="product-filter-item-mobile">Phụ kiện</li>
                </ul>

                <div class="col l-9">
                    <div class="product-box-sp">
                        <div id="box1" class="box-sanpham active-sanpham">
                            <section class="product-thun">
                                <div class="grid wide container">
                                    <style>
                                        .product-sort-mobile{
                                            display: flex;
                                            align-items: center;
                                            justify-content: space-between;
                                        }
                                        .product-sort-mobile>.sort-item{
                                            width: auto;
                                            padding: 3px 7px;
                                        }
                                    </style>
                                    <div class="product-sort-mobile">
                                        <h2 class="product-name product-name-size">Tất cả sản phẩm</h2>
                                        <select class="sort-item" name="" id="">
                                            <option value="">Mặc định</option>
                                            <option value="">Bán chạy nhất</option>
                                            <option value="">Giá: Tăng dần</option>
                                            <option value="">Giá: Giảm dần</option>
                                            <option value="">Tên: A-Z</option>
                                            <option value="">Tên: Z-A</option>
                                            <option value="">Mới nhất</option>
                                            <option value="">Cũ nhất</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <a href="/detail.html"><img src="img/aothun.webp" alt=""></a>
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
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
                                <div>

                                </div>
                            </section>
                            <div class="chuyentrang">
                                <button onclick="showBox(1)" class="active-sanpham" id="btn1-1">1</button>
                                <button onclick="showBox(2)" id="btn1-2">2</button>
                                <button onclick="showBox(3)" id="btn1-3">3</button>
                            </div>

                        </div>
                        <div id="box2" class="box-sanpham">
                            <section class="product-thun">
                                <h2 class="product-name product-name-size">Tất cả sản phẩm</h2>
                                <div class="grid wide container">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/aokhoac.webp" alt="">
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
                                <div>

                                </div>
                            </section>
                            <div class="chuyentrang">
                                <button onclick="showBox(1)" id="btn2-1">1</button>
                                <button onclick="showBox(2)" class="active-sanpham" id="btn2-2">2</button>
                                <button onclick="showBox(3)" id="btn2-3">3</button>
                            </div>
                        </div>
                        <div id="box3" class="box-sanpham">
                            <section class="product-thun">
                                <h2 class="product-name product-name-size">Tất cả sản phẩm</h2>
                                <div class="grid wide container">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 ">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                        <div class="col l-4 m-6 c-6 row-mobile">
                                            <div class="item product-pading-size">
                                                <div class="item-img">
                                                    <span class="item-giam">-44%</span>
                                                    <div class="item-icon"><i class="fa-solid fa-cart-shopping"></i>
                                                    </div>
                                                    <img src="img/phukien.webp" alt="">
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
                                <div>

                                </div>
                            </section>
                            <div class="chuyentrang">
                                <button onclick="showBox(1)" id="btn3-1">1</button>
                                <button onclick="showBox(2)" id="btn3-2">2</button>
                                <button onclick="showBox(3)" class="active-sanpham" id="btn3-3">3</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script>
    // timf kiem mobile
    document.addEventListener("DOMContentLoaded", function () {
        const searchButton = document.querySelector(".Search");
        const searchInputMobile = document.querySelector(".search-input-mobile");

        searchButton.addEventListener("click", function () {
            searchInputMobile.classList.toggle("active");
        });
    });
    // Hàm xử lý active cho từng nhóm
    function setupActiveLinks(selector) {
        const items = document.querySelectorAll(selector);

        items.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault(); // Ngăn chuyển trang

                // Xóa active khỏi tất cả các thẻ a trong cùng nhóm ul
                items.forEach(link => link.classList.remove('active'));

                // Thêm class active vào thẻ được nhấn
                this.classList.add('active');
            });
        });
    }

    // Gọi hàm cho từng nhóm menu
    setupActiveLinks('.pruductall-danhmuc ul:nth-of-type(1) li'); // Danh mục
    setupActiveLinks('.pruductall-danhmuc ul:nth-of-type(2) li'); // Sắp xếp


    // loc danh mujc mobile

    $(document).ready(function () {
        if ($(window).width() <= 576) {
            $('.product-filter-bar-mobile').lightSlider({
                item: 4,
                slideMove: 1,
                slideMargin: 10,
                loop: false,
                auto: false,
                controls: false,
                pager: false,
                enableDrag: true,   // ✅ Bật kéo bằng tay
                freeMove: true,     // ✅ Trượt tự do
                swipeThreshold: 40, // ✅ Giảm độ nhạy cho mượt
                speed: 400          // ✅ Tốc độ trượt
            });
        }
    });

    //đổi màu khi nhấn lọc danh mụcmục
    $(document).ready(function () {
        $('.product-filter-item-mobile').click(function () {
            $('.product-filter-item-mobile').removeClass('active');

            $(this).addClass('active');
        });
    });

</script>
@endsection
