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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/modern-ui.css?v=' . time()) }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                    <button class="hamburger d-lg-none" id="hamburger" type="button" aria-label="Toggle navigation"
                        style="color: var(--text-dark);">
                        <svg viewBox="0 0 32 21" width="32" height="21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect class="line-1" x="1" y="0" width="30" height="3" rx="1.5"
                                fill="currentColor" />
                            <rect class="line-2" x="1" y="9" width="30" height="3" rx="1.5"
                                fill="currentColor" />
                            <rect class="line-3" x="1" y="18" width="30" height="3" rx="1.5"
                                fill="currentColor" />
                        </svg>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="mainMenu">
                        <ul class="navbar-nav gap-2 gap-lg-4 text-uppercase fw-semibold fs-6">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Trang
                                    chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('gioi-thieu.html') ? 'active' : '' }}"
                                    href="/gioi-thieu.html">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('san-pham.html', 'tra-xanh-pt11.html', 'vietnam-green-tea-*') ? 'active' : '' }}"
                                    href="/san-pham.html">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('lien-he.html') ? 'active' : '' }}"
                                    href="/lien-he.html">Liên hệ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->is('gallery.html') || request()->is('blog.html') || request()->is('others-news.html') ? 'active' : '' }}"
                                    href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu border-0 shadow" aria-labelledby="blogDropdown">
                                    <li><a class="dropdown-item {{ request()->is('gallery.html') ? 'active' : '' }}"
                                            href="/gallery.html">Thư viện ảnh</a></li>
                                    <li><a class="dropdown-item {{ request()->is('blog.html') ? 'active' : '' }}"
                                            href="/blog.html">Tin tức</a></li>
                                    <li><a class="dropdown-item {{ request()->is('others-news.html') ? 'active' : '' }}"
                                            href="/others-news.html">Tin khác</a></li>
                                </ul>
                            </li>

                            <!-- Mobile Language Switcher -->
                            <li class="nav-item d-lg-none mt-4 pb-4">
                                <div
                                    class="d-flex align-items-center justify-content-center gap-3 bg-light rounded-pill py-2 w-100">
                                    <a href="#"
                                        class="text-success fw-bold text-decoration-none d-flex align-items-center">
                                        VN <img
                                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg"
                                            alt="VN" width="22" class="ms-1 rounded-1">
                                    </a>
                                    <span class="text-muted">|</span>
                                    <a href="en/index.html"
                                        class="text-secondary fw-bold text-decoration-none d-flex align-items-center">
                                        EN <img
                                            src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                            alt="EN" width="22" class="ms-1 rounded-1">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="d-none d-lg-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle rounded-pill px-3 fw-semibold"
                                type="button" data-bs-toggle="dropdown" data-bs-display="static"
                                aria-expanded="false">
                                VN <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg"
                                    alt="VN" width="22" class="ms-1 rounded-1">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                <li><a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="en/index.html">EN <img
                                            src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                            alt="EN" width="22" class="ms-1 rounded-1"></a></li>
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
                        <h5 class="text-white mb-0 fw-bold text-nowrap fs-6">CÔNG TY TNHH ĐẦU TƯ THƯƠNG MẠI KIM THÀNH
                        </h5>
                    </div>

                    <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-center">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3"><a href="gioi-thieu.html"
                                    class="text-white text-decoration-none hover-white small"><i
                                        class="fa-solid fa-chevron-right me-2" style="font-size: 0.8em;"></i> Giới
                                    thiệu</a></li>
                            <li class="mb-3"><a href="san-pham.html"
                                    class="text-white text-decoration-none hover-white small"><i
                                        class="fa-solid fa-chevron-right me-2" style="font-size: 0.8em;"></i> Sản
                                    phẩm</a></li>
                            <li class="mb-3"><a href="blog.html"
                                    class="text-white text-decoration-none hover-white small"><i
                                        class="fa-solid fa-chevron-right me-2" style="font-size: 0.8em;"></i> Tin
                                    tức</a></li>
                            <li class="mb-0"><a href="lien-he.html"
                                    class="text-white text-decoration-none hover-white small"><i
                                        class="fa-solid fa-chevron-right me-2" style="font-size: 0.8em;"></i> Liên
                                    hệ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                        <div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-location-dot text-white mt-1 me-3"
                                    style="width: 16px; text-align: center; flex-shrink: 0;"></i>
                                <div class="text-white small" style="flex: 1;">Xóm Chanh, Xã Sơn Hùng, Huyện Thanh
                                    Sơn, tỉnh Phú Thọ, Việt Nam.</div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-envelope text-white mt-1 me-3"
                                    style="width: 16px; text-align: center; flex-shrink: 0;"></i>
                                <div style="flex: 1;">
                                    <a href="mailto:kimthanhinvestmenttradingltd@gmail.com"
                                        class="text-white text-decoration-none small"
                                        style="letter-spacing: 0.5px; word-break: break-all;">kimthanhinvestmenttradingltd@gmail.com</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-phone text-white mt-1 me-3"
                                    style="width: 16px; text-align: center; flex-shrink: 0;"></i>
                                <div class="text-white small" style="flex: 1;">0986843666 - 0965748456</div>
                            </div>
                            <div class="d-flex align-items-start mb-0">
                                <i class="fa-solid fa-building text-white mt-1 me-3"
                                    style="width: 16px; text-align: center; flex-shrink: 0;"></i>
                                <div class="text-white small" style="flex: 1;">MST 2601039326 (Sở KH & ĐT Tỉnh Phú Thọ
                                    cấp 03/02/2020)</div>
                            </div>
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

        // Mobile Menu Logic
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.getElementById('hamburger');
            const mainMenu = document.getElementById('mainMenu');
            const header = document.querySelector('header');

            if (hamburger && mainMenu) {
                hamburger.addEventListener('click', () => {
                    const isOpen = hamburger.classList.toggle('active');
                    mainMenu.classList.toggle('active', isOpen);
                    document.body.style.overflow = isOpen ? 'hidden' : '';
                });

                // Cập nhật biến CSS chiều cao header để menu trượt xuống đúng vị trí
                function updateHeaderHeight() {
                    if (header) {
                        document.documentElement.style.setProperty('--header-height', header.offsetHeight + 'px');
                    }
                }
                updateHeaderHeight();
                window.addEventListener('resize', updateHeaderHeight);
            }
        });
    </script>

</body>

</html>
