@extends('layouts.client-layout')

@section('title', 'Home')


@section('content')

<div class="banner_section layout_padding" id="endodontics">
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
                <h1 class="services_taital">Endodontics Treatment</h1>
            </div>
        </div>
        <div>
            <div class="treatments">
                <img src="{{ asset('assets\images\endodontic.jpg') }}" width="350" height="250">
            </div>
                <h3>Root Canal</h3>
                    <p>
                    Root canal is a dental procedure used to treat infection or damage deep inside a tooth, specifically within the tooth’s pulp, which contains the nerves, blood vessels, and connective tissues.
                    </p>
                <h3>Periapical Xrays</h3>
                    <p>
                    Periapical X-rays are an essential diagnostic tool during the root canal process. They provide a detailed view of the entire tooth, including the roots and surrounding bone, helping dentists assess the extent of infection or damage and guide the treatment.
                    </p>
                <h3>RCT Restoration</h3>
                    <p>
                    After a root canal treatment (RCT), the tooth is left more fragile and susceptible to fractures due to the removal of the infected pulp and the resulting hollowed-out structure. To protect and restore the tooth's function, a proper restoration is necessary.
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection