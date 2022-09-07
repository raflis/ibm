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
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-md-12 content_header">
                <h2 class="">
                    Transmisión en vivo<br>
                    IBM Innovation Summit<br>
                    Viernes, 16 de Septiembre 2022<br>
                    9:30 AM
                </h2>
                <a href="" class="btn btn-registro" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Regístrate
                </a>
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
                <div class="formulario">
                    <form class="row" id="formu">
                        @csrf
                        <p class="p_top">
                            IBM Innovation Summit<br>
                            Viernes, 16 de Septiembre 2022, 2:00 PM
                        </p>
                        <div class="form-group col-md-12">
                            <label for="">Nombres:</label> <code>*</code>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Apellidos:</label> <code>*</code>
                            <input type="text" name="lastname" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Empresa:</label> <code>*</code>
                            <input type="text" name="company" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Puesto:</label> <code>*</code>
                            <input type="text" name="position" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="email" for="">Correo Corporativo:</label> <code>*</code>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Teléfono:</label> <code>*</code>
                            <input type="text" name="telephone" class="form-control" required>
                        </div>
                        <p class="p1">
                            <span>
                                Privacy
                            </span>
                            <br>
                            IBM puede utilizar mis datos de contacto para mantenerme informado de productos, servicios y ofertas:
                        </p>
                        <div class="form-check">
                            <input class="form-check-input" name="for_email" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p>
                                    por correo electrónico
                                </p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="for_telephone" type="checkbox" value="1" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                <p>
                                    por teléfono
                                </p>
                            </label>
                        </div>
                        <p class="p2">
                            Entiendo que puedo retirar mi consentimiento de marketing en cualquier momento por medio del envío de una <span>solicitud de exclusión.</span> También puedo cancelar la recepción de e-mails haciendo clic en el enlace para darme de baja en cada uno de esos e-mails.
                            <br><br>
                            Entiendo que puedo encontrar más información accediendo a la <span>Declaración de Privacidad de IBM.</span> Al enviar este formulario, reconozco que he leído y entendido la Declaración de Privacidad de IBM.
                        </p>
                        <p class="p3">
                            <code>*</code> Campos obligatorios
                        </p>
                        <div class="form-group col-md-12 button_">
                            <input class="btn submit_button" type="submit" value="Regístrese">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="countdown">
                    <div class="days">
                        <p>Quedan: <button>{{ $cantidadDias }}</button> <span>DÍAS</span></p>
                    </div>
                    <div class="text">
                        <p>
                            <span>para que presentes tu solución</span><br>
                            con IBM SW Technology
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Aquellos que utilizan la tecnología de forma nuevas y creativas, transformarán nuestro modo de trabajar y vivir e forma radical, a ellos los llamamos los nuevos creadores; visionarios que aplican la tecnología de formas innovadoras para impulsar el progreso en los negocios y en el mundo.
                    <br><br>
                    Conoce historias de otros creadores quienes como tú, brindan valorar a sus clientes en diversas industrias en el IBM Innovation Summit. 
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content content1">
                    <p class="p1">
                        Modernicemos los negocios con la ayuda de la nube híbrida.
                    </p>
                    <p class="p2">
                        Gestionemos el riesgo y afrontemos las amenazas de la ciberseguridad
                    </p>
                </div>
                <div class="content">
                    <p class="p3">
                        Simplifiquemos la forma de trabajar con automatización y la IA
                    </p>
                    <p class="p4">
                        Avancemos al futuro de la informática para descubrir lo que viene.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <img src="{{ asset('images/icon1.png') }}" alt="">
                    <h2>Plenaria</h2>
                </div>
                <div class="content content1">
                    <p class="p1">
                        <span>
                            Apertura
                        </span><br><br>
                        <strong>Álvaro Santa María</strong><br>
                        General Manager, IBM Perú & Technology Sales Leader IBM North Spanish South America Region
                    </p>
                    <p class="p1">
                        <span>
                            Innovación y tecnología, receta para el éxito
                        </span><br><br>
                        <strong>Joaquim Campos,</strong> VP IBM Data & AI, Automation & AI Apps, IBM Latinoamérica<br><br>
                        <strong>Juan Carlos Del Alcázar,</strong> Gerente General de Financiera Efectiva y César Calderón, Gerente Corporativo de Servicio al Negocio de Grupo EFE
                    </p>
                    <p class="p1">
                        <span>
                            Transformando la experiencia del cliente en Interbank en el camino a ser 100% digitales
                        </span><br><br>
                        <strong>Marcelo Delgado,</strong> CTO, IBM Perú Consulting <br><br>
                        <strong>Rocío Toma,</strong> Gerente de Arquitectura TI en Interbank
                    </p>
                </div>
                <div class="content">
                    <p class="p1">
                        <span>
                            Harness the Power of Hybrid Cloud
                        </span><br><br>
                        <strong>Patricio Espinosa,</strong> General Manager & Technology Leader, North Spanish South America Region
                    </p>
                    <p class="p1">
                        <span>
                            Next Wave to the Cybersecurity
                        </span><br><br>
                        <strong>Gabriel Catropa,</strong> Partner & CTO Cybersecurity, IBM Latinoamérica<br><br>
                        <strong>Andres Montenegro,</strong> Gerente de Seguridad Informática en Diners Club del Ecuador
                    </p>
                    <p class="p1">
                        <span>
                            The Future of Computing
                        </span><br><br>
                        <strong>Narciso Lema,</strong> Technology Technical Community Leader, IBM North Spanish South America Region
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2>Apertura</h2>
                <p>
                    <strong>Álvaro Santa María</strong><br>
                    General Manager, IBM Perú & Technology Sales Leader IBM North Spanish South America Region
                </p>
            </div>
            <div class="col-md-5">
                <iframe width="100%"
                src="https://www.youtube.com/embed/xxxxx" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <img src="{{ asset('images/icon2.png') }}" alt="">
                    <h2>Tracks</h2>
                </div>
                <div class="tabla">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td width="24%">&nbsp;</td>
                            <td width="2%">&nbsp;</td>
                            <td width="17%"><img src="{{ asset('images/image.png') }}" width="249" height="143" alt=""/></td>
                            <td width="2%">&nbsp;</td>
                            <td width="17%"><img src="{{ asset('images/image.png') }}" width="249" height="143" alt=""/></td>
                            <td width="2%">&nbsp;</td>
                            <td width="17%"><img src="{{ asset('images/image.png') }}" width="250" height="143" alt=""/></td>
                            <td width="2%">&nbsp;</td>
                            <td width="17%"><img src="{{ asset('images/image.png') }}" width="249" height="143" alt=""/></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td bgcolor="#002D9C">
                            <p class="title1">
                                Business & IT Automation
                                </p>
                                <p class="detail1">
                                Lorem ipsum dolor 
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td bgcolor="#1192E8">
                            <p class="title1">
                                Hybrid Cloud & Modernization
                                </p>
                                <p class="detail1">
                                Lorem ipsum dolor 
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td bgcolor="#6929C4">
                            <p class="title1">
                                Zero Trust Security
                                </p>
                                <p class="detail1">
                                Lorem ipsum dolor 
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td bgcolor="#08BDBA">
                            <p class="title1">
                                Data Fabric & AI
                                </p>
                                <p class="detail1">
                                Lorem ipsum dolor 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right" bgcolor="#002D9C" class="arrow"><img src="{{ asset('images/arrow-right.png') }}" width="22" height="18" alt=""/></td>
                            <td>&nbsp;</td>
                            <td align="right" bgcolor="#1192E8" class="arrow"><img src="{{ asset('images/arrow-right.png') }}" width="22" height="18" alt=""/></td>
                            <td>&nbsp;</td>
                            <td align="right" bgcolor="#6929C4" class="arrow"><img src="{{ asset('images/arrow-right.png') }}" width="22" height="18" alt=""/></td>
                            <td>&nbsp;</td>
                            <td align="right" bgcolor="#08BDBA" class="arrow"><img src="{{ asset('images/arrow-right.png') }}" width="22" height="18" alt=""/></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td bgcolor="#D0E2FF" valign="top" class="col1">
                            <p class="title2">
                                Business & IT Automation
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td bgcolor="#D0E2FF" valign="top" class="col2">
                            <p class="title2">
                                Hybrid Cloud & Modernization
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td bgcolor="#D0E2FF" valign="top" class="col3">
                            <p class="title2">
                                Zero Trust Security
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td bgcolor="#D0E2FF" valign="top" class="col4">
                            <p class="title2">
                                Data Fabric & AI
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                <p class="date">
                                    <span>01:35</span> PM
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1" valign=top id="text2_">
                            <p class="text2">
                                    API Economy: Open Business en un mundo interconectado<br><br>
                                    <strong>Jorge Luis Sifuentes,</strong> Gerente de Operaciones y Tecnología en Banco Ripley<br><br>
                                    <strong>Martín Peña,</strong> Integration & Applications Leader for IBM Latin America
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col2" valign=top id="text2_">
                                <p class="text2">
                                    Moderniza tus cargas de trabajo con la mayor disponibilidad y seguridad del mercado
                                    <br><br>
                                    <strong>Jorge Carrera,</strong> Gerente Adjunto Estrategia y Continuidad Tecnológica, BCP
                                    <br><br>
                                    <strong>Diego Bessone,</strong> WW IBM Sales Director                    
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col3" valign=top id="text2_">
                                <p class="text2">
                                    From Basic SOC to Fusion Center
                                    <br><br>
                                    <strong>Carlos Dávida,</strong> CISO de Grupo Romero y Andrés Montenegro, CISO de Diners
                                    <br><br>
                                    <strong>Matías Haidbauer,</strong> Threat Management Services Leader IBM Latin America, IBM Security Services
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col4" valign=top id="text2_">
                                <p class="text2">
                                    Data Fabric: The data driven enterprise
                                    <br><br>
                                    <strong>Jason Federoff,</strong> Principal Data & AI Tech, IBM Americas
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col2">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                <p class="date">
                                    <span>02:05</span> PM
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1" valign=top id="text2_">
                                <p class="text2">
                                    Event driven architecture - Kafka
                                    <br><br>
                                    <strong>Joel Gomez,</strong> Executive Cloud Integration Architect, IBM Worldwide 
                                </p></td>
                            <td>&nbsp;</td>
                            <td class="col2" valign=top id="text2_">
                                <p class="text2">
                                    New generation of infraestructure
                                    <br><br>
                                    <strong>Jairo Reyes,</strong> Servers Product Manager, IBM Colombia
                                    <br><br>
                                    <strong>Rodney Gomes de Araujo,</strong> Storage Ecosystem Leader, IBM Latin America
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col3" valign=top id="text2_">
                                <p class="text2">
                                    Zero Trust en la gestion de identidades
                                    <br><br>
                                    <strong>Mauricio Jimenez,</strong> Security Brand Technical Specialist, IBM Colombia
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col4" valign=top id="text2_">
                                <p class="text2">
                                    El Data Journey de la Caja Arequipa
                                    <br><br>
                                    <strong>Manuel Valdivia,</strong> Gerente COE Data & Analytics (CDO) en Caja Arequipa
                                    <br><br>
                                    <strong>Francesco Fontanot,</strong> Data & Artificial Intelligence Manager, IBM Latinamerica
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col2">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                <p class="date">
                                    <span>02:35</span> PM
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1" valign=top id="text2_">
                                <p class="text2">
                                    Observability & App Resource Mgmt
                                    <br><br>
                                    <strong>Juan Pablo Soto,</strong> Customer Success Leader at IBM Chile,  Argentina, Paraguay & Uruguay
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col2" valign=top id="text2_">
                                <p class="text2">
                                    Hybrid Cloud - Responda más rápido a las demandas comerciales que cambian constantemente
                                    <br><br>
                                    <strong>Alberto Vives,</strong> CEO, Grupo Sypsa
                                    <br><br>
                                    <strong>Cindy Sandoval,</strong> IBM Systems Hardware Manager, IBM Perú
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col3" valign=top id="text2_">
                                <p class="text2">
                                    Seguridad en la nube
                                    <br><br>
                                    <strong>Julio Lizarraga,</strong> Gerente de Ciberseguridad en Americatel
                                    <br><br>
                                    <strong>Antuanet Rivas Plata,</strong> Gerente Comercial Telefónica Tech
                                    <br><br>
                                    <strong>Diana Robles,</strong> Security Integrated Manager, IBM North Spanish South America Region
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col4" valign=top id="text2_">
                                <p class="text2">
                                    Data Science en Vivo
                                    <br><br>
                                    <strong>Virginia Monroy,</strong> IBM Technical Sales Data & AI
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col1">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col2">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                <p class="date">
                                    <span>03:35</span> PM
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1" valign=top id="text2_">
                                <p class="text2">
                                    Adoptando las mejores Practicas con Tecnologia IBM para Acelerar la transformacion digital de nuestros Clientes
                                    <br><br>
                                    <strong>Ricardo Palma,</strong> CEO, Synopsis
                                    <br><br>
                                    <strong>Leandro Piazza,</strong> Ecosystem Executive Leader, IBM Perú Ecuador & Bolivia
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col2" valign=top id="text2_">
                                <p class="text2">
                                    Facilitando el Journey to cloud - VMware Lift and shift
                                    <br><br>
                                    <strong>Pablo Sandoval,</strong> IBM Public Cloud Technical Leader, Spanish South America Region + DEMO
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col3" valign=top id="text2_">
                                <p class="text2">
                                    Privacidad de datos
                                    <br><br>
                                    <strong>Juan Saona,</strong> Gerente General, Neosecure
                                    <br><br>
                                    <strong>Diego Oviedo,</strong> Associate Partner & IBM Spanish South America Region Security Services Leader
                                    <br><br>
                                    <strong>Rafael Taboada,</strong> Security Partner Ecosystem Leader,  IBM North Spanish South America Region
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col4" valign=top id="text2_">
                                <p class="text2">
                                    Singlestore: la base de datos sin límites para aplicaciones modernas y los sistemas analíticos
                                    <br><br>
                                    <strong>Kleber Ferreira,</strong> Client Technical Specialist Data & AI, IBM Chile
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col1">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col2">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col3">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="col4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">
                                <p class="date">
                                    <span>04:05</span> PM
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col1" valign=top id="text2_">
                                <p class="text2">
                                    Generación de valor mediante la Automatización de los Procesos de Negocio
                                    <br><br>
                                    <strong>Daniel Juárez Dappe,</strong> Business Automation Leader, IBM Latin America
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col2" valign=top id="text2_">
                                <p class="text2">
                                    La diferencia de contar con una nube y servicios empresariales
                                    <br><br>
                                    <strong>Carlos Van Oordt,</strong> Chief Commercial Officer en Canvia
                                    <br><br>
                                    <strong>Nico Hare,</strong> IBM Cloud Platform Leader, IBM North Spanish South America Region
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col3" valign=top id="text2_">
                                <p class="text2">
                                    Protección del Endpoint -> SIEMless
                                    <br><br>
                                    <strong>Matías Haidbauer,</strong> Threat Management Services Leader IBM Latin America, IBM Security Services
                                    <br><br>
                                    <strong>Estuardo Romero,</strong> Security Client Technical Professional,  IBM Perú
                                </p>
                            </td>
                            <td>&nbsp;</td>
                            <td class="col4" valign=top id="text2_">
                                <p class="text2">
                                    Caso de éxito del uso de Agentes Virtuales
                                    <br><br>
                                    <strong>Percy Enciso,</strong> Gerente General, MDP
                                    <br><br>
                                    <strong>Gonzalo Flores,</strong> Cloud Manager IBM North Spanish South America Region
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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
                                    '<p class="p_top">Pronto estaremos en contacto contigo</p>';
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