@extends('clients.layouts.app')
@section('contents')
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shop</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section start -->
    <div class="container-fluid bg-white pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 category-side col-md-4">
                    <div class="category-option">
                        <div class="button-close mb-3">
                            <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                        </div>
                        <div class="accordion category-name" id="accordionExample">
                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">Giá</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="range-slider category-list">
                                            <input type="text" class="js-range-slider" id="js-range-price"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        Loại
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list">
                                            @foreach ($categorys as $category)
                                                <li>
                                                    <div class="form-check ps-0 custome-form-check">
                                                        <input class="checkbox_animated check-it" id="ct{{ $category->id }}"
                                                            name="categories" type="checkbox"
                                                            @if (in_array($category->id, explode(',', $q_categories))) checked="checked" @endif
                                                            value="{{ $category->id }}"
                                                            onchange="filterProductsByCategory(this)">
                                                        <label class="form-check-label">{{ $category->name }}</label>
                                                        <p class="font-light">({{ $category->product->count() }})</p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-product col-lg-9 col-12 ratio_30">
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div
                        class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                        @foreach ($items as $product)
                            <div class="col-xl-2 col-lg-2 col-6">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <a href="{{ route('client.page.detail', $product->id) }}">
                                            <img src="{{ $product->img }}" class="w-100 bg-img blur-up lazyload"
                                                alt="">
                                        </a>
                                        <div class="circle-shape"></div>
                                        <span class="background-text">Furniture</span>
                                        <div class="label-block">
                                            <span class="label label-theme">30% Off</span>
                                        </div>
                                        <div class="cart-wrap">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('client.page.detail', $product->id) }}">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-style-3 product-style-chair">
                                        <div class="product-title d-block mb-0">
                                            <div class="r-price">
                                                <div class="theme-color">{{ number_format($product->price) . ' VNĐ' }}
                                                </div>
                                            </div>
                                            <p class="font-light mb-sm-2 mb-0">{{ number_format($product->price) . 'VNĐ' }}
                                            </p>
                                            <a href="product/details.html" class="font-default">
                                                <h5>{{ $product->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row g-sm-4 g-3 mt-3">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section end -->
    <div id="qvmodal"></div>

    <form id="frmFilter" method="GET">
        <input type="hidden" name="prange" id="prange" value="" />
        <input type="hidden" id="order" name="order" value="-1">
        <input type="hidden" id="categories" name="categories" value="{{ $q_categories }}" />
    </form>
@endsection
@push('scripts')
    <script>
        $(function() {
            $("#orderby").on("change", function() {
                $("#order").val($("#orderby option:selected").val());
                $("#frmFilter").submit();
            });
        });

        function filterProductsByCategory(brand) {
            var categories = "";
            $("input[name='categories']:checked").each(function() {
                if (categories == "") {
                    categories += this.value;
                } else {
                    categories += "," + this.value;
                }
            });
            $("#categories").val(categories);
            $("#frmFilter").submit();
        }

        $(function() {

            var $range = $(".js-range-slider");
            instance = $range.data("ionRangeSlider");
            instance.update({
                from: {{ $from }},
                to: {{ $to }}
            });

            $("#prange").on("change", function() {
                setTimeout(() => {
                    $("#frmFilter").submit();
                }, 1000);
            });
        });
    </script>
@endpush
