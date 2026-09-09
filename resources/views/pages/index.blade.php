@extends('layouts.app')
@section('title', app()->getLocale() == 'en' ? 'Home' : 'Trang chủ')
@section('content')
    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative vh-100"
        style="background: url('upload/banner/tra-viet-nam-la-nghe-si1698571462.jpg') center/cover no-repeat; min-height: 80vh;">
        <div class="container position-relative text-white z-index-1" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-9 col-md-12 bg-dark bg-opacity-50 p-4 p-lg-5 rounded-4 glass-effect">
                    <h1 class="display-3 fw-bold mb-3 text-white">
                        {{ $settings['home_intro_title'] ?? 'Trà Việt Nam là nghệ sĩ' }}</h1>
                    <div class="lead mb-4 text-white">{!! $settings['home_intro_desc'] ??
                        'Chúng tôi luôn đặt chất lượng và an toàn thực phẩm lên hàng đầu trong mọi quy trình sản xuất. Toàn bộ hệ thống nhà xưởng và quy trình chế biến được đảm bảo đạt chuẩn ISO 22000:2018.' !!}</div>
                    <a href="{{ route(app()->getLocale() . '.about') }}"
                        class="btn btn-success btn-lg px-4 rounded-pill shadow">{{ app()->getLocale() == 'en' ? 'Discover now' : 'Khám phá ngay' }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section id="about-us" class="py-5 bg-light position-relative overflow-hidden">
        <!-- Optional Leaves decorations -->
        <img src="images/left_leaf.png"
            class="position-absolute top-50 start-0 translate-middle-y opacity-25 d-none d-lg-block"
            style="width: 150px; z-index: 0;">
        <img src="images/right_leaf.png"
            class="position-absolute top-50 end-0 translate-middle-y opacity-25 d-none d-lg-block"
            style="width: 150px; z-index: 0;">

        <div class="container py-4 position-relative z-index-1">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="upload/post/thumbs/about-us1698082096.png" alt="Giới thiệu"
                            class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="display-4 text-success text-uppercase fw-bold mb-2">
                        {{ app()->getLocale() == 'en' ? 'About Us' : 'Về Chúng Tôi' }}</h2>
                    <h4 class="fw-bold mb-4 text-success opacity-75">
                        {{ $settings['home_about_title'] ?? 'Giới thiệu Kim Thành' }}</h4>
                    <div class="text-muted fs-5 mb-4">
                        {!! $settings['home_about_desc'] ??
                            'Công ty TNHH Đầu tư Thương mại Kim Thành được thành lập vào ngày 03/02/2020...' !!}
                    </div>
                    <a href="{{ route(app()->getLocale() . '.about') }}"
                        class="btn btn-outline-success btn-lg rounded-pill px-4">{{ app()->getLocale() == 'en' ? 'View details' : 'Xem chi tiết' }}
                        <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="home-products" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-2" data-aos="fade-up">
                <h2 class="display-4 text-success text-uppercase fw-bold mb-2">
                    {{ app()->getLocale() == 'en' ? 'Featured Products' : 'Sản phẩm nổi bật' }}</h2>
            </div>

            @php
                $groupedProducts = $products->groupBy(function ($item) {
                    return $item->category
                        ? $item->category->getTranslation('name', app()->getLocale())
                        : (app()->getLocale() == 'en'
                            ? 'Others'
                            : 'Khác');
                });
            @endphp

            @foreach ($groupedProducts as $categoryName => $group)
                <div class="text-center mb-4 {{ $loop->first ? 'mt-2' : 'mt-5 pt-3' }}" data-aos="fade-up">
                    <h4 class="fw-bold text-success opacity-75">{{ $categoryName }}</h4>
                    <div class="mx-auto bg-success mt-3" style="height: 3px; width: 60px;"></div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($group as $index => $product)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="{{ route(app()->getLocale() . '.product.detail', ['slug' => $product->slug]) }}">
                                        <img src="{{ $product->getFirstMediaUrl('products') ?: asset('images/no-image.jpg') }}"
                                            class="card-img-top w-100 object-fit-cover"
                                            alt="{{ $product->getTranslation('name', app()->getLocale()) }}"
                                            style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="{{ route(app()->getLocale() . '.product.detail', ['slug' => $product->slug]) }}"
                                            class="text-dark text-decoration-none fw-semibold product-title">{{ $product->getTranslation('name', app()->getLocale()) }}</a>
                                    </h5>
                                    <a href="{{ route(app()->getLocale() . '.contact') }}"
                                        class="btn btn-success rounded-pill px-4 py-2 w-100">{{ app()->getLocale() == 'en' ? 'Contact for price' : 'Liên hệ báo giá' }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route(app()->getLocale() . '.products') }}"
                    class="btn btn-outline-success btn-lg rounded-pill px-5">{{ app()->getLocale() == 'en' ? 'View all products' : 'Xem tất cả sản phẩm' }}</a>
            </div>
        </div>
    </section>

    @include('partials.contact_form')
@endsection
