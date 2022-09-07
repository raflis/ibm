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

<section class="puntos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 py-5">
                <iframe width="100%" height="700" 
                src="{{ asset('puntos/'.$country.'11.pdf') }}"
                 frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection