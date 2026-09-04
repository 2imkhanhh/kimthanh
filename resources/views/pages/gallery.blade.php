@extends('layouts.app')
@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative" style="background: url('upload/banner/gioi-thieu1698571489.jpg') center/cover no-repeat; min-height: 40vh;">
        
        
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-4 fw-bold mb-3 text-white">Thư viện ảnh</h1>
            <p class="lead mb-0 text-white-50 mx-auto">Những khoảnh khắc đẹp tại Kim Thành</p>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="py-5 bg-light">
        <div class="container py-4">
            <div id="list-gallery" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 rounded-4 gallery-card">
                        <a href="upload/gallery/anh-11745404728.jpg" class="glightbox position-relative d-block">
                            <img src="upload/gallery/thumbs/anh-11745404728.jpg" alt="ảnh 1" class="img-fluid w-100 object-fit-cover" style="height: 250px;">
                            <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-success bg-opacity-75 transition-all opacity-0">
                                <i class="fa-solid fa-magnifying-glass-plus text-white fs-1"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 rounded-4 gallery-card">
                        <a href="upload/gallery/anh-21745404735.jpg" class="glightbox position-relative d-block">
                            <img src="upload/gallery/thumbs/anh-21745404735.jpg" alt="ảnh 2" class="img-fluid w-100 object-fit-cover" style="height: 250px;">
                            <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-success bg-opacity-75 transition-all opacity-0">
                                <i class="fa-solid fa-magnifying-glass-plus text-white fs-1"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 rounded-4 gallery-card">
                        <a href="upload/gallery/anh-31745404744.jpg" class="glightbox position-relative d-block">
                            <img src="upload/gallery/thumbs/anh-31745404744.jpg" alt="ảnh 3" class="img-fluid w-100 object-fit-cover" style="height: 250px;">
                            <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-success bg-opacity-75 transition-all opacity-0">
                                <i class="fa-solid fa-magnifying-glass-plus text-white fs-1"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 rounded-4 gallery-card">
                        <a href="upload/gallery/anh-41745404754.jpg" class="glightbox position-relative d-block">
                            <img src="upload/gallery/thumbs/anh-41745404754.jpg" alt="ảnh 4" class="img-fluid w-100 object-fit-cover" style="height: 250px;">
                            <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-success bg-opacity-75 transition-all opacity-0">
                                <i class="fa-solid fa-magnifying-glass-plus text-white fs-1"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="500">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 rounded-4 gallery-card">
                        <a href="upload/gallery/anh-51745404762.jpg" class="glightbox position-relative d-block">
                            <img src="upload/gallery/thumbs/anh-51745404762.jpg" alt="ảnh 5" class="img-fluid w-100 object-fit-cover" style="height: 250px;">
                            <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-success bg-opacity-75 transition-all opacity-0">
                                <i class="fa-solid fa-magnifying-glass-plus text-white fs-1"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
@endsection
