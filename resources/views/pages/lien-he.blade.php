@extends('layouts.app')
@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative" style="background: url('upload/banner/lien-he1698571547.jpg') center/cover no-repeat; min-height: 40vh;">
        
        
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-3 text-white">Liên hệ</h1>
            <p class="lead mb-0 text-white-50 mx-auto">Giữ liên hệ với chúng tôi</p>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="py-5 bg-light position-relative">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <!-- Contact Info -->
                            <div class="col-md-5 bg-success text-white p-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h3 class="fw-bold mb-4 text-white">Thông tin liên hệ</h3>
                                <p class="mb-4 opacity-75">Hãy để lại thông tin, chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất để tư vấn về sản phẩm.</p>
                                
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-location-dot fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Địa chỉ</h6>
                                        <p class="mb-0 small opacity-75">Xóm Chanh, Xã Sơn Hùng, Huyện Thanh Sơn, Tỉnh Phú Thọ</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-phone-volume fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Điện thoại</h6>
                                        <p class="mb-0 small opacity-75">0986843666</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-envelope fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Email</h6>
                                        <p class="mb-0 small opacity-75">kimthanhinvestmenttradingltd@gmail.com</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div class="col-md-7 p-5 bg-white" data-aos="fade-left">
                                <h4 class="fw-bold mb-4 text-dark">Gửi Tin Nhắn</h4>
                                <form action="https://kimthanhintc.com/contact.html" name="frmContact" id="frmContact" method="post">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="fullname" class="form-control bg-light border-0" id="nameInput" placeholder="Họ tên" required>
                                                <label for="nameInput">Họ tên *</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="telephone" class="form-control bg-light border-0" id="phoneInput" placeholder="Số điện thoại" required>
                                                <label for="phoneInput">Số điện thoại *</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control bg-light border-0" id="emailInput" placeholder="Email">
                                                <label for="emailInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="content" class="form-control bg-light border-0" id="messageInput" placeholder="Lời nhắn" style="height: 120px" required></textarea>
                                                <label for="messageInput">Lời nhắn *</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-success btn-lg rounded-pill px-5 shadow w-100">Gửi Liên Hệ</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section>
        <iframe src="https://www.google.com/maps/embed/pb%3D!1m18!1m12!1m3!1d.1!3m3!1m2!1s0x31348641ce3ad91b%253a0x996e9e127a4453f8!2ss%25c6%25a1n%2520h%25c3%25b9ng%252c%2520thanh%2520s%25c6%25a1n%2520district%252c%2520phu%2520tho%2520province%252c" width="100%" height="450" style="border:0; width: 100%; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
