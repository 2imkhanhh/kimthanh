@extends('layouts.app')
@section('title', app()->getLocale() == 'en' ? 'About Us' : 'Giới thiệu')
@section('content')
    <section id="hero" class="d-flex align-items-center position-relative vh-100"
        style="background: url('{{ isset($settings['about_hero_image']) && $settings['about_hero_image'] ? asset($settings['about_hero_image']) : asset('upload/banner/gioi-thieu1698571489.jpg') }}') center/cover no-repeat; min-height: 80vh;">
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-3 fw-bold mb-3 text-white">{{ $settings['about_hero_title'] ?? 'Giới thiệu Kim Thành' }}</h1>
            <div class="lead mb-0 text-white mx-auto" style="max-width: 800px;">{!! $settings['about_hero_desc'] ?? 'Chúng tôi luôn đặt chất lượng và an toàn thực phẩm lên hàng đầu...' !!}</div>
        </div>
    </section>

    <section class="py-5 bg-white position-relative overflow-hidden">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{ isset($settings['home_about_image']) && $settings['home_about_image'] ? asset($settings['home_about_image']) : asset('upload/post/thumbs/about-us1698082096.png') }}"
                        alt="Giới thiệu" class="img-fluid rounded-4 shadow-lg w-100 object-fit-cover">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="display-4 text-success text-uppercase fw-bold mb-2">
                        {{ app()->getLocale() == 'en' ? 'About Us' : 'Về Chúng Tôi' }}</h2>
                    <h4 class="fw-bold mb-4 text-success opacity-75">
                        {!! nl2br(e($settings['about_short'] ?? 'Giới thiệu ngắn về Kim Thành')) !!}
                    </h4>
                    <div class="text-muted fs-5 mb-4">
                        {!! !empty($settings['about_long']) ? nl2br(e($settings['about_long'])) : 'Nội dung giới thiệu chi tiết' !!}
                    </div>
                </div>
            </div>
    </section>

    <style>
        #about-us-1::before {
            display: none !important;
        }
    </style>

    <section id="about-us-1"
        style="background: url('{{ asset('images/bg-about1.jpg') }}') center center no-repeat; background-size: cover; padding: 190px 0;">
        <div class="container position-relative z-index-2">
            <div class="about-us-warp mx-auto text-white" data-aos="fade-up"
                style="max-width: 900px; background: transparent; border: none; backdrop-filter: none; padding: 0;">
                <div
                    style="text-align: justify; font-size: 17px; line-height: 1.8; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
                    {!! nl2br(
                        e(
                            $settings['about_extended'] ??
                                "Chúng tôi luôn đặt chất lượng và an toàn thực phẩm lên hàng đầu trong mọi quy trình sản xuất. Toàn bộ hệ thống nhà xưởng và quy trình chế biến được đảm bảo đạt chuẩn ISO 22000:2018 về hệ thống quản lý an toàn thực phẩm và có đầy đủ Giấy chứng nhận An toàn thực phẩm (ATTP) do cơ quan chức năng cấp phép. Đây chính là nền tảng vững chắc giúp sản phẩm của chúng tôi không chỉ đáp ứng được yêu cầu khắt khe từ các thị trường quốc tế mà còn giữ trọn hương vị tự nhiên, tinh khiết vốn có của vùng nguyên liệu.\n\nVới đội ngũ nhân sự giàu kinh nghiệm, tinh thần trách nhiệm cao và tâm huyết với nông nghiệp sạch, công ty TNHH Đầu tư Thương mại Kim Thành cam kết tiếp tục mở rộng quy mô, nâng cao chất lượng sản phẩm, góp phần đưa thương hiệu chè Việt vươn xa hơn nữa trên bản đồ nông sản toàn cầu.",
                        ),
                    ) !!}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <img src="upload/post/tam-nhin1745834206.png" alt="Tầm nhìn" class="img-fluid"
                        style="max-height: 400px; mix-blend-mode: multiply;">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="display-4 text-success text-uppercase fw-bold mb-4">
                        {{ app()->getLocale() == 'en' ? 'Vision' : 'Tầm nhìn' }}</h2>
                    <div class="text-muted fs-5 mb-0">
                        {!! nl2br(e($settings['vision'] ?? 'Tầm nhìn của công ty...')) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-right">
                    <h2 class="display-4 text-success text-uppercase fw-bold mb-4">
                        {{ app()->getLocale() == 'en' ? 'Mission' : 'Sứ mệnh' }}</h2>
                    <div class="text-muted fs-5 mb-0">
                        {!! nl2br(e($settings['mission'] ?? 'Sứ mệnh của công ty...')) !!}
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-end" data-aos="fade-left">
                    <img src="upload/post/su-menh1745834215.png" alt="Sứ mệnh" class="img-fluid"
                        style="max-height: 400px; mix-blend-mode: multiply;">
                </div>
            </div>
        </div>
    </section>

    <!-- CULTURE SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <img src="upload/post/van-hoa-cong-ty1745834224.png" alt="Văn hoá công ty" class="img-fluid"
                        style="max-height: 400px; mix-blend-mode: multiply;">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="display-4 text-success text-uppercase fw-bold mb-4">
                        {{ app()->getLocale() == 'en' ? 'Company Culture' : 'Văn hoá công ty' }}</h2>
                    <div class="text-muted fs-5 mb-0">
                        {!! nl2br(e($settings['company_culture'] ?? 'Văn hoá công ty...')) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES SECTION -->
    @php
        $storedValues = $settings['core_values'] ?? null;
        $coreValues = [];

        if (is_array($storedValues)) {
            foreach ($storedValues as $index => $val) {
                if (is_string($val)) {
                    $coreValues[] = [
                        'title' => $val,
                        'desc' => '',
                    ];
                } elseif (is_array($val)) {
                    $coreValues[] = [
                        'title' => $val['title'] ?? '',
                        'desc' => $val['content'] ?? '',
                    ];
                }
            }
        } elseif ($storedValues === null) {
            $coreValues = [
                [
                    'title' => 'Chất lượng là nền tảng',
                    'desc' =>
                        'Luôn đặt chất lượng sản phẩm lên hàng đầu, từ quy trình sản xuất đến tiêu chuẩn an toàn thực phẩm quốc tế.',
                ],
                [
                    'title' => 'Uy tín là cam kết',
                    'desc' => 'Giữ vững chữ tín với đối tác, khách hàng và cộng đồng trong mọi hoạt động.',
                ],
                [
                    'title' => 'Bền vững là định hướng',
                    'desc' =>
                        'Phát triển hài hòa giữa lợi ích doanh nghiệp, người nông dân và môi trường, hướng đến nông nghiệp xanh - sạch - bền vững.',
                ],
            ];
        }
    @endphp

    @if (count($coreValues) > 0)
        <section class="py-5 text-white position-relative"
            style="background: url('{{ asset('upload/banner/tra-viet-nam-la-nghe-si1698571462.jpg') }}') center top / cover no-repeat;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
            <div class="container py-5 position-relative" style="z-index: 1;">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-4 text-uppercase fw-bold text-white mb-3">
                        {{ app()->getLocale() == 'en' ? 'Core Values' : 'Giá trị cốt lõi' }}</h2>
                    <div class="mx-auto bg-white" style="height: 3px; width: 60px;"></div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    @foreach ($coreValues as $idx => $cv)
                        @php
                            $imgDefault = 'upload/post/core-value-11698080943.png';
                            if ($idx % 3 == 1) {
                                $imgDefault = 'upload/post/core-value-21698080955.png';
                            }
                            if ($idx % 3 == 2) {
                                $imgDefault = 'upload/post/core-value-31698080968.png';
                            }
                        @endphp
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ ($idx + 1) * 100 }}">
                            <div
                                class="card h-100 border-0 bg-white bg-opacity-10 text-white text-center p-4 rounded-4 hover-glass">
                                <div class="mb-4">
                                    <img src="{{ asset($imgDefault) }}" alt="Core Value" style="height: 80px;">
                                </div>
                                <h4 class="fw-bold mb-3 text-white">{{ $cv['title'] }}</h4>
                                <p class="mb-0 opacity-75">{!! nl2br(e($cv['desc'])) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
