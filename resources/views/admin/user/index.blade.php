@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                user</h1>
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
                <li class="breadcrumb-item text-muted">
                    User</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Card-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" data-kt-user-table-filter="search"
                            class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Filter</button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Role:</label>
                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                        data-placeholder="Select option" data-allow-clear="true"
                                        data-kt-user-table-filter="role" data-hide-search="true">
                                        <option></option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Analyst">Analyst</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Support">Support</option>
                                        <option value="Trial">Trial</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                        data-placeholder="Select option" data-allow-clear="true"
                                        data-kt-user-table-filter="two-step" data-hide-search="true">
                                        <option></option>
                                        <option value="Enabled">Enabled</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                        data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6"
                                        data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                        <!--begin::Export-->
                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_export_users">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Export</button>
                        <!--end::Export-->
                        <!--begin::Add user-->
                        <a href="/admin/user/add" type="button" class="btn btn-primary">
                            <i class="ki-duotone ki-plus fs-2"></i>Add User</a>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                        <div class="fw-bold me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                        </div>
                        <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete
                            Selected</button>
                    </div>
                    <!--end::Group actions-->
                    <!--begin::Modal - Adjust Balance-->
                    <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Export Users</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-users-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="role" data-control="select2"
                                                data-placeholder="Select a role" data-hide-search="true"
                                                class="form-select form-select-solid fw-bold">
                                                <option></option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="Analyst">Analyst</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Support">Support</option>
                                                <option value="Trial">Trial</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Select Export
                                                Format:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="format" data-control="select2"
                                                data-placeholder="Select a format" data-hide-search="true"
                                                class="form-select form-select-solid fw-bold">
                                                <option></option>
                                                <option value="excel">Excel</option>
                                                <option value="pdf">PDF</option>
                                                <option value="cvs">CVS</option>
                                                <option value="zip">ZIP</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="text-center">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-users-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary"
                                                data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - New Card-->
                    <!--begin::Modal - Add task-->
                    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Add User</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-users-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Add task-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                        data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                </div>
                            </th>
                            <th class="min-w-125px">User</th>
                            <th class="min-w-125px">Role</th>
                            <th class="min-w-125px">Phone</th>
                            <th class="min-w-125px">Address</th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="#">
                                            <div class="symbol-label">
                                                <img src="{{ $user->avatar }}" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                        <span>{{ $user->email }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td><?php $roles = config('app.role');
                                foreach ($roles as $key => $value) {
                                    if ($user->role == $value) {
                                        echo $key;
                                    }
                                } ?></td>
                                <td>
                                    <div class="badge badge-light fw-bold">{{ $user->phone }}</div>
                                </td>
                                <td>{{ $user->address }}</td>
                                <td class="text-end">
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
                                            <a href="{{ route('admin.page.user.edit', $user->id) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <form action="{{ route('admin.page.user.delete', $user->id) }}" method="POST"
                                                type="button" onsubmit="return confirm('Bạn chắc chắn muốn xóa ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="menu-link px-3 btn">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
@endsection
