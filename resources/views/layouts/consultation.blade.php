@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<div class="banner_section layout_padding" id="consultation">
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
                <h1 class="services_taital">Consultation</h1>
            </div>
        </div>
        <div>
            <div class="treatments">
                <img src="{{ asset('assets\images\consultation-tooth.jpg') }}" width="550" height="450">
            </div>
                <h3>Consultation</h3>
                    <p>
                    Consultation involves a comprehensive oral health assessment to check for cavities, gum diseases, and other dental conditions. Recommendations for further treatments are provided based on the findings.
                    </p>
                <h3>Medical Certificate</h3>
                    <p>
                    A medical certificate for dental purposes is a written statement from a dentist or physician that verifies the results of a dental examination. It can be used to document a patient's health condition for a variety of reasons.
                    </p>
                <h3>Oral Prophylaxis (Cleaning)</h3>
                    <p>
                    Oral prophylaxis (Cleaning) is a routine dental procedure aimed at preventing oral diseases by removing plaque, tartar (calculus), and stains from teeth.
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection