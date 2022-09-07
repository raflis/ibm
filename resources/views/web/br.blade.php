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
                <p>
                    Construindo as soluções do futuro para transformar os negócios de nossos clientes, de acordo com cada ritmo.
                </p>
                <a href="" class="btn btn-registro" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Registre-se no programa IBM Cloud Rocks
                </a>
                <p class="mt-5 mb-0">
                    Agende uma reunião com o time de IBM para começar a desenvolver sua solução!
                </p>
                <a class="header_link text-white text-decoration-underline" style="font-size:1.05rem" href="mailto:Pedro.Amaral@ibm.com">Pedro.Amaral@ibm.com </a><br>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="{{ asset('images/bg_form.jpg') }}" alt="">
                <div class="formulario">
                    <form class="row" id="formu">
                        @csrf
                        <input type="hidden" name="landing" value="Landing brasil">
                        <input type="hidden" name="country" value="Brasil">
                        <p class="text-left pl-0">Registre até duas (2) pessoas do seu time;</p>
                        <div class="form-group col-md-12">
                            <label for="">Nome Completo:</label>
                            <input type="text" name="fullname" class="form-control fullname" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Empresa:</label>
                            <input type="text" name="company" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Cargo:</label>
                            <input type="text" name="position" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="email_corp" for="">E-mail Corporativo:</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Celular:</label>
                            <input type="text" name="telephone" class="form-control" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                <p>
                                    Autorizo a IBM a usar meus detalhes de contato para me manter informado sobre produtos, serviços e ofertas: por e-mail por telefone Compreendo que posso retirar meu consentimento de marketing a qualquer momento enviando uma solicitação de exclusão. Também posso optar por não receber e-mails clicando no link de cancelamento de inscrição em cada um desses e-mails. Entendo que posso encontrar mais informações acessando a Declaração de Privacidade da IBM. Ao enviar este formulário, reconheço que li e compreendi a Declaração de Privacidade de (https://www.ibm.com/br-pt/privacy)
                                </p>
                            </label>
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

<section class="sec0">
    <img class="image0" src="{{ asset('images/image0_.png') }}" alt="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    O QUE É IBM CLOUD ROCKS?
                </h1>
                <p>
                    A música se reinventa a cada geração. Ela tem o poder de reunir pessoas e de transformar uma sociedade. Assim também acontece com a tecnologia, e é por isso que nos inspiramos na música para lançar o IBM Cloud Rocks!
                    <br><br>
                    O programa IBM Cloud Rocks foi criado para um grupo seleto de Parceiros Comerciais, para que junto com a IBM, seja possível criar soluções que tragam valor aos nossos clientes, independente do ritmo que ele esteja.
                    <br><br>
                    Gostaríamos de convidá-lo a fazer parte deste programa, para acelerar o ritmo do seu negócio. E no final, você ainda poderá ganhar muitos prêmios!
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 content">
                <h1>
                    ESTÁGIO 1
                </h1>
                <h2>
                    INICIE SUA CAMINHADA PARA A FAMA COMO UM ROCKSTAR DOS NEGÓCIOS
                </h2>
                <p>
                    O crescimento de nossos Parceiros Comerciais é muito importante para nós, e para apoiar a sua evolução o primeiro passo é maximizar as suas competências e habilidades.
                    <br><br>
                    Faça parte do programa IBM Cloud Rocks e  aproveite as ferramentas e todo o suporte necessário, para criar e otimizar a sua solução. E juntos, vamos construir as soluções do futuro.
                </p>
                <a href="{{ asset('pdf/infografia_br_.pdf') }}" target="_blank" class="btn">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    PDF Como participar?
                </a>
                <a href="{{ route('faq_br') }}" class="btn">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    FAQ
                </a>
            </div>
            <div class="col-md-6">
                <!--<img src="{{ asset('images/image2.png') }}" alt="">-->
                <iframe src="https://player.vimeo.com/video/731022635?autoplay=1&title=0&byline=0&portrait=1"
                    style="width:100%;height:100%;"
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<section class="sec2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 image">
                <img src="{{ asset('images/image2.png') }}" alt="">
            </div>
            <div class="col-md-6 content">
                <h1>
                    ESTÁGIO 2
                </h1>
                <h2>
                    CRIE SUA PRÓPRIA SOLUÇÃO!<br>
                    “LET’S CREATE WITH IBM”
                </h2>
                <p>
                    Conheça os pilares tecnológicos da IBM e fortaleça seus conhecimentos necessários para construir soluções de valor para seus clientes, em nosso café de lançamento "Let’s Create with IBM".
                    <br><br>
                    Além da inscrição, pedimos que preencha o Quiz e que agende um horário para um bate papo exclusivo.
                </p>
                <a href="{{ route('cafedamanha') }}">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    Assistir o replay
                </a><br>
                <a href="{{ asset('zip/Cafe-do-Lancamento.zip') }}" target="_blank">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    Baixe as apresentações do café de lançamento
                </a><br>
                <a href="{{ route('video_br') }}">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    Assistir aos vídeos de case de uso do IBM Security
                </a><br>
                <a href="https://form.typeform.com/to/jPVolD4j" target="_blank">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    Complete o quiz
                </a><br>
                <p class="a_link">
                    <img src="{{ asset('images/icon2.png') }}" alt="">
                    Agende uma reunião com o time de IBM <a href="mailto:Pedro.Amaral@ibm.com" class="text-decoration-underline a2_link" style="margin-left:6px">Pedro.Amaral@ibm.com</a>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="{{ route('puntos', 'apu') }}" target="_blank">Argentina-Uruguay</a>
                <a href="{{ route('puntos', 'chi') }}" target="_blank">Chile</a>
                <a href="{{ route('puntos', 'col') }}" target="_blank">Colombia</a>
                <a href="{{ route('puntos', 'mex') }}" target="_blank">México</a>
            </div>
        </div> 
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="{{ route('apu') }}" target="_blank">Argentina-Uruguay</a>
                <a href="{{ route('chi') }}" target="_blank">Chile</a>
                <a href="{{ route('col') }}" target="_blank">Colombia</a>
                <a href="{{ route('mex') }}" target="_blank">México</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="mailto:simonag@ar.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">Argentina-Uruguay</a>
                <a href="mailto:pcourdur@cl.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">Chile</a>
                <a href="mailto:lchamorr@co.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">Colombia</a>
                <a href="mailto:aleruiz@mx1.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">México</a>
            </div>
        </div>
    </div>
</div>

<section class="sec3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 content">
                <h1>
                    ESTÁGIO 3
                </h1>
                <h2>
                    ROCK COM SEU PRÓPRIO RITMO EM UM GRANDE SHOW!
                </h2>
                <p>
                    Combine música e tecnologia em nosso grande show e descubra os benefícios do IBM Client Center, um centro dedicado a fornecer inovação aos nossos clientes com grande experiência no desenvolvimento de casos de uso por indústria.
                    <br><br>
                    Pronto para arrasar?<br>
                    Crie sua solução tecnológica com grande ritmo!
                </p>
                <a href="">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    IBM Cloud Rockfest
                </a>
            </div>
            <div class="col-md-6 image">
                <img src="{{ asset('images/image3.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!--
<section class="sec4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 image">
                <img src="{{ asset('images/image4.png') }}" alt="">
            </div>
            <div class="col-md-6 content">
                <h1>
                    ESTÁGIO 4
                </h1>
                <h2>
                    DEIXE O MUNDO CONHECER SEU TALENTO E LANCE UM HIT MUNDIAL!
                </h2>
                <p>
                    Apresente suas soluções para a equipe IBM e continue aumentando seus pontos para construir as soluções do futuro. 
                    <br><br>
                    Vamos continuar criando o ritmo dos negocios!
                </p>
                <a href="">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    Tabela de pontos
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 content">
                <h1>
                    ESTÁGIO 5
                </h1>
                <h2>
                    CONTINUE ARRASANDO!<br>
                    VOCÊ É UM ROCKSTAR!
                </h2>
                <p>
                    Você está pronto para inovar! Confira os resultados do programa e receba seus prêmios.<br>
                    Continue construindo as soluções do futuro em parceria com soluções de tecnologia IBM.
                </p>
                <a href="">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    Conheça  os ganadores
                </a>
            </div>
            <div class="col-md-6 image">
                <img src="{{ asset('images/image5.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
-->
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
                        content = '<h1>Obrigado por se registrar</h1>' +
                                    '<p>Em breve entraremos em contato com você!</p>';
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