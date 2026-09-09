@extends('layouts.app')
@section('title', $product->getTranslation('name', app()->getLocale()))
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
                                        <img src="{{ $product->getFirstMediaUrl('products') ?: asset('images/no-image.jpg') }}" alt="{{ $product->getTranslation('name', app()->getLocale()) }}" class="img-fluid rounded-3 object-fit-cover w-100" style="max-height: 500px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-7 col-md-6" data-aos="fade-left">
                    <form enctype="multipart/form-data" id="add-to-cart-form" action="" method="post">
                        <input id="idpro" type="hidden" value="{{ $product->id }}">
                        
                        <div class="products_details_info bg-white p-4 rounded-4 shadow-sm h-100 border">
                            <h1 class="display-6 fw-bold mb-4 text-success" itemprop="name">{{ $product->getTranslation('name', app()->getLocale()) }}</h1> 
                            
                            <div class="description mb-4">
                                <h5 class="fw-bold mb-3 border-bottom pb-2">{{ app()->getLocale() == 'en' ? 'Product Details' : 'Chi tiết sản phẩm' }}</h5>
                                <div class="text-muted lh-lg">
                                    {!! $product->getTranslation('content', app()->getLocale()) !!}
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
                <div class="col-12 mb-4 text-center">
                    <h3 class="fw-bold text-success">{{ app()->getLocale() == 'en' ? 'Related Products' : 'Sản phẩm liên quan' }}</h3>
                </div>
                
                @foreach($relatedProducts as $related)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
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
            @endif
        </div>
    </section>

    @include('partials.contact_form')
@endsection
