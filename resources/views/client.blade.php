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
                        <h3 class="decorate_text">Oral Consultation</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Consultation involves a comprehensive oral health assessment to check for cavities, gum diseases, and other dental conditions. Recommendations for further treatments are provided based on the findings.">
                                Consultation</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="A medical certificate for dental purposes is a written statement from a dentist or physician that verifies the results of a dental examination.">Medical
                                Certificate</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Oral prophylaxis (Cleaning) is a routine dental procedure aimed at preventing oral diseases by removing plaque, tartar (calculus), and stains from teeth.">Oral
                                Prophylaxis</li>
                        </ul>
                        <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\treatment.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\treatment.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Restorative Dentistry</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Sealant is a protective, thin plastic coating applied to the chewing surfaces of the back teeth (premolars and molars) to prevent tooth decay.">
                                Sealant</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Temporary filling is a short-term solution used by dentists to protect a tooth that requires further treatment or observation.">
                                Temporary Filling</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Light-cured tooth restoration is a dental procedure used to repair a tooth that has been damaged by decay, fractures, or other forms of trauma, using a special light-sensitive material, typically composite resin."> 
                                Light Cured Tooth Restoration</li>
                        </ul>
                        <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\medical.png') }}" class="image_1" width="64" height="64">
                            <img src="{{ asset('assets\images\medical.png') }}" class="image_2" width="64" height="64">
                        </div>
                        <h3 class="decorate_text">Endodontic Treatment</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Root canal is a dental procedure used to treat infection or damage deep inside a tooth, specifically within the tooth’s pulp, which contains the nerves, blood vessels, and connective tissues.">
                                Root Canal</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Periapical X-rays are an essential diagnostic tool during the root canal process">
                                Periapical Xrays</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="After a root canal treatment (RCT), the tooth is left more fragile and susceptible to fractures due to the removal of the infected pulp and the resulting hollowed-out structure. To protect and restore the tooth's function, a proper restoration is necessary.">
                                RCT Restoration</li>
                        </ul>
                        <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\veneer.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\veneer.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Cosmetic Dentistry</h3>
                            <ul>
                                <li class="tation_text" data-bs-toggle="tooltip" title="Teeth bleaching (Teeth whitening) is a cosmetic dental procedure designed to lighten the color of teeth and remove stains or discoloration.">
                                    Teeth Whitening</li>
                                <li class="tation_text" data-bs-toggle="tooltip" title="Direct composite veneers are a type of cosmetic dental treatment used to improve the appearance of teeth by applying composite resin material directly onto the tooth surface.">
                                    Direct Composite Veneer</li>
                                <li class="tation_text" data-bs-toggle="tooltip" title="These veneers are used to improve the appearance of teeth and can address various cosmetic issues, such as discoloration, chips, gaps, and irregular shapes.">
                                    Zirconia Veneers</li>
                                <li class="tation_text" data-bs-toggle="tooltip" title="They are primarily used in restorative dentistry to cover and protect damaged or decayed teeth.">
                                    Plastic Crown</li>
                                <li class="tation_text" data-bs-toggle="tooltip" title="Porcelain-fused-to-metal (PFM) crowns are a type of dental crown that combines the strength of a metal base with the aesthetic appeal of porcelain.">
                                    Porcelain Fused to metal</li>
                                <li class="tation_text" data-bs-toggle="tooltip" title="It is a conservative and less invasive option compared to traditional fixed bridges because it requires minimal alteration of the adjacent teeth.">
                                    Maryland Bridge</li>
                                <li class="tation_text" data-bs-toggle="tooltip" title="Zirconia crowns are a type of dental crown made from zirconium dioxide, a biocompatible ceramic material known for its exceptional strength and aesthetic qualities.">
                                    Zirconia Crown</li>      
                            </ul> 
                        <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\surgery.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\surgery.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Oral Surgery</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Simple tooth extraction is a dental procedure that involves the removal of a tooth that is visible in the mouth and can be easily accessed by the dentist.">
                                Simple Tooth Extraction</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Regular wisdom tooth removal refers to the surgical extraction of one or more wisdom teeth (third molars), which typically emerge in late adolescence or early adulthood.">
                                Regular wisdom removal</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Extraction with crown refers to a dental procedure where a tooth that has an existing crown is extracted (removed) due to various reasons such as severe decay, fracture, or infection.">
                                Extraction with Crown</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Impacted wisdom tooth removal refers to the surgical extraction of wisdom teeth (third molars) that are unable to fully erupt into the mouth due to a lack of space or improper positioning.">
                                Impacted wisdom removal</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Gingivectomy is a dental surgical procedure that involves the removal of excess gum tissue. This procedure is often performed to treat periodontal (gum) disease, improve oral hygiene, or enhance aesthetics by reshaping the gums.">
                                Gingivectomy</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Implant screw refers to the titanium screw component used in dental implants, which serves as the artificial root for a replacement tooth.">
                                Implant Screw</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Bone grafting (per quadrant) refers to a surgical procedure that involves the placement of bone or bone-like materials into the jawbone to promote bone regeneration in a specific area, typically within one quadrant of the mouth.">
                                Bone Grafting (per quadrant)</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Sinus lifting (per quadrant) is a surgical procedure that involves elevating the sinus membrane and adding bone graft material to the upper jaw (maxilla) to create sufficient bone height for the placement of dental implants.">
                                Sinus Lifting (per quadrant)</li>
                        </ul>
                        <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="box_main">
                        <div class="house_icon">
                            <img src="{{ asset('assets\images\tooth.png') }}" class="image_1">
                            <img src="{{ asset('assets\images\tooth.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Other Services</h3>
                        <ul>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Prosthodontics is a specialized branch of dentistry focused on the restoration and replacement of missing teeth and oral structures.">
                                Prosthodontics</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Repairing dentures is a common procedure in prosthodontics that involves fixing broken, cracked, or damaged dentures to restore their functionality and aesthetics.">
                                Repair Dentures</li>
                            <li class="tation_text" data-bs-toggle="tooltip" title="Orthodontic treatment is a specialized branch of dentistry focused on diagnosing, preventing, and correcting misaligned teeth and jaws."> 
                                Orthodontic Treatment</li>
                        </ul>
                        <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
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
<div class="about_section layout_padding">
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
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_img" style="margin-top: 90px;"><img src="{{ asset('assets\images\dental-logo-large.jpg') }}"></div>
            </div>
        </div>
    </div>
</div>


<!-- about section end -->
<!-- banner section end -->
@endsection