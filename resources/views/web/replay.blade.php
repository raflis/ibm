@extends('web.layout')

@section('content')

<div class="replay">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="modal-body">
                    <img class="img-fluid" src="{{ asset('images/bg_form.jpg') }}" alt="">
                    <div class="formulario">
                        <form class="row" id="formu" method="POST" action="{{ route('replay') }}">
                            @csrf
                            <input type="hidden" name="type" value="{{ $country }}">
                            <!--<p class="text-left pl-0">Registra hasta máximo dos (2) personas de tu equipo.</p>-->
                            <div class="form-group col-md-12">
                                <label for="">Nombres y Apellidos:</label>
                                <input type="text" name="fullname" class="form-control fullname" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="email_corp" for="">Correo:</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12 button_">
                                <input class="btn submit_button" type="submit" value="ENVIAR">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection