@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<div class="banner_section layout_padding" id="orthodontic">
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
                <h1 class="services_taital">Orthodontic Treatment</h1>
            </div>
        </div>
        <div>
            <div class="others">
                <img src="{{ asset('assets\images\orthodontic-treatment.jpg') }}" width="350" height="250">
            </div>
                <h3>Orthodontic Treatment</h3>
                        <p>
                        Orthodontic treatment is a specialized branch of dentistry focused on diagnosing, preventing, and correcting misaligned teeth and jaws. The primary goal of orthodontics is to achieve a healthy, functional bite and an aesthetically pleasing smile.
                        </p>
            <div class="treatments">
                <img src="{{ asset('assets\images\prosthodontics.jpg') }}" width="350" height="250">
            </div>
                <h3>Prosthodontics</h3>
                    <p>
                    Prosthodontics is a specialized branch of dentistry focused on the restoration and replacement of missing teeth and oral structures.
                    </p>
                <h3>Repair Dentures</h3>
                    <p>
                    Repairing dentures is a common procedure in prosthodontics that involves fixing broken, cracked, or damaged dentures to restore their functionality and aesthetics.
                    </p>
            </div>
            
        </div>
    </div>
</div>

@endsection