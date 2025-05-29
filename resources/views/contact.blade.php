@extends('app')

@section('body')
 <div class="container">
        <h1 class="contact-title">Liên hệ</h1>
        <div class="contact-form">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="name" id="name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên'"
                                placeholder="Nhập tên">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Email'"
                                placeholder="Nhập Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập chủ đề'"
                                placeholder="Nhập chủ đề">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập nội dung'"
                                placeholder=" Nhập nội dung"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Gửi</button>
                </div>
            </form>
            <div class="contact-form-right">
                <div class="contact-info">
                    <i class="fa-solid fa-house"></i>
                    <div class="contact-info-contents">
                        <p>Tô ký, Quận 12.</p>
                        <p class="color-info"> 48/5d2, tổ 28, kp2</p>
                    </div>
                </div>
                <div class="contact-info">
                    <i class="fa-solid fa-phone-volume"></i>
                    <div class="contact-info-contents">
                        <p>+84 962615032.</p>
                        <p class="color-info"> Thứ Hai đến Thứ Sáu 9 giờ sáng đến 6 giờ chiều</p>
                    </div>
                </div>
                <div class="contact-info">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="contact-info-contents">
                        <p>support@MAG.com.</p>
                        <p class="color-info"> Phản hồi trong vòng 48 giờ</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509.035794285457!2d106.62620100596638!3d10.853260679978776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b000b443099%3A0xd621fe8545f120de!2zVMO0IEvDvSxRdeG6rW4gMTI!5e0!3m2!1svi!2s!4v1748399265026!5m2!1svi!2s"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
