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
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 category-side col-md-4">
                    <div class="category-option">
                        <div class="button-close mb-3">
                            <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                        </div>
                        <div class="accordion category-name" id="accordionExample">
                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        Brand
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list">

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br1" name="brands"
                                                        value="1" type="checkbox">
                                                    <label class="form-check-label">Quis Et</label>
                                                    <p class="font-light">(1)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br2" name="brands"
                                                        value="2" type="checkbox">
                                                    <label class="form-check-label">Aliquam Doloremque</label>
                                                    <p class="font-light">(0)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br3" name="brands"
                                                        value="3" type="checkbox">
                                                    <label class="form-check-label">Sequi Repellendus</label>
                                                    <p class="font-light">(1)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br4" name="brands"
                                                        value="4" type="checkbox">
                                                    <label class="form-check-label">Repellendus Quia</label>
                                                    <p class="font-light">(2)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br5" name="brands"
                                                        value="5" type="checkbox">
                                                    <label class="form-check-label">Sint Iste</label>
                                                    <p class="font-light">(0)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br6" name="brands"
                                                        value="6" type="checkbox">
                                                    <label class="form-check-label">Et Eos</label>
                                                    <p class="font-light">(6)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br7" name="brands"
                                                        value="7" type="checkbox">
                                                    <label class="form-check-label">Vel Explicabo</label>
                                                    <p class="font-light">(2)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br8" name="brands"
                                                        value="8" type="checkbox">
                                                    <label class="form-check-label">Ipsam Earum</label>
                                                    <p class="font-light">(4)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br9"
                                                        name="brands" value="9" type="checkbox">
                                                    <label class="form-check-label">Sequi Reprehenderit</label>
                                                    <p class="font-light">(5)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="br10"
                                                        name="brands" value="10" type="checkbox">
                                                    <label class="form-check-label">Sunt Corrupti</label>
                                                    <p class="font-light">(3)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-color">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        Color
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">Price</button>
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

                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        Size
                                    </button>
                                </h2>

                                <div id="collapseFive" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <a href="javascript:void(0)">xs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">sm</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">md</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">lg</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">xl</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">xxl</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">
                                        Category
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list">

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct1"
                                                        name="categories" type="checkbox" value="1">
                                                    <label class="form-check-label">Qui Ut</label>
                                                    <p class="font-light">(7)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct2"
                                                        name="categories" type="checkbox" value="2">
                                                    <label class="form-check-label">Blanditiis Error</label>
                                                    <p class="font-light">(8)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct3"
                                                        name="categories" type="checkbox" value="3">
                                                    <label class="form-check-label">Quam Quos</label>
                                                    <p class="font-light">(0)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct4"
                                                        name="categories" type="checkbox" value="4">
                                                    <label class="form-check-label">Cupiditate Minus</label>
                                                    <p class="font-light">(5)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct5"
                                                        name="categories" type="checkbox" value="5">
                                                    <label class="form-check-label">Dolores Et</label>
                                                    <p class="font-light">(4)</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct6"
                                                        name="categories" type="checkbox" value="6">
                                                    <label class="form-check-label">Quis Repudiandae</label>
                                                    <p class="font-light">(0)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven">
                                        Discount Range
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault19">
                                                    <label class="form-check-label" for="flexCheckDefault19">5% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">10% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">20% and
                                                        above</label>
                                                </div>
                                            </li>
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
                                                <div class="theme-color">$5</div>
                                                <div class="main-price">
                                                    <ul class="rating mb-1 mt-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="font-light mb-sm-2 mb-0">Dolores Et</p>
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
    </section>
    <!-- Shop Section end -->
    <div id="qvmodal"></div>

    <form id="frmFilter" method="GET">
        <input type="hidden" id="page" name="page" value="1">
        <input type="hidden" id="size" name="size" value="12">
        <input type="hidden" id="prange" name="prange" value="">
        <input type="hidden" id="order" name="order" value="-1">
        <input type="hidden" id="brands" name="brands" value="">
        <input type="hidden" id="categories" name="categories" value="">
    </form>
@endsection
