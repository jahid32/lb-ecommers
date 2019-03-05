<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets')}}/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/assets')}}/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('front/assets')}}/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('front/assets')}}/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets')}}/css/style.css">

    <!-- Modernizer JS -->
    <script src="{{asset('front/assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
@include('front.partials.header')

@yield('content')
<!-- Brands Section Start -->
@include('front.partials.components.brands')
<!-- Brands Section End -->

<!-- Subscribe Section Start -->
@include('front.partials.components.subscribe')

<!-- Footer Section Start -->
@include('front.partials.footer')

<!-- Popup Subscribe Section Start -->
{{--@include('front.partials.components.popup')--}}


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('front/assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="{{asset('front/assets')}}/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('front/assets')}}/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{asset('front/assets')}}/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('front/assets')}}/js/main.js"></script>

</body>

</html>
