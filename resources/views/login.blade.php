@extends('app')

@section('body')
 <div class="grid wide container">
        <div class="row">
            <div class="col l-4 c-12 m-12 l-o-4">
                <div class="dangky-all">
                    <h2>Đăng nhập</h2>
                    <form action="" method="post">
                        <input class="dangky-all-input" type="number" placeholder="nhập số điện thoại">
                        <input class="dangky-all-input" type="password" placeholder="nhập mật khẩu">
                        <input class="dangky-all-inputdangky" type="submit" value="Đăng nhập">
                    </form>
                    <p>nếu bạn chưa có tài khoản hãy đăng ký ngay để nhận được ưu đãi <a href="/dangky.html">đăng Ký</a> tại đây</p>
                    <div class="grid wide container">
                        <div class="row icon-center">
                            <div class="col l-6 c-6">
                                <div class="footer-icon footer-icon-đangky">
                                    <img src="img/facebook.svg" alt="">
                                    <p>Đăng ký nhanh bằng tài khoản Facabook</p>
                                </div>
                            </div>
                            <div class="col l-6 c-6">
                                <div class="footer-icon footer-icon-đangky">
                                    <img src="img/instagram.svg" alt="">
                                    <p>Đăng ký nhanh bằng tài khoản Facabook</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
