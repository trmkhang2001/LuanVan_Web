<?php $total = 0; ?>
@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Order Detail</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="/admin/dashboard" class="text-muted text-hover-primary">Admin</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Order Detail</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="card m-5 mb-xxl-8 p-5">
            <div class="d-flex flex-column gap-7 gap-lg-10">
                <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                    <!--begin::Button-->
                    <a href="/admin/order" class="btn btn-light btn-active-secondary btn-sm ms-auto"><i
                            class="ki-duotone ki-left fs-2"></i>Quay
                        lại</a>
                    <!--end::Button-->
                </div>
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                        <!--begin::Orders-->
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                <!--begin::Shipping address-->
                                <div class="card card-flush py-4 flex-row-fluid position-relative">
                                    <!--begin::Background-->
                                    <div
                                        class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                        <i class="ki-solid ki-delivery" style="font-size: 13em">
                                        </i>
                                    </div>
                                    <!--end::Background-->

                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Địa chỉ giao hàng:</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0 fw-bold">
                                        {{ $order->address }},<br>
                                        {{ $order->ward }},<br>
                                        {{ $order->district }},<br>
                                        {{ $order->province }}.
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Shipping address-->
                                <!--begin::Khach hang info-->
                                <div class="card card-flush py-4 flex-row-fluid position-relative">
                                    <!--begin::Background-->
                                    <div
                                        class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                        <i class="ki-solid ki-delivery" style="font-size: 13em">
                                        </i>
                                    </div>
                                    <!--end::Background-->

                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Thông tin khách hàng:</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0 fw-bold">
                                        {{ $order->name }},<br>
                                        {{ $order->phone }},<br>
                                        {{ $order->email }}.<br>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Khach hang info-->
                            </div>

                            <!--begin::Product List-->
                            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ 'Order #' . $order->id }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                            <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-175px">Tên sản phẩm</th>
                                                    <th class="min-w-100px ">SKU</th>
                                                    <th class="min-w-70px ">Số lượng</th>
                                                    <th class="min-w-100px ">Giá</th>
                                                    <th class="min-w-100px">Ngày mua </th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                @foreach ($products as $product)
                                                    <?php $total += $product->price; ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Thumbnail-->
                                                                <a href="#" class="symbol symbol-50px">
                                                                    <span class="symbol-label"
                                                                        style="background-image:url({{ $product->img }});"></span>
                                                                </a>
                                                                <!--end::Thumbnail-->

                                                                <!--begin::Title-->
                                                                <div class="ms-5">
                                                                    <a href="#"
                                                                        class="fw-bold text-gray-600 text-hover-primary">{{ $product->name }}</a>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                        </td>
                                                        <td class="">
                                                            {{ $product->sku }} </td>
                                                        <td class="">
                                                            {{ $product->quantity }}
                                                        </td>
                                                        <td class="">
                                                            {{ number_format($total) . ' VNĐ' }}
                                                        </td>
                                                        <td>
                                                            {{ date('d/m/Y', strtotime($product->created_at)) }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="4" class="">
                                                        Tổng giá sản phẩm
                                                    </td>
                                                    <td class="">
                                                        {{ number_format($total) . ' VNĐ' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="">
                                                        VAT (0%)
                                                    </td>
                                                    <td class="">
                                                        0 VNĐ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="">
                                                        Phí ship
                                                    </td>
                                                    <td class="">
                                                        {{ number_format(config('app.ship.PRICE')) . ' VNĐ' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="fs-3 text-gray-900 ">
                                                        Tổng giá:
                                                    </td>
                                                    <td class="text-gray-900 fs-3 fw-bolder ">
                                                        {{ number_format($order->total) . ' VNĐ' }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Product List-->
                        </div>
                        <!--end::Orders-->
                    </div>
                    <!--end::Tab pane-->

                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                        <!--begin::Orders-->
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::Order history-->
                            <div class="card card-flush py-4 flex-row-fluid">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order History</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                            <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Date Added</th>
                                                    <th class="min-w-175px">Comment</th>
                                                    <th class="min-w-70px">Order Status</th>
                                                    <th class="min-w-100px">Customer Notifed</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td>23/12/2023</td>
                                                    <td>
                                                        Order completed </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Completed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>22/12/2023</td>
                                                    <td>
                                                        Order received by customer </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">Delivered</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                                <tr>
                                                    <td>21/12/2023</td>
                                                    <td>
                                                        Order shipped from warehouse </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">Delivering</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                                <tr>
                                                    <td>20/12/2023</td>
                                                    <td>
                                                        Payment received </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-primary">Processing</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>19/12/2023</td>
                                                    <td>
                                                        Pending payment </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>18/12/2023</td>
                                                    <td>
                                                        Payment method updated </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>17/12/2023</td>
                                                    <td>
                                                        Payment method expired </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-danger">Failed</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                                <tr>
                                                    <td>16/12/2023</td>
                                                    <td>
                                                        Pending payment </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>15/12/2023</td>
                                                    <td>
                                                        Order received </td>
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-warning">Pending</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Order history-->
                            <!--begin::Order data-->
                            <div class="card card-flush py-4 flex-row-fluid">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order Data</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                            <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td class="text-muted">IP Address</td>
                                                    <td class="fw-bold ">172.68.221.26</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Forwarded IP</td>
                                                    <td class="fw-bold ">89.201.163.49</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">User Agent</td>
                                                    <td class="fw-bold ">Mozilla/5.0 (Windows NT 10.0; Win64; x64)
                                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110
                                                        Safari/537.36</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Accept Language</td>
                                                    <td class="fw-bold ">en-GB,en-US;q=0.9,en;q=0.8</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Order data-->
                        </div>
                        <!--end::Orders-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
            </div>
        </div>
    </div>
@endsection
