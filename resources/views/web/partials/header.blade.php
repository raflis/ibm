<section class="sec1" id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-md-4 left-menu">
                <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid img-logo">
            </div>
            <div class="col-2 col-md-8 right-menu">
                <div class="burger0 burgergg">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                    <div class="linea3"></div>
                </div>
                <ul class="ul-header">
                    <li class="@if (Route::currentRouteName()=="index" ) active @endif"><a href="{{ route('index') }}">INICIO</a></li>
                    <li class="@if (Route::currentRouteName()=="nosotros" ) active @endif"><a href="{{ route('nosotros') }}">NOSOTROS</a></li>
                    <li class="@if (Route::currentRouteName()=="proyectos" || Route::currentRouteName()=="proyecto") active @endif"><a href="{{ route('proyectos') }}">PROYECTOS</a></li>
                    <li class="@if (Route::currentRouteName()=="corretajes" || Route::currentRouteName()=="corretaje") active @endif"><a href="{{ route('corretajes') }}">CORRETAJE</a></li>
                    <li class="@if (Route::currentRouteName()=="servicios") active @endif"><a href="{{ route('servicios') }}">SERVICIOS</a></li>
                    <li class="@if (Route::currentRouteName()=="vende") active @endif"><a href="{{ route('vende') }}">VENDE</a></li>
                    <li class="@if (Route::currentRouteName()=="blog" || Route::currentRouteName()=="post" || Route::currentRouteName()=="category" || Route::currentRouteName()=="tag") active @endif"><a href="{{ route('blog') }}">BLOG</a></li>
                    <li class="@if (Route::currentRouteName()=="contacto" || Route::currentRouteName()=="gracias") active @endif"><a href="{{ route('contacto') }}">CONTACTO</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav-mobile">
        <div class="burger burgergg">
            <div class="linea1"></div>
            <div class="linea2"></div>
            <div class="linea3"></div>
        </div>
        <div class="lists d-flex">
            <ul class="text-right">
                <li>
                    <a class="@if (Route::currentRouteName()=="index" ) active @endif" href="{{ route('index') }}">INICIO</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="nosotros" ) active @endif" href="{{ route('nosotros') }}">NOSOTROS</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="proyectos" || Route::currentRouteName()=="proyecto") active @endif" href="{{ route('proyectos') }}">PROYECTOS</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="corretajes" || Route::currentRouteName()=="corretaje") active @endif" href="{{ route('corretajes') }}">CORRETAJES</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="servicios") active @endif" href="{{ route('servicios') }}">SERVICIOS</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="vende" ) active @endif" href="{{ route('vende') }}">VENDE</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="blog" || Route::currentRouteName()=="post" || Route::currentRouteName()=="category" || Route::currentRouteName()=="tag") active @endif" href="{{ route('blog') }}">BLOG</a>
                </li>
                <li>
                    <a class="@if (Route::currentRouteName()=="contacto" ) active @endif" href="{{ route('contacto') }}">CONTACTO</a>
                </li>
            </ul>
            <div class="bottom_">
                <button class="btn btn-cerrar">
                    Regresar
                </button>
                <img class="logomobile" src="{{ asset('images/logo-nosotros.png') }}" alt="">
            </div>
        </div>
    </div>
</section>