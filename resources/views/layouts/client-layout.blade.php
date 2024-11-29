<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentista Royale Dental Works @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/frameworks/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">

    <!-- Responsive-->
    <link rel="stylesheet" href=" {{ asset('/assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('/assets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

</head>

<body>

    <!--header section start -->
    @include('layouts.client-navbar')
    <!--header section end -->

    @yield('content')

    <!-- footer section start -->
   
    <!-- footer section end -->
    @include('layouts.client-footer')

    <!-- copyright section start -->
     
    @include('layouts.client-copyright')
    
    <!-- copyright section end -->

    <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>