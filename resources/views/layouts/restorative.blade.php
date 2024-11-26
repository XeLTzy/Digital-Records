@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<div class="banner_section layout_padding" id="restorative">
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
                <h1 class="services_taital">Restorative Dentistry</h1>
            </div>
        </div>
        <div>
            <div class="treatments">
                <img src="{{ asset('assets\images\restorative.jpg') }}" width="550" height="450">
            </div>
                <h3>Sealant</h3>
                    <p>
                    Sealant is a protective, thin plastic coating applied to the chewing surfaces of the back teeth (premolars and molars) to prevent tooth decay. The sealant acts as a barrier, shielding the enamel from plaque and acids that cause cavities.
                    </p>
                <h3>Temporary Filling</h3>
                    <p>
                    Temporary filling is a short-term solution used by dentists to protect a tooth that requires further treatment or observation. It serves as a placeholder until a permanent filling or other dental procedure can be completed.
                    </p>
                <h3>Light Cured Tooth Restoration</h3>
                    <p>
                    Light-cured tooth restoration is a dental procedure used to repair a tooth that has been damaged by decay, fractures, or other forms of trauma, using a special light-sensitive material, typically composite resin.
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection