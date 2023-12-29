@extends('clients.layouts.app')
@section('contents')
    @include('clients.layouts.banner')
    <div class="container p-sm-0 bg-white mt-5">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>PC Gaming</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
        </div>
        <style>
            .r-price {
                display: flex;
                flex-direction: row;
                gap: 20px;
            }

            .r-price .main-price {
                width: 100%;
            }

            .r-price .rating {
                padding-left: auto;
            }

            .product-style-3.product-style-chair .product-title {
                text-align: left;
                width: 100%;
            }

            @media (max-width:600px) {

                .product-box p,
                .product-box a {
                    text-align: left;
                }

                .product-style-3.product-style-chair .main-price {
                    text-align: right !important;
                }
            }
        </style>
        <div class="row g-sm-4 g-3">
            @foreach ($items as $product)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product->img }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row g-sm-4 g-3 mt-3 d-flex justify-content-center">
            {{ $items->links() }}
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="title title-2 text-center">
                    <h2>Đồng hành cùng thương hiệu</h2>
                </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-xxl-2 col-lg-3">
                <div class="category-wrap category-padding category-block theme-bg-color">
                    <div>
                        <h2 class="top-spacing">Thương hiệu</h2>
                    </div>
                </div>
            </div>
            <div class="col-xxl-10 col-lg-9">
                <div class="category-wrapper category-slider1 white-arrow category-arrow">
                    @foreach ($suppliers as $supplier)
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{ $supplier->img }}" class="bg-img blur-up lazyload" alt="category image">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
