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

<section class="tablapuntos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>
                TABLA DE PUNTOS DE <span>IBM CLOUD ROCKS</span>
                </h1>
                <div class="content">
                    <div class="item">
                        <h2>
                            TOTAL PUNTOS
                        </h2>
                        <p class="country">
                            ARGENTINA / URUGUAY
                        </p>
                        <div>
                            <a class="total_points">
                                {{ $apu->sum('points_sum_points') }}
                            </a>
                        </div>
                        <a href="{{ route('tablapuntos', 'apu') }}">
                            <img src="{{ asset('images/icon1.png') }}" alt="">
                            Tabla de puntos
                        </a>
                    </div>
                    <div class="item">
                        <h2>
                            TOTAL PUNTOS
                        </h2>
                        <p class="country">
                            COLOMBIA
                        </p>
                        <div>
                            <a class="total_points">
                                {{ $col->sum('points_sum_points') }}
                            </a>
                        </div>
                        <a href="{{ route('tablapuntos', 'col') }}">
                            <img src="{{ asset('images/icon1.png') }}" alt="">
                            Tabla de puntos
                        </a>
                    </div>
                    <div class="item">
                        <h2>
                            TOTAL PUNTOS
                        </h2>
                        <p class="country">
                            CHILE
                        </p>
                        <div>
                            <a class="total_points">
                                {{ $chi->sum('points_sum_points') }}
                            </a>
                        </div>
                        <a href="{{ route('tablapuntos', 'chi') }}">
                            <img src="{{ asset('images/icon1.png') }}" alt="">
                            Tabla de puntos
                        </a>
                    </div>
                    <div class="item">
                        <h2>
                            TOTAL PUNTOS
                        </h2>
                        <p class="country">
                            MÉXICO
                        </p>
                        <div>
                            <a class="total_points">
                                {{ $mex->sum('points_sum_points') }}
                            </a>
                        </div>
                        <a href="{{ route('tablapuntos', 'mex') }}">
                            <img src="{{ asset('images/icon1.png') }}" alt="">
                            Tabla de puntos
                        </a>
                    </div>
                    <div class="item">
                        <h2>
                            TOTAL PUNTOS
                        </h2>
                        <p class="country">
                            BRASIL
                        </p>
                        <div>
                            <a class="total_points">
                                {{ $br->sum('points_sum_points') }}
                            </a>
                        </div>
                        <a href="{{ route('tablapuntos', 'br') }}">
                            <img src="{{ asset('images/icon1.png') }}" alt="">
                            Tabla de puntos
                        </a>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            <div class="col-md-12">
                <div class="tabla_puntos">
                    <table>
                        <thead>
                            <tr class="tit">
                                <th colspan=4>
                                    {{ strtoupper($country) }}
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    NOMBRE
                                </th>
                                <th>
                                    APELLIDO
                                </th>
                                <th>
                                    EMPRESA
                                </th>
                                <th class="puntos">
                                    PUNTOS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->lastname }}
                                </td>
                                <td>
                                    {{ $item->company }}
                                </td>
                                <td class="puntos">
                                    {{ $item->points->sum('points') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection