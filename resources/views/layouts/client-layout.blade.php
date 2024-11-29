<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentista Royale Dental Works @yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <!-- fevicon -->
    <link rel="icon" href="{{ asset('/assets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <style>


@import url(animate.min.css);
@import url(normalize.css);
@import url(icomoon.css);
@import url(css/font-awesome.min.css);
@import url(meanmenu.css);
@import url(owl.carousel.min.css);
@import url(swiper.min.css);
@import url(slick.css);
@import url(jquery.fancybox.min.css);
@import url(jquery-ui.css);
@import url(nice-select.css);

* {
    box-sizing: border-box !important;
    transition: ease all 0.5s;
}

html {
    scroll-behavior: smooth;
}

body {
    color: #666666;
    font-size: 14px;
    font-family: Poppins;
    line-height: 1.80857;
    font-weight: normal;
    overflow-x: hidden !important;
}

a {
    color: #1f1f1f;
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    letter-spacing: 0;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: normal;
    color: #111111;
    margin: 0
}

h1 {
    font-size: 24px
}

h2 {
    font-size: 22px
}

h3 {
    font-size: 18px
}

h4 {
    font-size: 16px
}

h5 {
    font-size: 14px
}

h6 {
    font-size: 13px
}

*,
*::after,
*::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #212121;
    text-decoration: none !important;
    opacity: 1
}

button:focus {
    outline: none;
}

ul,
li,
ol {
    margin: 0px;
    padding: 0px;
    list-style: none;
}

p {
    margin: 20px;
    font-weight: 300;
    font-size: 15px;
    line-height: 24px;
}

a {
    color: #222222;
    text-decoration: none;
    outline: none !important;
}

a,
.btn {
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

img {
    max-width: 100%;
    height: auto;
}

:focus {
    outline: 0;
}

.paddind_bottom_0 {
    padding-bottom: 0 !important;
}

.btn-custom {
    margin-top: 20px;
    background-color: transparent !important;
    border: 2px solid #ddd;
    padding: 12px 40px;
    font-size: 16px;
}

.lead {
    font-size: 18px;
    line-height: 30px;
    color: #767676;
    margin: 0;
    padding: 0;
}

.form-control:focus {
    border-color: #ffffff !important;
    box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
}

.navbar-form input {
    border: none !important;
}

.badge {
    font-weight: 500;
}

blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}

button {
    border: 0;
    margin: 0;
    padding: 0;
    cursor: pointer;
}

.full {
    float: left;
    width: 100%;
}

/* header section start */

.header_section {
    width: 100%;
    float: left;
    background-color: #3a3a88;
    height: auto;
    background-size: 100%;
}

.bg-light {
    background-color: transparent !important;
}

.header_main {
    width: 100%;
    float: left;
    background: #10e2bd;
    height: 80px;
}

.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show>.nav-link {
    color: #66b2ff;
}

.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    background-color: #8e8989;
}

.navbar {
    padding: 20px 1rem;
}

.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: .5rem;
    padding-left: .5rem;
    font-size: 18px;
    color: white;
}

.logo {
    height: 40px;
    width: 100px;
}

/* header section end */

/* dropdown services start */


.nav-item .dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    min-width: 200px;
    z-index: 1;
    margin-top: 10px;
}

.nav-item .dropdown-content a {
    display: block;
    padding: 12px 16px;
    color: #3a3a88; /* Orange text */
    font-size: 16px;
    text-decoration: none;
    border-bottom: 1px solid #f0f0f0;
    transition: background-color 0.3s, color 0.3s;
}

.nav-item .dropdown-content a:hover {
    background-color: #f9f9f9;
    color: #82c0fd; /* Green hover color */
}

.nav-item:hover .dropdown-content {
    display: block;
}

/* dropdown services end */

/* banner section start */

.banner_section {
    width: 100%;
    float: left;
    background-image: url(../images/dental.jpg);
    height: auto;
    background-position: center;
    height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.banner_taital {
    width: 100%;
    float: left;
    padding: 100px 0px;
}

.outstanding_text {
    width: 100%;
    float: left;
    font-size: 50px;
    color: #252525;
    padding-bottom: 0px;
}

.coffee_text {
    width: 100%;
    float: left;
    font-size: 45px;
    color: #202020;
    font-weight: bold;
    padding-bottom: 0px;
}

.there_text {
    width: 50%;
    float: left;
    font-size: 15px;
    color: #fff;
    margin: 0px;
    padding-bottom: 30px;
}

.learnmore_bt {
    width: 170px;
}

.learnmore_bt a {
    width: 100%;
    float: left;
    padding-right: 0;
    background-color: #3a3a88;
    color: #fff;
    text-align: center;
    margin-right: 12px;
    height: 53px;
    padding: 15px 40px;
    font-size: 14px;
    text-transform: uppercase;
}

.learnmore_bt a:hover {
    background-color: #66b2ff;
    color: #fff;
}

/* banner section end */

/* about section start */

.about_section {
    width: 100%;
    float: left;
}

.about_taital_main {
    width: 100%;
    float: left;
    padding: 120px 0px;
}

.about_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
}

.about_text {
    width: 100%;
    float: left;
    font-size: 14px;
    color: #4c4c4b;
    margin: 0px;
    padding-top: 10px;
}

