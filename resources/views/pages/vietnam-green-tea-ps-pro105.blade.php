@extends('layouts.app')
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
                                        <img src="upload/product/vietnam-green-tea-ps1745393983.png" alt="Vietnam Green Tea: PS" class="img-fluid rounded-3 object-fit-cover w-100" style="max-height: 500px;">
                                    </div>
                                </div>
                                <div id="dtpro_thumbs" class="owl-carousel owl-theme d-none">
                                    <div class="item"><img src="upload/product/vietnam-green-tea-ps1745393983.png" alt="Vietnam Green Tea: PS"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-7 col-md-6" data-aos="fade-left">
                    <form enctype="multipart/form-data" id="add-to-cart-form" action="https://kimthanhintc.com/cart/105.html" method="post">
                        <input id="idpro" type="hidden" value="105">
                        <input id="urlpro" type="hidden" value="https://kimthanhintc.com/vietnam-green-tea-ps-pro105105.html">
                        
                        <div class="products_details_info bg-white p-4 rounded-4 shadow-sm h-100 border">
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-3 fw-semibold">Trà xanh chất lượng cao</span>
                            <h1 class="display-6 fw-bold mb-4 text-success" itemprop="name">Vietnam Green Tea: PS</h1> 
                            
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

    <!-- CONTACT SECTION (Same as homepage/contact page) -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <!-- Contact Info -->
                            <div class="col-md-5 bg-success text-white p-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h3 class="fw-bold mb-4 text-white">Quan tâm đến sản phẩm này?</h3>
                                <p class="mb-4 opacity-75">Hãy để lại thông tin, chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất để tư vấn chi tiết hơn.</p>
                                
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-location-dot fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Địa chỉ</h6>
                                        <p class="mb-0 small opacity-75">Xóm Chanh, Xã Sơn Hùng, Huyện Thanh Sơn, Tỉnh Phú Thọ</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-phone-volume fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Điện thoại</h6>
                                        <p class="mb-0 small opacity-75">0986843666</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-envelope fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Email</h6>
                                        <p class="mb-0 small opacity-75">kimthanhinvestmenttradingltd@gmail.com</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div class="col-md-7 p-5 bg-white" data-aos="fade-left">
                                <h4 class="fw-bold mb-4 text-dark">Gửi Yêu Cầu</h4>
                                <form action="https://kimthanhintc.com/contact.html" name="frmContact" id="frmContact" method="post">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="fullname" class="form-control bg-light border-0" id="nameInput" placeholder="Họ tên" required>
                                                <label for="nameInput">Họ tên *</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="telephone" class="form-control bg-light border-0" id="phoneInput" placeholder="Số điện thoại" required>
                                                <label for="phoneInput">Số điện thoại *</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control bg-light border-0" id="emailInput" placeholder="Email">
                                                <label for="emailInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="content" class="form-control bg-light border-0" id="messageInput" placeholder="Lời nhắn" style="height: 120px" required>Tôi quan tâm đến sản phẩm Vietnam Green Tea: PS</textarea>
                                                <label for="messageInput">Lời nhắn *</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-success btn-lg rounded-pill px-5 shadow w-100">Gửi Liên Hệ</button>
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
    
@endsection
