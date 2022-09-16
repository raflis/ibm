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

<section class="sec4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center">{{ $title }}</h2>
            </div>
            <div class="col-md-12">
                <iframe width="100%" id="online"
                src="https://www.youtube.com/embed/{{ $video }}?autoplay=1" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
                </iframe>
            </div>
            <div class="col-md-12 text-center">
                <a class="btn btn-back" href="{{ route('index') }}">Regresar</a>
            </div>
        </div>
    </div>
</section>


<section class="sec6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <p class="p_copy">
                        © 2022 IBM All rights reserved
                    </p>
                    <img src="{{ asset('images/ibm.png') }}" alt="">
                </div>
                <p>
                    IBM, the IBM logo, and ibm.com are trademarks of International Business Machines Corporation, registered in many jurisdictions worldwide. A current list of IBM trademarks is available on the
                    web at www.ibm.com/legal/copytrade.shtml.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<script>
    $(function(){
        $('#formu').on('submit', function(e){
            var formData = new FormData($('#formu')[0]);
            $.ajax({
                type: "POST",
                url: '{{ route('contacto') }}',
                data: formData,
                dataType: 'json',
                success: function success(response) {
                    if(response.success == true){
                        var content = '';
                        content = '<h1>Gracias por registrarte</h1>' +
                                    '<p class="p_top">Pronto estaremos en contacto contigo</p>' +
                                    '<div id="copy-text">' +
                                        '¡Lo bueno se comparte!<br><br>Soy parte de la transmisión en vivo del IBM Innovation Summit 2022 el próximo viernes 16 de setiembre.' +
                                        '<br><br>' +
                                        'Regístrate aquí: <span>https://www.ibminnovationsummit.com/</span>' +
                                    '</div>' +
                                    '<div class="text-center">' +
                                        '<button class="btn btn-copy" onclick="copyToClickBoard()">Copiar texto</button>' +
                                    '</div>';
                        $('.formulario').html(content);
                    }
                },
                beforeSend: function beforeSend() {
                    $('.submit_button').attr('disabled', true);
                    $('.submit_button').attr('value', 'Enviando ...');
                    //$('.submit_button').css('background-color', '#ccc');
                    $('.submit_button').css('cursor', 'not-allowed');
                },
                cache: false,
                contentType: false,
                processData: false,
                error: function error(_error3, e) {
                    console.log(_error3);
                    console.log(e);
                }
            });
            return false;
        })
    })
</script>

@endsection