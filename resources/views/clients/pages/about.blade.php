@extends('clients.layouts.app')
@section('contents')
    <div class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
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
                    <h3>Giới thiệu</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.htm">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section start -->
    <div class="container-fluid bg-white py-5">
        <div class="container">
            <div style="display: inline-block">
                <h3 class="fw-bold border-3 border-bottom border-primary p-1 text-uppercase">GIỚI THIỆU VỀ MK COMPUTER</h3>
            </div>
            <div class="d-flex flex-column fs-5">
                <span class="mt-4">Tên công ty: Công ty TNHH Thương mại & Tin học Minh Khang</span>
                <span>Tên quốc tế: Minh Khang INFORMATICS AND TRADING COMPANY LIMITED</span>
                <span>Tên viết tắt: MK Computer</span>
                <span>MST: 0866411902</span>
                <span>Trụ sở (Địa chỉ đăng ký): Số 1102, Đường Huỳnh Tấn Phát, Phường Phú Mỹ, Quận 7, Thành phố Hồ Chí Minh,
                    Việt
                    Nam</span>
                <span>
                    Showroom : 180 Cao Lổ, Phường 4, Quận 8, Hồ Chí Minh
                </span>
                <span>Trung tâm bảo hành : 180 Cao Lổ, Phường 4, Quận 8, Hồ Chí Minh</span>
            </div>
            <div class="mt-4">
                <img class="d-block w-100" src="{{ asset('images/showroom.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
