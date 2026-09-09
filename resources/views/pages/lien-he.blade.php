@extends('layouts.app')
@section('title', app()->getLocale() == 'en' ? 'Contact' : 'Liên hệ')
@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative vh-100"
        style="background: url('{{ isset($settings['contact_hero_image']) && $settings['contact_hero_image'] ? asset($settings['contact_hero_image']) : asset('upload/banner/lien-he1698571547.jpg') }}') center/cover no-repeat; min-height: 80vh;">
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-3 fw-bold mb-3 text-white">{{ $settings['contact_hero_title'] ?? 'Liên hệ' }}</h1>
            <div class="lead mb-0 text-white mx-auto">{!! $settings['contact_hero_desc'] ?? 'Giữ liên hệ với chúng tôi' !!}</div>
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
                            <div class="col-md-5 bg-success text-white p-4 p-md-5 d-flex flex-column justify-content-center"
                                data-aos="fade-right">
                                <h3 class="fw-bold mb-4 text-white">{{ app()->getLocale() == 'en' ? 'Contact Information' : 'Thông tin liên hệ' }}</h3>
                                <p class="mb-4 opacity-75">{{ app()->getLocale() == 'en' ? 'Please leave your information, we will contact you as soon as possible to advise on products.' : 'Hãy để lại thông tin, chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất để tư vấn về sản phẩm.' }}</p>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-location-dot fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">{{ app()->getLocale() == 'en' ? 'Address' : 'Địa chỉ' }}</h6>
                                        <p class="mb-0 small opacity-75">{{ $settings['contact_address'] ?? 'Xóm Chanh, Xã Sơn Hùng, Huyện Thanh Sơn, Tỉnh Phú Thọ' }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-phone-volume fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">{{ app()->getLocale() == 'en' ? 'Phone' : 'Điện thoại' }}</h6>
                                        <p class="mb-0 small opacity-75">{{ $settings['contact_phone'] ?? '0986843666' }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-envelope fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Email</h6>
                                        <p class="mb-0 small opacity-75">{{ $settings['contact_email'] ?? 'kimthanhinvestmenttradingltd@gmail.com' }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div class="col-md-7 p-4 p-md-5 bg-white" data-aos="fade-left">
                                <h4 class="fw-bold mb-4 text-dark">{{ app()->getLocale() == 'en' ? 'Send a Message' : 'Gửi Tin Nhắn' }}</h4>
                                
                                @if (session('success'))
                                    <div class="alert alert-success border-0 bg-success bg-opacity-10 text-success rounded-3 mb-4">
                                        <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                                    </div>
                                @endif
                                
                                <form action="{{ route('contact.submit') }}" name="frmContact" id="frmContact"
                                    method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="name" class="form-control bg-light border-0"
                                                    id="nameInput" placeholder="{{ app()->getLocale() == 'en' ? 'Full name' : 'Họ tên' }}" required>
                                                <label for="nameInput">{{ app()->getLocale() == 'en' ? 'Full name *' : 'Họ tên *' }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="phone"
                                                    class="form-control bg-light border-0" id="phoneInput"
                                                    placeholder="{{ app()->getLocale() == 'en' ? 'Phone number' : 'Số điện thoại' }}" required>
                                                <label for="phoneInput">{{ app()->getLocale() == 'en' ? 'Phone number *' : 'Số điện thoại *' }}</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control bg-light border-0"
                                                    id="emailInput" placeholder="Email">
                                                <label for="emailInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="message" class="form-control bg-light border-0" id="messageInput" placeholder="{{ app()->getLocale() == 'en' ? 'Message' : 'Lời nhắn' }}"
                                                    style="height: 120px" required></textarea>
                                                <label for="messageInput">{{ app()->getLocale() == 'en' ? 'Message *' : 'Lời nhắn *' }}</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit"
                                                class="btn btn-success btn-lg rounded-pill px-5 shadow w-100">{{ app()->getLocale() == 'en' ? 'Send Message' : 'Gửi Liên Hệ' }}</button>
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
        <iframe
            src="https://maps.google.com/maps?q=21.3584312,105.2935298+(X%C3%B3m%20Chanh%2C%20X%C3%A3%20S%C6%A1n%20H%C3%B9ng%2C%20Huy%E1%BB%87n%20Thanh%20S%C6%A1n%2C%20T%E1%BB%89nh%20Ph%C3%BA%20Th%E1%BB%8D%2C%20Vi%E1%BB%87t%20Nam)&t=&z=14&ie=UTF8&iwloc=B&output=embed"
            width="100%" height="450" style="border:0; width: 100%; display: block;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
