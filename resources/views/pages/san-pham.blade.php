@extends('layouts.app')
@section('title', app()->getLocale() == 'en' ? 'Products' : 'Sản phẩm')
@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="d-flex align-items-center position-relative vh-100"
        style="background: url('{{ isset($settings['product_hero_image']) && $settings['product_hero_image'] ? asset($settings['product_hero_image']) : asset('upload/banner/san-pham1698571509.jpg') }}') center/cover no-repeat; min-height: 80vh;">
        <div class="container position-relative text-white z-index-1 text-center" data-aos="fade-up">
            <h1 class="display-3 fw-bold mb-3 text-white">{{ $settings['product_hero_title'] ?? 'Sản phẩm' }}</h1>
            <div class="lead mb-0 text-white mx-auto" style="max-width: 800px;">{!! $settings['product_hero_desc'] ?? 'Chất lượng là nền tảng: Luôn đặt chất lượng sản phẩm lên hàng đầu...' !!}</div>
        </div>
    </section>

    <!-- PRODUCTS TABS SECTION -->
    <section id="panel-products" class="py-5 bg-light">
        <div class="container py-4">

            <!-- Tabs Navigation -->
            <ul class="nav nav-pills justify-content-center mb-5 gap-3" id="productTabs" data-aos="fade-up">
                <li class="nav-item">
                    <a href="{{ route('products') }}" class="nav-link {{ !$activeCategoryId ? 'active' : 'bg-white text-secondary' }} px-4 py-2 rounded-pill shadow-sm">
                        <i class="fa-solid fa-leaf me-2"></i>{{ app()->getLocale() == 'en' ? 'All Products' : 'Tất cả sản phẩm' }}
                    </a>
                </li>
                @if(isset($categories) && $categories->count() > 0)
                    @foreach($categories as $cat)
                    <li class="nav-item">
                        <a href="{{ route('products', ['category' => $cat->id]) }}" class="nav-link {{ $activeCategoryId == $cat->id ? 'active' : 'bg-white text-secondary' }} px-4 py-2 rounded-pill shadow-sm">
                            <i class="fa-solid fa-leaf me-2"></i>{{ $cat->getTranslation('name', app()->getLocale()) }}
                        </a>
                    </li>
                    @endforeach
                @endif
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="productTabsContent">
                <div class="tab-pane fade show active">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                        @foreach($products as $index => $product)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ ($index % 3 + 1) * 100 }}">
                            <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                <div class="position-relative overflow-hidden rounded-top-4">
                                    <a href="{{ route('product.detail', $product->slug) }}">
                                        <img src="{{ $product->getFirstMediaUrl('products') ?: asset('images/no-image.jpg') }}"
                                            class="card-img-top w-100 object-fit-cover" alt="{{ $product->getTranslation('name', app()->getLocale()) }}"
                                            style="height: 250px;">
                                    </a>
                                </div>
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title mb-3">
                                        <a href="{{ route('product.detail', $product->slug) }}"
                                            class="text-dark text-decoration-none fw-semibold product-title">{{ $product->getTranslation('name', app()->getLocale()) }}</a>
                                    </h5>
                                    <a href="{{ route('contact') }}" class="btn btn-success rounded-pill px-4 py-2 w-100">{{ app()->getLocale() == 'en' ? 'Contact for price' : 'Liên hệ báo giá' }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="d-flex justify-content-center mt-5">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
