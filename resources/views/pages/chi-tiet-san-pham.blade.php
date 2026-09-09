@extends('layouts.app')
@section('title', $product->getTranslation('name', app()->getLocale()))
@section('content')

    <!-- PRODUCT DETAILS SECTION -->
    <section id="panel-products-details" class="py-5 mt-5">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Product Image -->
                <div class="col-lg-5 col-md-6" data-aos="fade-right">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden position-relative p-2 bg-light mb-3">
                        <div class="featured-image">
                            <div class="dtpro_outer">
                                <div id="dtpro_big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img id="mainProductImage" src="{{ $product->getFirstMediaUrl('products') ?: asset('images/no-image.jpg') }}" alt="{{ $product->getTranslation('name', app()->getLocale()) }}" class="img-fluid rounded-3 object-fit-cover w-100" style="height: 450px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Thumbnails -->
                    @php $mediaItems = $product->getMedia('products'); @endphp
                    @if($mediaItems->count() > 1)
                    <div class="product-thumbnails d-flex gap-2 overflow-auto py-1 scrollbar-hidden user-select-none" style="scrollbar-width: none;">
                        @foreach($mediaItems as $index => $media)
                        <div class="thumbnail-item flex-shrink-0 rounded-3 overflow-hidden border {{ $index == 0 ? 'border-success border-2' : 'border-secondary-subtle' }}" 
                             style="width: 80px; height: 80px; cursor: pointer; transition: all 0.2s;"
                             onclick="updateMainImage('{{ $media->getUrl() }}', this)">
                            <img src="{{ $media->getUrl() }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Thumbnail {{ $index + 1 }}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="col-lg-7 col-md-6" data-aos="fade-left">
                    <form enctype="multipart/form-data" id="add-to-cart-form" action="" method="post">
                        <input id="idpro" type="hidden" value="{{ $product->id }}">
                        
                        <div class="products_details_info bg-white p-4 rounded-4 shadow-sm h-100 border">
                            <h1 class="display-6 fw-bold mb-4 text-success" itemprop="name">{{ $product->getTranslation('name', app()->getLocale()) }}</h1> 
                            
                            <div class="description mb-4">
                                <h5 class="fw-bold mb-3 border-bottom pb-2">{{ app()->getLocale() == 'en' ? 'Product Details' : 'Chi tiết sản phẩm' }}</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            @php
                                                $specs = [
                                                    'type' => app()->getLocale() == 'en' ? 'Type' : 'Loại sản phẩm',
                                                    'style' => app()->getLocale() == 'en' ? 'Style' : 'Kiểu',
                                                    'age' => app()->getLocale() == 'en' ? 'Age' : 'Độ tuổi',
                                                    'drink_style' => app()->getLocale() == 'en' ? 'Drinking style' : 'Phong cách uống',
                                                    'processing_type' => app()->getLocale() == 'en' ? 'Processing type' : 'Loại xử lý',
                                                    'packaging' => app()->getLocale() == 'en' ? 'Packaging' : 'Bao bì',
                                                    'specialty' => app()->getLocale() == 'en' ? 'Specialty' : 'Đặc sản',
                                                    'grade' => app()->getLocale() == 'en' ? 'Grade' : 'Hạng',
                                                    'shelf_life' => app()->getLocale() == 'en' ? 'Shelf life' : 'Thời hạn sử dụng',
                                                    'weight' => app()->getLocale() == 'en' ? 'Weight' : 'Trọng lượng',
                                                    'origin' => app()->getLocale() == 'en' ? 'Origin' : 'Xuất xứ',
                                                    'brand_name' => app()->getLocale() == 'en' ? 'Brand Name' : 'Thương hiệu',
                                                    'model_number' => app()->getLocale() == 'en' ? 'Model Number' : 'Mã sản phẩm',
                                                    'payment_terms' => app()->getLocale() == 'en' ? 'Payment Terms' : 'Điều khoản thanh toán',
                                                    'advantage' => app()->getLocale() == 'en' ? 'Advantage' : 'Ưu điểm',
                                                    'leaf_origin' => app()->getLocale() == 'en' ? 'Leaf Origin' : 'Nguồn gốc lá',
                                                    'material' => app()->getLocale() == 'en' ? 'Material' : 'Chất liệu',
                                                ];
                                            @endphp
                                            @foreach($specs as $key => $label)
                                                @if(!empty($product->$key))
                                                    <tr>
                                                        <th class="w-50 text-muted">{{ $label }}</th>
                                                        <td class="fw-semibold">{{ $product->$key }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            
                            <div class="d-flex align-items-center mt-4 pt-3 border-top">
                                <a href="{{ route('contact') }}" class="btn btn-success btn-lg rounded-pill px-5 shadow-sm me-3">
                                    <i class="fa-solid fa-paper-plane me-2"></i>{{ app()->getLocale() == 'en' ? 'Contact for price' : 'Liên hệ báo giá' }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            @if(count($relatedProducts) > 0)
            <div class="row mt-5 pt-5 border-top">
                <div class="col-12 mb-4 d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold text-success mb-0">{{ app()->getLocale() == 'en' ? 'Related Products' : 'Sản phẩm liên quan' }}</h3>
                    @if(count($relatedProducts) > 4)
                    <div class="swiper-navigation d-flex gap-2 user-select-none">
                        <button class="btn btn-outline-success rounded-circle swiper-prev-related d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="fa-solid fa-chevron-left"></i></button>
                        <button class="btn btn-outline-success rounded-circle swiper-next-related d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                    @endif
                </div>
                
                <div class="col-12">
                    <div class="swiper related-products-swiper px-2 py-3 user-select-none">
                        <div class="swiper-wrapper">
                            @foreach($relatedProducts as $related)
                            <div class="swiper-slide h-auto">
                                <div class="card h-100 border-0 shadow-sm product-card transition-all">
                                    <div class="position-relative overflow-hidden rounded-top-4">
                                        <a href="{{ route('product.detail', $related->slug) }}">
                                            <img src="{{ $related->getFirstMediaUrl('products') ?: asset('images/no-image.jpg') }}"
                                                class="card-img-top w-100 object-fit-cover" alt="{{ $related->getTranslation('name', app()->getLocale()) }}"
                                                style="height: 200px;">
                                        </a>
                                    </div>
                                    <div class="card-body text-center p-3">
                                        <h6 class="card-title mb-3">
                                            <a href="{{ route('product.detail', $related->slug) }}"
                                                class="text-dark text-decoration-none fw-semibold product-title">{{ $related->getTranslation('name', app()->getLocale()) }}</a>
                                        </h6>
                                        <a href="{{ route('contact') }}" class="btn btn-outline-success btn-sm rounded-pill px-4 py-2 w-100">{{ app()->getLocale() == 'en' ? 'Contact for price' : 'Liên hệ báo giá' }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>

    @include('partials.contact_form')
@endsection

@section('scripts')
<script>
    function updateMainImage(url, element) {
        document.getElementById('mainProductImage').src = url;
        
        // Update borders
        document.querySelectorAll('.thumbnail-item').forEach(function(el) {
            el.classList.remove('border-success', 'border-2');
            el.classList.add('border-secondary-subtle');
        });
        
        element.classList.remove('border-secondary-subtle');
        element.classList.add('border-success', 'border-2');
    }

    document.addEventListener('DOMContentLoaded', function () {
        if(document.querySelector('.related-products-swiper')) {
            var relatedSwiper = new Swiper('.related-products-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-next-related',
                    prevEl: '.swiper-prev-related',
                },
                breakpoints: {
                    576: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    }
                }
            });
        }
    });
</script>
@endsection
