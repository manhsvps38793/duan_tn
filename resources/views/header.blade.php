 <header>
        <div class="nav-top">
            <label for="nav_mobile" class="nav-mobile-btn">
                <i class="fa-solid fa-bars fa-xl"></i>
            </label>

            <input hidden type="checkbox" class="nav_input" id="nav_mobile">

            <label for="nav_mobile" class="nav_overlay"></label>

            <nav class="nav_mobile">

                <label for="nav_mobile" class="mobile-close">
                    <i class="fa-regular fa-circle-xmark fa-lg" style="color: #666;"></i>
                </label>
                <div class="nav-logo-mobile" style="margin: 60px 0px 0px 30px;">
                    <h2 style=" font-weight: 450; font-size: 35PX;">M A G</h2>
                </div>
                <ul class="list">
                    <li><a class="mobile_link" href="{{asset('/')}}">Trang chủ</a></li>
                    <li><a class="mobile_link" href="/pruduct.html">Sản phẩm</a></li>
                        <li><a class="mobile_link sp" href="#">Áo thun</a></li>
                        <li><a class="mobile_link sp" href="#">Áo polo</a></li>
                        <li><a class="mobile_link sp" href="#">Áo sơ mi</a></li>
                        <li><a class="mobile_link sp" href="#">Áo khoác</a></li>
                        <li><a class="mobile_link sp" href="#">Quần</a></li>
                        <li><a class="mobile_link sp" href="#">Phụ kiện</a></li>
                    <li><a class="mobile_link" href="/form.html">Bảng size</a></li>
                    <li><a class="mobile_link" href="/Returns.html">Chính sách đổi trả</a></li>
                    <li><a class="mobile_link" href="/about.html">Về chúng tôi</a></li>
                    <li><a class="mobile_link" href="/about.html">Yêu thích</a></li>

                    <br><br>
                    <!-- đã đăng nhập-->
                    <li><a class="mobile_link" href="/info-user.html">Tài khoản</a></li>

                    <!-- chưa đăng nhập  -->
                    <li><a class="mobile_link" href="/dangnhap.html">Đăng nhập</a></li>
                    <li><a class="mobile_link" href="/dangky.html">Đăng ký</a></li>

                </ul>
            </nav>

            <div class="logo">
                <a href="{{asset('/')}}"><b style=" font-weight: 450; font-size: 35PX;text-decoration: none;color: black;">M A G</b></a>
            </div>
            <div class="Search">
                <form action="">
                    <input type="text" placeholder="Tìm kiếm sản phẩm...">
                    <div class="icon-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <!-- load nav -->
            <div class="nav-pc">
                <ul>
                    <li><a href="{{asset('/')}}">Trang chủ</a></li>
                    <li><a href="{{asset('/product')}}">Sản phẩm</a></li>
                    <li><a href="{{asset('/about')}}">Về chúng tôi</a></li>
                    <li><a href="{{asset('/contact')}}">Liên hệ</a></li>
                    <li><a href="{{asset('/news')}}">Tin tức</a></li>
                </ul>
            </div>

            <div class="user">
                <div class="cart-container">
                    <a href="{{asset('/cart')}}"><i class="fa-solid fa-cart-shopping fa-xl" style="color: rgb(255, 64, 64);"></i></a>
                    <div class="cart-badge">0</div>
                </div>
                <div class="user-all">
                    <ul>
                        <li>
                            <a href="{{asset('/infouser')}}"><i class="fa-solid fa-circle-user fa-2xl" style="color: rgb(189, 189, 189);"></i></a>
                            <ul>
                                <li><a href="{{asset('/login')}}">Đăng nhập</a></li>
                                <li><a href="{{asset('/register')}}">Đăng ký</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="search-input-mobile">
            <form action="" style="padding: 0px 10px;">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <div class="icon-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </form>
        </div>
        <nav class="nav_pc_bottom">
            <!-- load all danh muc -->
            <ul>
                <li><a href="{{asset('/product')}}">Áo thun</a></li>
                <li><a href="{{asset('/product')}}">Sơ mi</a></li>
                <li><a href="{{asset('/product')}}">Áo khoác</a></li>
                <li><a href="{{asset('/product')}}">Áo polo</a></li>
                <li><a href="{{asset('/product')}}">Quần</a></li>
                <li><a href="{{asset('/product')}}">Phụ kiện</a></li>
                <li><a href="{{asset('/product')}}">Cho nam</a></li>
                <li><a href="{{asset('/product')}}">Cho nữ</a></li>
            </ul>
        </nav>
    </header>
