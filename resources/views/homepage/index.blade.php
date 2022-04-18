<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Telusur | @yield('page_name')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		{{-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> --}}

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('marian/assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/gijgo.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('marian/assets/css/responsive.css') }}">
   </head>

   <body>
    <!-- Header-->
    @include('homepage/header')

    <main>
        @yield('content')
        
    </main>
   

    <!-- Footer-->
    @include('homepage/footer')
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('marian/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('marian/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('marian/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('marian/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('marian/assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('marian/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('marian/assets/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="{{ asset('marian/assets/js/gijgo.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('marian/assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('marian/assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('marian/assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('marian/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('marian/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('marian/assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('marian/assets/js/contact.js') }}"></script>
        <script src="{{ asset('marian/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('marian/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('marian/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('marian/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('marian/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('marian/assets/js/main.js') }}"></script>
        
    </body>
</html>