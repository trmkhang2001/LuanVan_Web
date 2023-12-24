<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{ asset('clients_assets/images/favicon.ico') }}">
    <link rel="icon" href="{{ asset('clients_assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('clients_assets/images/favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>SurfsideMedia</title>

    <link id="rtl-link" rel="stylesheet" type="text/css"
        href="{{ asset('clients_assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('clients_assets/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('clients_assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('clients_assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('clients_assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('clients_assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('clients_assets/css/vendors/slick/slick-theme.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('clients_assets/css/demo4.css') }}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="assets/css/custom.css">


</head>

<body class="theme-color4 light ltr">
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
    @include('clients.layouts.header')
    @yield('contents')
    <div id="qvmodal"></div>
    @include('clients.layouts.footer')
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <div class="bg-overlay"></div>
    <script src="{{ asset('clients_assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('clients_assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/slick/custom_slick.js') }}"></script>
    <script src="{{ asset('clients_assets/js/price-filter.js') }}"></script>
    <script src="{{ asset('clients_assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/filter.js') }}"></script>
    <script src="{{ asset('clients_assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('clients_assets/js/cart_modal_resize.js') }}"></script>
    <script src="{{ asset('clients_assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('clients_assets/js/theme-setting.js') }}"></script>
    <script src="{{ asset('clients_assets/js/script.js') }}"></script>
    <script>
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>

</body>

</html>
