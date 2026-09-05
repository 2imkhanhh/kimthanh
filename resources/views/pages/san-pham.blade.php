@extends('layouts.app')
@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative vh-100" style="background: url('upload/banner/san-pham1698571509.jpg') center/cover no-repeat; min-height: 80vh;">
        
        
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-3 fw-bold mb-3 text-white">Sản phẩm</h1>
            <p class="lead mb-0 text-white mx-auto" style="max-width: 800px;">Chất lượng là nền tảng: Luôn đặt chất lượng sản phẩm lên hàng đầu, từ quy trình sản xuất đến tiêu chuẩn an toàn thực phẩm quốc tế.</p>
        </div>
    </section>

    <!-- PRODUCTS TABS SECTION -->
    <section id="panel-products" class="py-5 bg-light">
        <div class="container py-4">
            
            <!-- Tabs Navigation -->
            <ul class="nav nav-pills justify-content-center mb-5" id="productTabs" role="tablist" data-aos="fade-up">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-4 py-2 rounded-pill shadow-sm" id="nav-greentea-tab" data-bs-toggle="tab" data-bs-target="#nav-greentea" type="button" role="tab" aria-controls="nav-greentea" aria-selected="true">
                        <i class="fa-solid fa-leaf me-2"></i>Trà xanh
                    </button>
                </li>
                <!-- Future categories can go here -->
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="productTabsContent">
                <!-- Green Tea Tab -->
                <div class="tab-pane fade show active" id="nav-greentea" role="tabpanel" aria-labelledby="nav-greentea-tab" tabindex="0">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        
                        <!-- Product 1 -->
                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="vietnam-green-tea-f-pro108.html">
                                        <img src="upload/product/thumbs/vietnam-green-tea-f1745394268.png" class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: F" style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="vietnam-green-tea-f-pro108.html" class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea: F</a>
                                    </h5>
                                    <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="vietnam-green-tea-op-pro107.html">
                                        <img src="upload/product/thumbs/vietnam-green-tea-op1745394225.png" class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: OP" style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="vietnam-green-tea-op-pro107.html" class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea: OP</a>
                                    </h5>
                                    <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="vietnam-green-tea-bps-pro106.html">
                                        <img src="upload/product/thumbs/vietnam-green-tea-bps1745394173.png" class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: BPS" style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="vietnam-green-tea-bps-pro106.html" class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea: BPS</a>
                                    </h5>
                                    <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col" data-aos="fade-up" data-aos-delay="400">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="vietnam-green-tea-ps-pro105.html">
                                        <img src="upload/product/thumbs/vietnam-green-tea-ps1745393983.png" class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: PS" style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="vietnam-green-tea-ps-pro105.html" class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea: PS</a>
                                    </h5>
                                    <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col" data-aos="fade-up" data-aos-delay="500">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="vietnam-green-tea-dust-pro104.html">
                                        <img src="upload/product/thumbs/vietnam-green-tea-dust1745393950.png" class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: Dust" style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="vietnam-green-tea-dust-pro104.html" class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea: Dust</a>
                                    </h5>
                                    <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col" data-aos="fade-up" data-aos-delay="600">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="vietnam-green-tea-madina-pro103.html">
                                        <img src="upload/product/thumbs/vietnam-green-tea-madina1745393910.png" class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: Madina" style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="vietnam-green-tea-madina-pro103.html" class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea: Madina</a>
                                    </h5>
                                    <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
