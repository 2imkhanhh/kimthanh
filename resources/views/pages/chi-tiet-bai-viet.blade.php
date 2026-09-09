@extends('layouts.app')
@section('title', $post->getTranslation('title', app()->getLocale()))
@section('content')
<!-- BLOG POST -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-4 p-lg-5">
                        <div class="container mt-5">
                            <h2>{{ $post->getTranslation('title', app()->getLocale()) }}</h2>
                            <p class="p-3 text-muted"><i class="fa-regular fa-calendar-days me-2"></i>{{ $post->created_at->format('d-m-Y') }}</p>
                            <div class="p-3 post-detail">
                                {!! $post->getTranslation('content', app()->getLocale()) !!}
                            </div>
                        </div>
                        
                        @if(count($relatedPosts) > 0)
                        <div class="mt-5 pt-4 border-top related-slider-wrapper position-relative">
                            <h4 class="fw-bold mb-4" style="color: var(--primary-green);">{{ app()->getLocale() == 'en' ? 'Related Posts' : 'Bài viết khác' }}</h4>
                            <div class="swiper related-posts-swiper pb-4">
                                <div class="swiper-wrapper">
                                    @foreach($relatedPosts as $related)
                                    <div class="swiper-slide">
                                        <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                                            <div class="position-relative overflow-hidden rounded-top-4">
                                                <a href="{{ route('blog.detail', $related->slug) }}">
                                                    <img src="{{ $related->getFirstMediaUrl('posts') ?: asset('images/no-image.jpg') }}" class="card-img-top w-100 object-fit-cover" alt="{{ $related->getTranslation('title', app()->getLocale()) }}" style="height: 250px;">
                                                </a>
                                            </div>
                                            <div class="card-body p-4 d-flex flex-column">
                                                <h5 class="card-title mb-3 lh-base">
                                                    <a href="{{ route('blog.detail', $related->slug) }}" class="text-dark text-decoration-none fw-semibold blog-title">{{ $related->getTranslation('title', app()->getLocale()) }}</a>
                                                </h5>
                                                <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                                    <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>{{ $related->created_at->format('d-m-Y') }}</span>
                                                    <a href="{{ route('blog.detail', $related->slug) }}" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">{{ app()->getLocale() == 'en' ? 'See details' : 'Xem chi tiết' }} <i class="fa-solid fa-angle-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Swiper navigation buttons if needed -->
                            <div class="swiper-button-prev-custom btn btn-success rounded-circle d-flex align-items-center justify-content-center shadow d-none d-md-flex" style="position: absolute; top: 55%; left: -25px; transform: translateY(-50%); width: 45px; height: 45px; cursor: pointer; z-index: 10;">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="swiper-button-next-custom btn btn-success rounded-circle d-flex align-items-center justify-content-center shadow d-none d-md-flex" style="position: absolute; top: 55%; right: -25px; transform: translateY(-50%); width: 45px; height: 45px; cursor: pointer; z-index: 10;">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