.about_text {
    width: 100%;
    float: left;
    font-size: 14px;
    color: #4c4c4b;
    margin: 0px;
    padding-top: 10px;
}

.read_bt {
    width: 175px;
    float: left;
    padding-top: 40px;
}

.read_bt a {
    width: 100%;
    float: left;
    font-size: 18px;
    background-color: #3a3a88;
    color: #ffffff;
    text-align: center;
    padding: 8px;
}

.read_bt a:hover {
    color: #ffffff;
    background-color: #66b2ff;
}

img.image {
    min-height: 300px;
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: rgb(254, 230, 220, 0.6);
    margin: 0 auto;
}

.text {
    color: white;
    font-size: 60px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 80%;
    text-align: center;
}

.seemore_bt {
    width: 170px;
    margin: 0 auto;
    text-align: center;
    display: flex;
}

.seemore_bt a {
    width: 100%;
    text-align: center;
    font-size: 18px;
    color: #ffffff;
    background-color: #252525;
    padding: 10px 0px;
    margin-top: 40px;
}

.seemore_bt a:hover {
    background-color: #f76d37;
    color: #ffffff;
}

a:hover {
    color: #f76d37;
    text-decoration: underline;
}


.services_section {
    height: auto;
    width: 100%;
    float: left;
    /* background-image: url(../images/family-portrait.jpg); */
    height: auto;
    background-attachment: fixed;
    background-size: cover;
}

.services_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    color: black;
    font-weight: bold;
    text-align: center;
    margin-top: 25px;
}

.services_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    margin: 0px;
    text-align: center;
}

.house_icon {
    width: 200px;
    height: auto;
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.house_icon img {
    width: 45px;
    min-height: 50px;
}

.box_main .house_icon .image_2 {
    display: none;
}

.box_main:hover .house_icon .image_2 {
    display: block;
}

.box_main:hover .house_icon .image_1 {
    display: none;
}

.box_main:hover {
    background-color: #ffffff;
}

.box_main {
    width: 100%;
    height: 400px;
    background-color: rgb(113, 113, 209);
    padding: 40px 30px;
    box-shadow: 0px 0px 18px -6px;
    margin: 0 auto;
    padding: 20px;
    margin-top: 50px;
}

.box_main:hover .decorate_text {
    color: #000;
}

.box_main:hover .tation_text {
    color: #000;
    cursor: pointer;
}

.box_main:hover .readmore_bt {
    display: block;
}

.box_main:hover .readmore_bt a {
    color: #ffffff;
    background-color: #000;
}

.services_section_2 {
    width: 100%;
    float: left;
    padding-top: 50px;
}

.decorate_text {
    width: 100%;
    font-size: 28px;
    color: #ffffff;
    padding-top: 30px;
    text-align: center;
}

.tation_text {
    width: 100%;
    font-size: 14px;
    color: #ffffff;
    margin: 0px;
    text-align: center;
    text-decoration: dotted;
}

.readmore_bt {
    width: 175px;
    padding-top: 40px;
    margin: 0 auto;
    display: flex;
    display: none;
    padding-bottom: 40px;
}

.readmore_bt a {
    width: 100%;
    float: left;
    font-size: 18px;
    background-color: #070603;
    color: #ffffff;
    text-align: center;
    padding: 8px;
    text-transform: uppercase;
}

.treatments img{
    display: block;
    margin: 0 auto;
}

.others img{
    display: block;
    margin: 0 auto;
    margin-top: 30px;
}

.footer_section {
    width: 100%;
    float: left;
    background-color: #252525;
    height: auto;
    padding: 95px 0px;
}

.locasiyon{
    display: grid;
    justify-content: center;
    align-items: center;
}

.useful_text {
    width: 100%;
    font-size: 30px;
    color: #ffffff;
    margin-bottom: 15px;
    font-weight: bold;
    text-align: center;
}

.footer_text {
    width: 100%;
    float: left;
    font-size: 14px;
    color: #ffffff;
    margin: 0px;
}

.footer_menu {
    width: 100%;
    float: left;
}

.footer_menu ul {
    margin: 0px;
    padding: 0px;
}

.footer_menu li {
    font-size: 14px;
    color: #ffffff;
}

.footer_menu li a {
    color: #ffffff;
}

.footer_menu li a:hover {
    color: #f76d37;
}

.dummy_text {
    width: 100%;
    float: left;
    font-size: 18px;
    color: #ffffff;
    margin: 0px;
    text-align: center;
}

.location_text {
    width: 100%;
    float: left;
}

.location_text ul {
    margin: 0px;
    padding: 0px;
}

.location_text li {
    font-size: 18px;
    color: #ffffff;
    padding: 0px 0px 5px 0px;
    text-align: center;
}

.location_text li a {
    color: #ffffff;
}

.location_text li a:hover {
    color: #f76d37;
}

.padding_left_10 {
    padding-left: 10px;
}


/* footer section end */

/* copyright section start */

.copyright_section {
    width: 100%;
    float: left;
    background-color: #ffffff;
    height: auto;
}

.copyright_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #252525;
    text-align: center;
    margin-left: 0px;
}

.copyright_text a {
    color: #252525;
}

.copyright_text a:hover {
    color: #f76d37;
}


/* copyright section end */

.margin_top90 {
    margin-top: 90px;
}



        </style>


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>