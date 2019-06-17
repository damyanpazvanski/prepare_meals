<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">

    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">

    <meta name="twitter:card" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="copyright" content="">

    <title>{{ config('APP_NAME') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon css link -->
    <link href="/css/template/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/template/style.css" rel="stylesheet">
    <link href="/css/template/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="/images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            {{--<ul class="navbar-nav justify-content-end">--}}
                {{--<li><a href="#"><i class="icon_search"></i></a></li>--}}
                {{--<li><a href="#"><i class="icon_bag_alt"></i></a></li>--}}
            {{--</ul>--}}
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->

<div id="app">
    @yield('content')
</div>

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="f_widgets_inner row">
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget subscribe_widget">
                        {{--<div class="f_w_title">--}}
                        {{--<h3>Our Newsletter</h3>--}}
                        {{--</div>--}}
                        {{--<p>Subscribe to our mailing list to get the updates to your email inbox.</p>--}}
                        {{--<div class="input-group">--}}
                        {{--<input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">--}}
                        {{--<span class="input-group-btn">--}}
                        {{--<button class="btn btn-secondary submit_btn" type="button">Subscribe</button>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    {{--<aside class="f_widget twitter_widget">--}}
                    {{--<div class="f_w_title">--}}
                    {{--<h3>Twitter Feed</h3>--}}
                    {{--</div>--}}
                    {{--<div class="tweets_feed"></div>--}}
                    {{--</aside>--}}
                </div>
                <div class="col-lg-3 col-md-6">
                    {{--<aside class="f_widget categories_widget">--}}
                    {{--<div class="f_w_title">--}}
                    {{--<h3>Link Categories</h3>--}}
                    {{--</div>--}}
                    {{--<ul>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agency</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blogs</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a></li>--}}
                    {{--</ul>--}}
                    {{--<ul>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Work</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>--}}
                    {{--</ul>--}}
                    {{--</aside>--}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget contact_widget">
                        <div class="f_w_title">
                            <h3>Contact Us</h3>
                        </div>
                        <a href="#">1 (800) 686-6688</a>
                        <a href="#">info.deercreative@gmail.com</a>
                        <p>40 Baria Sreet 133/2 <br />NewYork City, US</p>
                        <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right_area">
        <div class="container">
            <div class="float-md-left">
                <h5>Copyright &copy; {{ date('Y') }} All rights reserved | Theme by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
            </div>
            {{--<div class="float-md-right">--}}
            {{--<ul class="nav">--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link active" href="#">Disclaimer</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Privacy</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Advertisement</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Contact us</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<script src="/js/app.js"></script>
<script src="/js/theme.js"></script>
</body>
</html>
