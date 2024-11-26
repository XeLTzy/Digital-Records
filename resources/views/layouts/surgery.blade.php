@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<div class="banner_section layout_padding" id="surgery">
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
            </div>
        </div>
    </div>
</div>
<!-- banner section end -->

<div class="services_section layout_padding mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="services_taital">Oral Surgery</h1>
            </div>
        </div>
        <div>
            <div class="treatments">
                <img src="{{ asset('assets\images\surgery-tooth.jpg') }}" width="350" height="250">
            </div>
                <h3>Simple Tooth Extraction</h3>
                    <p>
                    Simple tooth extraction is a dental procedure that involves the removal of a tooth that is visible in the mouth and can be easily accessed by the dentist.
                    </p>
                <h3>Regular wisdom removal</h3>
                    <p>
                    Regular wisdom tooth removal refers to the surgical extraction of one or more wisdom teeth (third molars), which typically emerge in late adolescence or early adulthood.                    
                    </p>
                <h3>Extraction with Crown </h3>
                    <p>
                    Extraction with crown refers to a dental procedure where a tooth that has an existing crown is extracted (removed) due to various reasons such as severe decay, fracture, or infection.                    
                    </p>
                <h3>Impacted wisdom removal </h3>
                    <p>
                    Impacted wisdom tooth removal refers to the surgical extraction of wisdom teeth (third molars) that are unable to fully erupt into the mouth due to a lack of space or improper positioning.                    
                    </p>
                <h3>Gingivectomy</h3>
                    <p>
                    Gingivectomy is a dental surgical procedure that involves the removal of excess gum tissue. This procedure is often performed to treat periodontal (gum) disease, improve oral hygiene, or enhance aesthetics by reshaping the gums.
                <h3>Implant Screw</h3>
                    <p>
                    Implant screw only refers to the titanium screw component used in dental implants, which serves as the artificial root for a replacement tooth.
                    </p>
                <h3>Bone Grafting (per quadrant) </h3>
                    <p>
                    Bone grafting (per quadrant) refers to a surgical procedure that involves the placement of bone or bone-like materials into the jawbone to promote bone regeneration in a specific area, typically within one quadrant of the mouth.
                    </p>
                <h3>Sinus Lifting (per quadrant) </h3>
                    <p>
                    Sinus lifting (per quadrant) is a surgical procedure that involves elevating the sinus membrane and adding bone graft material to the upper jaw (maxilla) to create sufficient bone height for the placement of dental implants.
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection