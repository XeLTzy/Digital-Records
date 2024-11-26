@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<div class="banner_section layout_padding" id="cosmetic">
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
                <h1 class="services_taital">Cosmetic Dentistry</h1>
            </div>
        </div>
        <div>
            <div class="treatments">
                <img src="{{ asset('assets\images\costmetic-dentistry.jpg') }}" width="350" height="250">
            </div>
                <h3>Teeth bleaching (Teeth whitening)</h3>
                    <p>
                    Teeth bleaching (Teeth whitening) is a cosmetic dental procedure designed to lighten the color of teeth and remove stains or discoloration. It is one of the most popular and effective ways to enhance the appearance of your smile.
                    </p>
                <h3>Direct Composite Veneer</h3>
                    <p>
                    Direct composite veneers are a type of cosmetic dental treatment used to improve the appearance of teeth by applying composite resin material directly onto the tooth surface.
                    </p>
                <h3>Zirconia Veneers</h3>
                    <p>
                    Zirconia veneers are a type of dental veneer made from zirconium dioxide, a strong and durable ceramic material. These veneers are used to improve the appearance of teeth and can address various cosmetic issues, such as discoloration, chips, gaps, and irregular shapes.
                    </p>
                <h3>Plastic Crown</h3>
                    <p>
                    Plastic crown are a type of dental crown made from a composite resin material. They are primarily used in restorative dentistry to cover and protect damaged or decayed teeth.
                    </p>
                <h3>Porcelain Fused to metal</h3>
                    <p>
                    Porcelain-fused-to-metal (PFM) crowns are a type of dental crown that combines the strength of a metal base with the aesthetic appeal of porcelain. This dual-material approach makes PFM crowns a popular choice for both anterior (front) and posterior (back) teeth restorations.
                <h3>Maryland Bridge</h3>
                    <p>
                    Maryland bridge is a type of dental bridge used to replace missing teeth. It is a conservative and less invasive option compared to traditional fixed bridges because it requires minimal alteration of the adjacent teeth.
                    </p>
                <h3>Zirconia Crown</h3>
                    <p>
                    Zirconia crowns are a type of dental crown made from zirconium dioxide, a biocompatible ceramic material known for its exceptional strength and aesthetic qualities.
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection