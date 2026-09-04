<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tin tức KIM THÀNH')</title>
    <meta name="description" content="Kim Thành chuyên cung cấp trà, nhập khẩu Ấn Độ, Nhật Bản, Trung Quốc">
    <meta name="keywords" content="Tin tức KIM THÀNH">
    <meta name="author" content="TOPSITE VIET NAM">
    <meta name="geo.region" content="VN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('canonical', 'https://kimthanhintc.com/blog.html')">
    <meta property="og:title" content="Tin tức KIM THÀNH">
    <meta property="og:description" content="Kim Thành chuyên cung cấp trà, nhập khẩu Ấn Độ, Nhật Bản, Trung Quốc">
    <meta property="og:image" content="images/thumbs.png">
    <meta property="og:site_name" content="Tin tức KIM THÀNH">
    <link rel="canonical" href="@yield('canonical', 'https://kimthanhintc.com/blog.html')">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/bootstrap-icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="asset/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="asset/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="asset/sweetalert2/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="../fonts.googleapis.com/css2/family%3DPoppins_ital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900%26display%3Dswap"
        rel="stylesheet">
    <link
        href="../fonts.googleapis.com/css2/family%3DLora_ital%2Cwght%400%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%26display%3Dswap"
        rel="stylesheet">
    <link href="../fonts.googleapis.com/css2/family%3DRoboto_wght%40400%3B700%26display%3Dswap" rel="stylesheet">
    <link href="../fonts.googleapis.com/css2/family%3DInter%26display%3Dswap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/modern-ui.css?v=' . time()) }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://kimthanhintc.com/js/html5shiv.min.js"></script>
 <script src="https://kimthanhintc.com/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="page">

        <header class="sticky-top bg-white shadow-sm">
            <!-- Top Bar -->
            <div id="topbar" class="py-2 bg-success text-white">
                <div class="container d-flex justify-content-between align-items-center">
                    <a class="text-white text-decoration-none small fw-semibold" href="tel:0986843666">
                        <i class="fa-sharp fa-solid fa-phone-volume me-1"></i> 0986843666
                    </a>
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="text-white"><i class="fa-brands fa-youtube fs-5"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-facebook fs-5"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-instagram fs-5"></i></a>
                    </div>
                </div>
            </div>

            <!-- Main Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="upload/banner/logo1698075966.png" alt="Logo Kim Thành" height="50">
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="mainMenu">
                        <ul class="navbar-nav gap-2 gap-lg-4 text-uppercase fw-semibold fs-6">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gioi-thieu.html">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="san-pham.html">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lien-he.html">Liên hệ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu border-0 shadow" aria-labelledby="blogDropdown">
                                    <li><a class="dropdown-item" href="gallery.html">Thư viện ảnh</a></li>
                                    <li><a class="dropdown-item" href="blog.html">Tin tức</a></li>
                                    <li><a class="dropdown-item" href="others-news.html">Tin khác</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="d-none d-lg-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle rounded-pill px-3 fw-semibold" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                VN <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" alt="VN" width="22" class="ms-1 rounded-1">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                <li><a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="en/index.html">EN <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="EN"
                                            width="22" class="ms-1 rounded-1"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main id="main">
            @yield('content')
        </main>

        <footer id="footer" class="pt-5 pb-3">
            <div class="container">
                <div class="row g-4 mb-4">
                    <div class="col-lg-4 col-md-12">
                        <a href="/" class="d-inline-block mb-3">
                            <img src="upload/banner/logo1698075966.png" alt="Logo Kim Thành" height="70"
                                class="bg-white p-2 rounded shadow-sm">
                        </a>
                        <h5 class="text-white mb-0 fw-bold text-nowrap fs-6">CÔNG TY TNHH ĐẦU TƯ THƯƠNG MẠI KIM THÀNH</h5>
                    </div>

                    <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-center">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3"><a href="gioi-thieu.html"
                                    class="text-white text-decoration-none hover-white small">Giới thiệu</a></li>
                            <li class="mb-3"><a href="san-pham.html"
                                    class="text-white text-decoration-none hover-white small">Sản phẩm</a></li>
                            <li class="mb-3"><a href="blog.html"
                                    class="text-white text-decoration-none hover-white small">Tin tức</a></li>
                            <li class="mb-0"><a href="lien-he.html"
                                    class="text-white text-decoration-none hover-white small">Liên hệ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                        <div>
                            <p class="text-white small mb-3"><i class="fa-solid fa-location-dot me-2"></i> Xóm Chanh,
                                Xã Sơn Hùng, Huyện Thanh Sơn, tỉnh Phú Thọ, Việt Nam.</p>
                            <p class="text-white small mb-3"><i class="fa-solid fa-envelope me-2"></i> <a
                                    href="mailto:kimthanhinvestmenttradingltd@gmail.com"
                                    class="text-white text-decoration-none" style="letter-spacing: 0.5px;">kimthanhinvestmenttradingltd@gmail.com</a>
                            </p>
                            <p class="text-white small mb-3"><i class="fa-solid fa-phone me-2"></i> 0986843666 -
                                0965748456</p>
                            <p class="text-white small mb-0"><i class="fa-solid fa-building me-2"></i> MST 2601039326
                                (Sở KH & ĐT Tỉnh Phú Thọ cấp 03/02/2020)</p>
                        </div>
                    </div>
                </div>
                <hr class="border-secondary mb-3">
                <div class="row text-center text-md-start">
                    <div class="col-md-6">
                        <p class="text-white-50 small mb-0">&copy; 2023 Kim Thanh. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end mt-2 mt-md-0">
                        <div class="social-links">
                            <a href="#" class="text-white-50 me-3 hover-white"><i
                                    class="fa-brands fa-youtube fs-5"></i></a>
                            <a href="#" class="text-white-50 me-3 hover-white"><i
                                    class="fa-brands fa-facebook fs-5"></i></a>
                            <a href="#" class="text-white-50 hover-white"><i
                                    class="fa-brands fa-instagram fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        var is_mobile = false;
        var page_name = "post1";
    </script>
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="asset/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/sweetalert2/sweetalert2.all.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/loading.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/js_v%3D1.2.js"></script>
    <script type="text/javascript" src="{{ asset('js/nav_v=1.1.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>


</body>

</html>
