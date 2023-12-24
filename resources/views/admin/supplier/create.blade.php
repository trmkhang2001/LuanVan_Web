@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Supplier</h1>
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
                <li class="breadcrumb-item text-muted">Supplier</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection

@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="app-content">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Update Supplier</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column">
                        <div class="mb-5">
                            <!--begin::Label-->
                            <label class="form-label">Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control mb-2" name="name" placeholder="Name"
                                @if (isset($supplier)) {{ 'value=' . $supplier->name }} @endif>
                            <!--end::Input-->

                            <!--begin::Description-->
                            {{-- <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise
                                keywords.</div> --}}
                            <!--end::Description-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Label-->
                            <label class="form-label">Email</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="email" class="form-control mb-2" name="email" placeholder="Email"
                                @if (isset($supplier)) {{ 'value=' . $supplier->email }} @endif>
                            <!--end::Input-->

                            <!--begin::Description-->
                            {{-- <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise
                                keywords.</div> --}}
                            <!--end::Description-->
                        </div>
                        <div class="mb-5">
                            <!--begin::Label-->
                            <label class="form-label">Phone</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control mb-2" name="phone" placeholder="Phone"
                                @if (isset($supplier)) {{ 'value=' . $supplier->phone }} @endif>
                            <!--end::Input-->

                            <!--begin::Description-->
                            {{-- <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise
                                keywords.</div> --}}
                            <!--end::Description-->
                        </div>
                        <div>
                            <!--begin::Label-->
                            <label class="form-label">Description</label>
                            <!--end::Label-->
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">
                                @if (isset($supplier))
{{ $supplier->description }}
@endif
                                </textarea>

                        </div>
                        <div class="mb-5">
                            <!--begin::Select store template-->
                            <label for="kt_ecommerce_add_category_store_template" class="form-label">Status</label>
                            <!--end::Select store template-->

                            <!--begin::Select2-->
                            <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option"
                                data-allow-clear="true" multiple="multiple" name="status">
                                <option></option>
                                <option value="1" @if (isset($supplier) && $supplier->status == 1) {{ 'selected' }} @endif>Active
                                </option>
                                <option value="0" @if (isset($supplier) && $supplier->status == 0) {{ 'selected' }} @endif>Deative
                                </option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="mt-5 d-flex justify-content-end">
                            @if (isset($supplier))
                                <div class="mx-5">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            @else
                                <div class="mx-5">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            @endif
                            <div class="mx-5">
                                <a type="submit" href="/admin/supplier" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
