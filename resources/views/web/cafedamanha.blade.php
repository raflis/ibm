@extends('web.layout')

@section('content')

<div class="replay">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="modal-body">
                    <img class="img-fluid" src="{{ asset('images/bg_form.jpg') }}" alt="">
                    <div class="formulario">
                        <form class="row" id="formu" method="POST" action="{{ route('cafedamanha') }}">
                            @csrf
                            <p class="text-left pl-0">
                                Complete seus dados para poder visualizar o replay do café de lançamento "Let's Create With IBM"
                            </p>
                            <div class="form-group col-md-12">
                                <label for="">Nome Completo:</label>
                                <input type="text" name="fullname" class="form-control fullname" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="email" for="">E-mail Corporativo::</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Empresa:</label>
                                <input type="text" name="company" class="form-control" required>
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