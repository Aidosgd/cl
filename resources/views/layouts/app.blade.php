<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Клининговая компания Expert Cleaning</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/css/ion.tabs.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('parts.header')

    @if(session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            <h2>{{ session()->get('message') }}</h2>
        </div>
    @endif

    <!-- PAGE MAIN -->
    <main class="page-main">
        @include('home.sections.about')
        @include('home.sections.intro')
        @include('home.sections.facts')
        @include('home.sections.slider-services')
        {{--@include('home.sections.projects')--}}
        {{--@include('home.sections.slider-team')--}}
        @include('home.sections.testimonials')
        @include('home.sections.pricing')
        {{--@include('home.sections.news')--}}
        {{--@include('home.sections.banners')--}}
        {{--@include('home.sections.brands')--}}
        @include('home.sections.contacts')
    </main>
    <!-- - PAGE MAIN -->

    <a class="scroll-to-top" id="js-scroll-to-top" href="#"></a>

    @include('parts.footer')

    <!-- Scripts -->
    {{--<script src="/js/app.js"></script>--}}
    <script src="/js/modernizr.custom.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/swiper.jquery.min.js"></script>
    <script src="/js/jquery.easeScroll.js"></script>
    <script src="/js/jquery.equalheights.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/jarallax.min.js"></script>
    <script src="/js/ion.tabs.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/jquery.accordion.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/maplace.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>
    <script src="js/common.js"></script>
</body>
</html>
