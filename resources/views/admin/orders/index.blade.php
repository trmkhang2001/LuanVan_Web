@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Order</h1>
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
                <li class="breadcrumb-item text-muted">Order</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span
                                class="path2"></span></i> <input type="text" data-kt-ecommerce-order-filter="search"
                            class="form-control form-control-solid w-250px ps-12" placeholder="Search Order">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_ecommerce_sales_table">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label=""
                                        style="width: 29.9px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_ecommerce_sales_table .form-check-input"
                                                value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Order ID: activate to sort column ascending" style="width: 80px;">
                                        Order ID</th>
                                    <th class="min-w-175px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Customer: activate to sort column ascending" style="width: 269.075px;">
                                        Customer</th>
                                    <th class=" min-w-70px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1" style="width: 97.0375px;">
                                        Phone</th>
                                    <th class=" min-w-70px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"
                                        style="width: 97.0375px;">
                                        Status</th>
                                    <th class=" min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending"
                                        style="width: 132.663px;">
                                        Total</th>
                                    <th class=" min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1" style="width: 132.663px;">Order Update</th>
                                    <th class=" min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 132.688px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($orders as $order)
                                    <tr class="odd">
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td data-kt-ecommerce-order-filter="order_id">
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">
                                                {{ $order->id }} </a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $order->name }}</a>
                                                    <br>
                                                    <!--end::Title-->
                                                    <span>{{ $order->address }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" pe-0">
                                            <!--begin::Badges-->
                                            <span>{{ $order->phone }}</span>
                                            <!--end::Badges-->
                                        </td>
                                        <td class=" pe-0" data-order="Expired">
                                            <!--begin::Badges-->
                                            @if ($order->status == config('app.order_status.ORDER'))
                                                <div class="badge badge-light-info">Order</div>
                                                <!--end::Badges-->
                                            @elseif ($order->status == config('app.order_status.SHIPPING'))
                                                <div class="badge badge-light-primary">Shipping</div>
                                            @elseif($order->status == config('app.order_status.DONE'))
                                                <div class="badge badge-light-success">Done</div>
                                            @elseif ($order->status == config('app.order_status.CANCEL'))
                                                <div class="badge badeg-light-danger">Cancel</div>
                                            @endif
                                        </td>
                                        <td class=" pe-0">
                                            <span class="fw-bold">{{ number_format($order->total) . ' VNĐ' }}</span>
                                        </td>
                                        <td class="">
                                            <span class="fw-bold">{{ date('d/m/Y', strtotime($order->updated_at)) }}</span>
                                        </td>
                                        <td class="">
                                            <a href="#"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                Actions
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('admin.page.order.detail', $order->id) }}"
                                                        class="menu-link px-3">
                                                        View
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/edit-order.html"
                                                        class="menu-link px-3">
                                                        Edit
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3"
                                                        data-kt-ecommerce-order-filter="delete_row">
                                                        Delete
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="row">
                        <div
                            class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="dataTables_length" id="kt_ecommerce_sales_table_length"><label><select
                                        name="kt_ecommerce_sales_table_length" aria-controls="kt_ecommerce_sales_table"
                                        class="form-select form-select-sm form-select-solid">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></label></div>
                        </div>
                        <div
                            class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_sales_table_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="kt_ecommerce_sales_table_previous"><a href="#"
                                            aria-controls="kt_ecommerce_sales_table" data-dt-idx="0" tabindex="0"
                                            class="page-link"><i class="previous"></i></a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="kt_ecommerce_sales_table" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="kt_ecommerce_sales_table" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="kt_ecommerce_sales_table" data-dt-idx="3" tabindex="0"
                                            class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="kt_ecommerce_sales_table" data-dt-idx="4" tabindex="0"
                                            class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="kt_ecommerce_sales_table" data-dt-idx="5" tabindex="0"
                                            class="page-link">5</a></li>
                                    <li class="paginate_button page-item next" id="kt_ecommerce_sales_table_next"><a
                                            href="#" aria-controls="kt_ecommerce_sales_table" data-dt-idx="6"
                                            tabindex="0" class="page-link"><i class="next"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
@endsection
