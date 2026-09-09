@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative"
        style="background: url('upload/banner/gioi-thieu1698571489.jpg') center/cover no-repeat; min-height: 40vh;">


        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-3 text-white">{{ app()->getLocale() == 'en' ? 'News' : 'Tin tức' }}</h1>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section id="panel-news-main" class="py-5 bg-light">
        <div class="container py-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                @foreach($posts as $index => $post)
                <div class="col" data-aos="fade-up" data-aos-delay="{{ ($index % 3 + 1) * 100 }}">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="{{ route('blog.detail', $post->slug) }}">
                                <img src="{{ $post->getFirstMediaUrl('posts') ?: asset('images/no-image.jpg') }}"
                                    class="card-img-top w-100 object-fit-cover" alt="{{ $post->getTranslation('name', app()->getLocale()) }}"
                                    style="height: 250px;">
                            </a>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="{{ route('blog.detail', $post->slug) }}"
                                    class="text-dark text-decoration-none fw-semibold blog-title">{{ $post->getTranslation('name', app()->getLocale()) }}</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i
                                        class="fa-regular fa-calendar-days me-2"></i>{{ $post->created_at->format('d-m-Y') }}</span>
                                <a href="{{ route('blog.detail', $post->slug) }}"
                                    class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">{{ app()->getLocale() == 'en' ? 'View details' : 'Xem chi tiết' }} <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="d-flex justify-content-center mt-5">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection
