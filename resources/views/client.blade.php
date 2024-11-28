@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<!-- banner section start -->
<div class="banner_section layout_padding">
    <div class="container">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner_taital">
                                <h1 class="coffee_text">Save, Prevent, Restore</h1>
                                <div class="learnmore_bt"><a href="{{ route('login') }}">Book Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner_taital">
                                <h1 class="outstanding_text">Outstanding </h1>
                                <h1 class="coffee_text">Coffee Shop</h1>
                                <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, </p>
                                <div class="learnmore_bt"><a href="#">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner_taital">
                                <h1 class="outstanding_text">Outstanding </h1>
                                <h1 class="coffee_text">Coffee Shop</h1>
                                <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, </p>
                                <div class="learnmore_bt"><a href="#">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a> -->
        </div>
    </div>
</div>
<!-- banner section end -->

<!-- services section start -->
<div class="services_section layout_padding mt-3" id="serbisis">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="services_taital">Services</h1>
            </div>
        </div>
        <div class="services_section_2">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\consult.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\consult.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">General Services</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip">
                                Oral Prophylaxis (Cleaning), Root Canal, Teeth bleaching (Teeth whitening), Simple Tooth Extraction, Prosthodontics
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\booking.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\booking.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Appointment</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip">
                                Your dental health matters – book an appointment with our specialists and enjoy expert care at your convenience.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\kid-tooth.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\kid-tooth.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Pediatric
                             Dentistry</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip">
                                Not knowing where to look for a kid-friendly dental clinic? Book an appointment with us and let us take care of your little one.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\crown.png') }}" class="image_1" width="64" height="64">
                            <img src="{{ asset('assets\images\crown.png') }}" class="image_2" width="64" height="64">
                        </div>
                        <h3 class="decorate_text">Crown and Veneers</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip">
                                Dreaming of a perfect smile? Transform your look with our custom veneers, crowns, and bridges designed to restore your confidence.
                            </li>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\implant.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\implant.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Tooth Implant</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip">
                                Missing a tooth? Get your smile back with dental implants that look, feel, and function like the real thing.
                            </li>
                        </ul> 
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\dental-surgery.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\dental-surgery.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Surgery</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip">
                                Need oral surgery? Our team of experts uses state-of-the-art technology, including 3D scans, to plan and perform procedures with precision and care.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- services section end -->

<!-- testimonial section start -->
<!-- <div class="client_section layout_padding p-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="client_taital">Customer feedback</h1>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="client_section_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_section_2">
                                    <h4 class="client_name_text">Anna Marie ****** <span class="quick_icon"><img
                                                src="{{ asset('assets\images\quick-icon.png') }}"></span></h4>
                                    <p class="customer_text">
                                        Done with my Braces treatment! Thank you Doc Shar and all the staff for the great
                                        service. Ipapaliwanag ng maigi ni Doc Shar lahat ng procedure na gagawin..bonus din na
                                        ang gaan ng kamay nya..Highly recommended! 👍😊
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="client_section_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_section_2">
                                    <h4 class="client_name_text">Monila <span class="quick_icon"><img
                                                src="images/quick-icon.png"></span></h4>
                                    <p class="customer_text">many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. All themany variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="client_section_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_section_2">
                                    <h4 class="client_name_text">Monila <span class="quick_icon"><img
                                                src="images/quick-icon.png"></span></h4>
                                    <p class="customer_text">many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                        text. All themany variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- testimonial section end -->

<!-- contact section start -->
<!-- <div class="contact_section layout_padding">
    <div class="container p-2">
        <h1 class="contact_text">Contact Us </h1>
    </div>
</div> -->

<!-- <div class="contact_section_2 layout_padding">
    <div class="container-fluid">
        <div class="row" id="contactusSection">
            <div class="col-md-6 padding_0 p-3 d-flex justify-content-center mx-auto">
                <div class="mail_section">
                    <div class="email_text">
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <input type="text" class="email-bt" placeholder="Name" name="name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="email-bt" placeholder="Email" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="email-bt" placeholder="Phone Number" name="number">
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="massage-bt" placeholder="Massages" rows="5" id="comment"
                                    name="Massage"></textarea>
                            </div>
                            <div class="send_btn">
                                <div type="text" class="main_bt"><a href="#">SEND</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- about section start -->
<div class="about_section layout_padding" id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_taital_main">
                    <div class="about_taital">About Us</div>
                    <!-- <p class="about_text">Full cleaning and housekeeping services for companies and households.</p> -->
                    <p class="about_text">At our dental care clinic, we pride ourselves on providing top-quality dental
                        services in a comfortable and welcoming environment. From routine check-ups and cleanings to
                        advanced restorative procedures, our skilled team is dedicated to ensuring the health and beauty of
                        your smile. We use the latest technology and techniques to deliver personalized care, addressing
                        each patient’s unique needs with compassion and expertise. Your oral health is our priority, and we
                        strive to make every visit a positive experience.</p>
                    <div class="read_bt"><a href="{{ route('login') }}">Book Now</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_img" style="margin-top: 75px;"><img src="{{ asset('assets\images\dental-logo-large.jpg') }}"></div>
            </div>
        </div>
    </div>
</div>


<!-- about section end -->
<!-- banner section end -->
@endsection