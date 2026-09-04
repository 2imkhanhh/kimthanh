@extends('layouts.app')
@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative" style="background: url('upload/banner/gioi-thieu1698571489.jpg') center/cover no-repeat; min-height: 40vh;">
        
        
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-3 text-white">Tin tức</h1>
            <p class="lead mb-0 text-white-50 mx-auto">Cập nhật những thông tin mới nhất từ Kim Thành</p>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section id="panel-news-main" class="py-5 bg-light">
        <div class="container py-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                
                <!-- Blog 1 -->
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="blog/nguoi-di-tim-mau-xanh-cho-dat-259.html">
                                <img src="upload/post/thumbs/nguoi-di-tim-mau-xanh-cho-dat1745404857.jpg" class="card-img-top w-100 object-fit-cover" alt="Người đi tìm màu xanh cho đất" style="height: 220px;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3 bg-success text-white px-3 py-1 rounded-pill small fw-semibold">
                                Tin tức
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="blog/nguoi-di-tim-mau-xanh-cho-dat-259.html" class="text-dark text-decoration-none fw-semibold blog-title">Người đi tìm màu xanh cho đất</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                                <a href="blog/nguoi-di-tim-mau-xanh-cho-dat-259.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="blog/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach-260.html">
                                <img src="upload/post/thumbs/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach1745404872.jpg" class="card-img-top w-100 object-fit-cover" alt="Phát triển chè bền vững phải gắn với nông nghiệp sạch" style="height: 220px;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3 bg-success text-white px-3 py-1 rounded-pill small fw-semibold">
                                Tin tức
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="blog/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach-260.html" class="text-dark text-decoration-none fw-semibold blog-title">Phát triển chè bền vững phải gắn với nông nghiệp sạch</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                                <a href="blog/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach-260.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="blog/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-261.html">
                                <img src="upload/post/thumbs/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh1745404885.jpg" class="card-img-top w-100 object-fit-cover" alt="Những lợi ích có thể bạn chưa biết về chè xanh" style="height: 220px;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3 bg-success text-white px-3 py-1 rounded-pill small fw-semibold">
                                Kiến thức
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="blog/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-261.html" class="text-dark text-decoration-none fw-semibold blog-title">Những lợi ích có thể bạn chưa biết về chè xanh</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                                <a href="blog/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-261.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog 4 -->
                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="blog/nguoi-di-tim-mau-xanh-cho-dat-262.html">
                                <img src="upload/post/thumbs/nguoi-di-tim-mau-xanh-cho-dat1745404857.jpg" class="card-img-top w-100 object-fit-cover" alt="Người đi tìm màu xanh cho đất" style="height: 220px;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3 bg-success text-white px-3 py-1 rounded-pill small fw-semibold">
                                Tin tức
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="blog/nguoi-di-tim-mau-xanh-cho-dat-262.html" class="text-dark text-decoration-none fw-semibold blog-title">Người đi tìm màu xanh cho đất</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                                <a href="blog/nguoi-di-tim-mau-xanh-cho-dat-262.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog 5 -->
                <div class="col" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="blog/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach-263.html">
                                <img src="upload/post/thumbs/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach1745404872.jpg" class="card-img-top w-100 object-fit-cover" alt="Phát triển chè bền vững phải gắn với nông nghiệp sạch" style="height: 220px;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3 bg-success text-white px-3 py-1 rounded-pill small fw-semibold">
                                Tin tức
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="blog/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach-263.html" class="text-dark text-decoration-none fw-semibold blog-title">Phát triển chè bền vững phải gắn với nông nghiệp sạch</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                                <a href="blog/phat-trien-che-ben-vung-phai-gan-voi-nong-nghiep-sach-263.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog 6 -->
                <div class="col" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm blog-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="blog/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-264.html">
                                <img src="upload/post/thumbs/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh1745404885.jpg" class="card-img-top w-100 object-fit-cover" alt="Những lợi ích có thể bạn chưa biết về chè xanh" style="height: 220px;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3 bg-success text-white px-3 py-1 rounded-pill small fw-semibold">
                                Kiến thức
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title mb-3 lh-base">
                                <a href="blog/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-264.html" class="text-dark text-decoration-none fw-semibold blog-title">Những lợi ích có thể bạn chưa biết về chè xanh</a>
                            </h5>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-muted small"><i class="fa-regular fa-calendar-days me-2"></i>23-04-2025</span>
                                <a href="blog/nhung-loi-ich-co-the-ban-chua-biet-ve-che-xanh-264.html" class="text-success text-decoration-none small fw-semibold text-uppercase letter-spacing-1">Xem chi tiết <i class="fa-solid fa-angle-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
@endsection
