@extends('layouts.app')
@section('title', 'Phát triển chè bền vững phải gắn với nông nghiệp sạch')
@section('content')
<!-- BLOG POST -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-4 p-lg-5">
<div class="container mt-5"><h2>Phát triển chè bền vững phải gắn với nông nghiệp sạch</h2><p class="p-3"></p><div class="p-3 post-detail"></div>
<div class="mt-5 pt-4 border-top related-slider-wrapper position-relative">
    <h4 class="fw-bold mb-4" style="color: var(--primary-green);">Bài viết khác</h4>
    <div class="swiper related-posts-swiper pb-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                    <div class="position-relative overflow-hidden rounded-top-4">
                        <a href="nguoi-di-tim-mau-xanh-cho-dat-265.html">
                            <img src="{{ asset('upload/post/thumbs/nguoi-di-tim-mau-xanh-cho-dat1745404857.jpg') }}" class="card-img-top w-100 object-fit-cover" alt="Người đi tìm màu xanh cho đất" style="height: 250px;">
                        </a>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title mb-3 lh-base">
                            <a href="nguoi-di-tim-mau-xanh-cho-dat-265.html" class="text-dark text-decoration-none fw-semibold blog-title">Người đi tìm màu xanh cho đất</a>
                        </h5>
                        <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                            <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                            <a href="nguoi-di-tim-mau-xanh-cho-dat-265.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                    <div class="position-relative overflow-hidden rounded-top-4">
                        <a href="nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-267.html">
                            <img src="{{ asset('upload/post/thumbs/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh1745404885.jpg') }}" class="card-img-top w-100 object-fit-cover" alt="Những lợi ích có thể bạn chưa biết về chè xanh" style="height: 250px;">
                        </a>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title mb-3 lh-base">
                            <a href="nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-267.html" class="text-dark text-decoration-none fw-semibold blog-title">Những lợi ích có thể bạn chưa biết về chè xanh</a>
                        </h5>
                        <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                            <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                            <a href="nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-267.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-prev-custom btn btn-success rounded-circle d-flex align-items-center justify-content-center shadow d-none d-md-flex" style="position: absolute; top: 55%; left: -25px; transform: translateY(-50%); width: 45px; height: 45px; cursor: pointer; z-index: 10;">
        <i class="fa-solid fa-chevron-left"></i>
    </div>
    <div class="swiper-button-next-custom btn btn-success rounded-circle d-flex align-items-center justify-content-center shadow d-none d-md-flex" style="position: absolute; top: 55%; right: -25px; transform: translateY(-50%); width: 45px; height: 45px; cursor: pointer; z-index: 10;">
        <i class="fa-solid fa-chevron-right"></i>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .swiper-button-disabled {
        display: none !important;
    }
    .swiper-button-prev-custom, .swiper-button-next-custom {
        background-color: var(--primary-green);
        border-color: var(--primary-green);
        color: white;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .related-slider-wrapper:hover .swiper-button-prev-custom,
    .related-slider-wrapper:hover .swiper-button-next-custom {
        opacity: 1;
        visibility: visible;
    }
    .swiper-button-prev-custom:hover, .swiper-button-next-custom:hover {
        background-color: #6a9526;
        border-color: #6a9526;
        color: white;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.related-posts-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            watchOverflow: true,
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>
@endsection
