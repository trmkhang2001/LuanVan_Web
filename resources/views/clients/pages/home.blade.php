@extends('clients.layouts.app')
@section('contents')
    @include('clients.layouts.banner')
    <div class="container p-sm-0 bg-white mt-5">
        <div class="row g-sm-4 g-3 px-5 mb-4">
            <div class="col">
                <div class="d-flex justify-content-between">
                    <h2 class="border-3 border-bottom border-primary p-1 text-uppercase">PC Mới Nhất</h2>
                    <a href="/product" class="fw-bold text-uppercase">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="row g-sm-4 g-3 px-5">
            @foreach ($items as $product)
                <div class="col-3 mb-4">
                    <div class="card item_product">
                        <div class="card-header">
                            <a href="{{ route('client.page.detail', $product->id) }}">
                                <img src="{{ $product->img }}" class="card-img-top" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('client.page.detail', $product->id) }}"
                                class="fs-5 fw-bold text-uppercase pd-name tit-pro">{{ $product->name }}</a>
                            @if ($product->price_sell == 0)
                                <p class=" fs-6 text-decoration-line-through">
                                    {{ number_format($product->price) . ' đ' }}
                                </p>
                            @else
                                <p class=" fs-6 text-decoration-line-through">
                                    {{ number_format($product->price_sell) . ' đ' }}
                                </p>
                            @endif
                            <div class="d-flex flex-wrap">
                                <p class="fs-6 fw-bold text-danger">{{ number_format($product->price) . ' đ' }}</p>
                                @if ($product->percent != 0)
                                    <p class="ms-3 fs-6 sell">{{ '- ' . $product->percent . '%' }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row g-sm-4 g-3 px-5">
            <div class="my-5">
                {{ $items->links() }}
            </div>
        </div>
    </div>
    <div class="container bg-white mt-5">
        <div class="row g-sm-4 g-3 px-5 mb-4">
            <div class="col">
                <div class="d-flex justify-content-between">
                    <h2 class="border-3 border-bottom border-primary p-1 text-uppercase">Thương hiệu đồng hành</h2>
                </div>
            </div>
        </div>
        <div class="row g-sm-4 g-3 px-5 pb-4">
            <div class="col-xxl-2">
                <div class="category-wrap category-padding category-block theme-bg-color">
                    <div>
                        <h2 class="">Thương hiệu</h2>
                    </div>
                </div>
            </div>
            <div class="col-xxl-10">
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
