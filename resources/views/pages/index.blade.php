@extends('layouts.app')
@section('content')
    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative vh-100"
        style="background: url('upload/banner/tra-viet-nam-la-nghe-si1698571462.jpg') center/cover no-repeat; min-height: 80vh;">


        <div class="container position-relative text-white z-index-1" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 col-md-10 bg-dark bg-opacity-50 p-4 p-lg-5 rounded-4 glass-effect">
                    <h1 class="display-3 fw-bold mb-3 text-white">Trà Việt Nam là nghệ sĩ</h1>
                    <p class="lead mb-4 text-white">Chúng tôi luôn đặt chất lượng và an toàn thực phẩm lên hàng đầu trong mọi
                        quy trình sản xuất. Toàn bộ hệ thống nhà xưởng và quy trình chế biến được đảm bảo đạt chuẩn ISO
                        22000:2018.</p>
                    <a href="gioi-thieu.html" class="btn btn-success btn-lg px-4 rounded-pill shadow">Khám phá ngay</a>
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
                    <h2 class="display-4 text-success text-uppercase fw-bold mb-2">Về Chúng Tôi</h2>
                    <h4 class="fw-bold mb-4 text-success opacity-75">Giới thiệu Kim Thành</h4>
                    <p class="text-muted fs-5 mb-4">Công ty TNHH Đầu tư Thương mại Kim Thành được thành lập vào ngày
                        03/02/2020, hoạt động chuyên sâu trong lĩnh vực chế biến và sản xuất búp chè tươi xuất khẩu.</p>
                    <p class="text-muted fs-5 mb-4">Với định hướng phát triển bền vững và cam kết mang đến những sản phẩm
                        nông
                        sản chất lượng cao, chúng tôi đã từng bước xây dựng uy tín và mở rộng thị trường sang nhiều quốc
                        gia, bao gồm Trung Quốc, Thái Lan, Pakistan, Afghanistan, Nga và Ấn Độ.</p>
                    <a href="gioi-thieu.html" class="btn btn-outline-success btn-lg rounded-pill px-4">Xem chi tiết <i
                            class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="home-products" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-4 text-success text-uppercase fw-bold mb-2">Sản phẩm nổi bật</h2>
                <h4 class="fw-bold text-success opacity-75">Trà Xanh Kim Thành</h4>
                <div class="mx-auto bg-success mt-3" style="height: 3px; width: 60px;"></div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Product 1 -->
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm product-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="vietnam-green-tea-dust-pro104.html">
                                <img src="upload/product/thumbs/vietnam-green-tea-dust1745393950.png"
                                    class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: Dust"
                                    style="height: 250px;">
                            </a>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">
                                <a href="vietnam-green-tea-dust-pro104.html"
                                    class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea:
                                    Dust</a>
                            </h5>
                            <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm product-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="vietnam-green-tea-ps-pro105.html">
                                <img src="upload/product/thumbs/vietnam-green-tea-ps1745393983.png"
                                    class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: PS"
                                    style="height: 250px;">
                            </a>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">
                                <a href="vietnam-green-tea-ps-pro105.html"
                                    class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea:
                                    PS</a>
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
                                <img src="upload/product/thumbs/vietnam-green-tea-bps1745394173.png"
                                    class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: BPS"
                                    style="height: 250px;">
                            </a>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">
                                <a href="vietnam-green-tea-bps-pro106.html"
                                    class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea:
                                    BPS</a>
                            </h5>
                            <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo giá</a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm product-card transition-all">
                        <div class="position-relative overflow-hidden rounded-top-4">
                            <a href="vietnam-green-tea-madina-pro103.html">
                                <img src="upload/product/thumbs/vietnam-green-tea-madina1745393910.png"
                                    class="card-img-top w-100 object-fit-cover" alt="Vietnam Green Tea: Madina"
                                    style="height: 250px;">
                            </a>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">
                                <a href="vietnam-green-tea-madina-pro103.html"
                                    class="text-dark text-decoration-none fw-semibold product-title">Vietnam Green Tea:
                                    Madina</a>
                            </h5>
                            <a href="lien-he.html" class="btn btn-success rounded-pill px-4 py-2 w-100">Liên hệ báo
                                giá</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="tra-xanh-pt11.html" class="btn btn-outline-success btn-lg rounded-pill px-5">Xem tất cả sản
                    phẩm</a>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <!-- Contact Info -->
                            <div class="col-md-5 bg-success text-white p-5 d-flex flex-column justify-content-center"
                                data-aos="fade-right">
                                <h3 class="fw-bold mb-4 text-white">Liên hệ với chúng tôi</h3>
                                <p class="mb-4 opacity-75">Hãy để lại thông tin, chúng tôi sẽ liên hệ lại với bạn trong
                                    thời gian sớm nhất để tư vấn về sản phẩm.</p>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-location-dot fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Địa chỉ</h6>
                                        <p class="mb-0 small opacity-75">Xóm Chanh, Xã Sơn Hùng, Huyện Thanh Sơn, Tỉnh Phú
                                            Thọ</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-phone-volume fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Điện thoại</h6>
                                        <p class="mb-0 small opacity-75">0986843666</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
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
                                <h4 class="fw-bold mb-4 text-dark">Gửi Tin Nhắn</h4>
                                <form action="https://kimthanhintc.com/contact.html" name="frmContact" id="frmContact"
                                    method="post">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="fullname"
                                                    class="form-control bg-light border-0" id="nameInput"
                                                    placeholder="Họ tên" required>
                                                <label for="nameInput">Họ tên *</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="telephone"
                                                    class="form-control bg-light border-0" id="phoneInput"
                                                    placeholder="Số điện thoại" required>
                                                <label for="phoneInput">Số điện thoại *</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name="email"
                                                    class="form-control bg-light border-0" id="emailInput"
                                                    placeholder="Email">
                                                <label for="emailInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="content" class="form-control bg-light border-0" id="messageInput" placeholder="Lời nhắn"
                                                    style="height: 120px" required></textarea>
                                                <label for="messageInput">Lời nhắn *</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit"
                                                class="btn btn-success btn-lg rounded-pill px-5 shadow w-100">Gửi Liên
                                                Hệ</button>
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
