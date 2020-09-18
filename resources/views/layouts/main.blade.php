<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Charity</title>
        <link rel="icon" href="{{asset('img/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <!-- nice select CSS -->
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        @include('includes.header')
            @yield('content')
        @include('includes.footer')

        <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
        <!-- popper js -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- easing js -->
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('js/swiper.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.smooth-scroll.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('js/masonry.pkgd.js')}}"></script>
        <!-- particles js -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/waypoints.min.js')}}"></script>
        <!-- contact js -->
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('js/jquery.form.js')}}"></script>
        <script src="{{asset('js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('js/contact.js')}}"></script>
        <!-- custom js -->
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
