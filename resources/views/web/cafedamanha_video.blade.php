@extends('web.layout')

@section('content')

<section class="header0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img src="{{ asset('images/ibm.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="header">
    <img class="paises" src="{{ asset('images/paises__.png') }}" alt="">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <h1>
                    IBM CLOUD ROCKS
                </h1>
                <h2 class="mb-4">
                    Let's Create
                    <br>
                    <span>New Business Hits</span>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="sec1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="iframe">
                    <iframe src="https://player.vimeo.com/video/736947399?autoplay=1&title=0&byline=0&portrait=1"
                    style="width:100%;height:100%;"
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen>
                </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection