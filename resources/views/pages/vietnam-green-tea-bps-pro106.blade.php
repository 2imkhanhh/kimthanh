@extends('layouts.app')
@section('title', 'Vietnam Green Tea BPS Pro106')
@section('content')

    <!-- PRODUCT DETAILS SECTION -->
    <section id="panel-products-details" class="py-5 mt-5">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Product Image -->
                <div class="col-lg-5 col-md-6" data-aos="fade-right">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden position-relative p-2 bg-light">
                        <div class="featured-image">
                            <div class="dtpro_outer">
                                <div id="dtpro_big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="upload/product/vietnam-green-tea-bps1745394173.png" alt="Vietnam Green Tea: BPS" class="img-fluid rounded-3 object-fit-cover w-100" style="max-height: 500px;">
                                    </div>
                                </div>
                                <div id="dtpro_thumbs" class="owl-carousel owl-theme d-none">
                                    <div class="item"><img src="upload/product/vietnam-green-tea-bps1745394173.png" alt="Vietnam Green Tea: BPS"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-7 col-md-6" data-aos="fade-left">
                    <form enctype="multipart/form-data" id="add-to-cart-form" action="https://kimthanhintc.com/cart/106.html" method="post">
                        <input id="idpro" type="hidden" value="106">
                        <input id="urlpro" type="hidden" value="https://kimthanhintc.com/vietnam-green-tea-bps-pro106106.html">
                        
                        <div class="products_details_info bg-white p-4 rounded-4 shadow-sm h-100 border">
                            <h1 class="display-6 fw-bold mb-4 text-success" itemprop="name">Vietnam Green Tea: BPS</h1> 
                            
                            <div class="description mb-4">
                                <h5 class="fw-bold mb-3 border-bottom pb-2">Chi tiết sản phẩm</h5>
                                <div class="text-muted lh-lg">
                                    <p>
                                        <strong>Loại sản phẩm:</strong> Trà xanh<br>
                                        <strong>Kiểu:</strong> Chính thống<br>
                                        <strong>Độ tuổi:</strong> 1 – 2 tuổi<br>
                                        <strong>Phong cách:</strong> Đồ uống trà<br>
                                        <strong>Loại xử lý:</strong> Nguyên<br>
                                        <strong>Bao bì:</strong> Túi, Hộp, Số lượng lớn, Đóng gói quà tặng, Gói chân không<br>
                                        <strong>Đặc sản:</strong> Trà sức khỏe, Trà hữu cơ, Trà giảm béo, Trà xanh<br>
                                        <strong>Lớp:</strong> Chất lượng cao<br>
                                        <strong>Thời hạn sử dụng:</strong> 3 năm<br>
                                        <strong>Trọng lượng (kg):</strong> 40<br>
                                        <strong>Nơi xuất xứ:</strong> vùng núi cao Việt Nam<br>
                                        <strong>Tên thương hiệu:</strong> Trà Nam Giang<br>
                                        <strong>Số mô hình:</strong> NGGBPS<br>
                                        <strong>Điều khoản thanh toán:</strong> đặt cọc 30%, số dư so với bản sao tài liệu được quét<br>
                                        <strong>Lợi thế:</strong> Nhà máy<br>
                                        <strong>Nguồn gốc lá trà:</strong> Đồn điền trà hữu cơ Việt Nam<br>
                                        <strong>Chất liệu:</strong> Lá trà xanh tươi
                                    </p>
                                </div>
                            </div> 
                            
                            <div class="d-flex align-items-center mt-4 pt-3 border-top">
                                <a href="lien-he.html" class="btn btn-success btn-lg rounded-pill px-5 shadow-sm me-3">
                                    <i class="fa-solid fa-paper-plane me-2"></i>Liên hệ báo giá
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact_form')
@endsection
