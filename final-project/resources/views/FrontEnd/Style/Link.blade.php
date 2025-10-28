<!-- Meta + base -->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<base href="{{ asset('') }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('source/assets/frontend/img/faviconShopPv.ico') }}">

<!-- (Khuyên) GỠ file CDN bên dưới nếu nghi ngờ ghi đè font -->
{{-- <link rel="stylesheet" href="https://cdn.speed.family/main.css" /> --}}

<!-- Google Fonts: có Vietnamese -->
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;700&display=swap&subset=vietnamese" rel="stylesheet">

<!-- Preload local fonts (place .woff2 files at public/source/assets/frontend/fonts/) -->
<link rel="preload" href="{{ asset('source/assets/frontend/fonts/NotoSans-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('source/assets/frontend/fonts/NotoSans-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>

<!-- CSS của theme (MỖI LINK CHỈ 1 LẦN) -->
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/linearicons.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/nivo-slider.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/default.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/style.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/responsive.css') }}">

<!-- CSS fix font (PHẢI CUỐI CÙNG) -->
<link rel="stylesheet" href="{{ asset('source/assets/frontend/css/fix-font.css') }}">

<!-- Modernizer js -->
<script src="{{ asset('source/assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>

<!-- Toastr -->
<link href="{{ asset('source/assets/dest/css/toastr.css') }}" rel="stylesheet">
