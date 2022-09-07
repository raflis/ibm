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
                    F.A.Q.
                </h1>
                <h4 class="mb-4">
                    Seguimos desarrollando las soluciones del futuro con nuestro propio ritmo para llevar a los negocios a otro nivel.
                </h4>
                <!--<p>
                    Seguimos desarrollando las soluciones del futuro con nuestro propio ritmo para llevar a los negocios a otro nivel.
                </p>-->
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
                        <p class="text-left pl-0">Registra hasta máximo dos (2) personas de tu equipo.</p>
                        <div class="form-group col-md-12">
                            <label for="">Nombres y Apellidos:</label>
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
                            <label class="email_corp" for="">Correo Corporativo:</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Celular:</label>
                            <input type="text" name="telephone" class="form-control" required>
                        </div>
                        <div class="select-group col-md-12">
                            <label for="">País:</label>
                            <select name="country" id="" class="form-select" required>
                                <option value="">Seleccione país</option>
                                <option value="Andorra">Andorra</option>
                                <option value="United Arab Emirates">Emiratos Árabes Unidos</option>
                                <option value="Afghanistan">Afganistán</option>
                                <option value="Antigua and Barbuda">Antigua y Barbuda</option>
                                <option value="Anguilla">Anguila</option>
                                <option value="Albania">Albania</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Angola">Angola</option>
                                <option value="Antarctica">Antártico</option>
                                <option value="Argentina">Argentina</option>
                                <option value="American Samoa">Samoa Americana</option>
                                <option value="Austria">Austria</option>
                                <option value="Australia">Australia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Åland Islands">Åland</option>
                                <option value="Azerbaijan">Azerbaiyán</option>
                                <option value="Bosnia and Herzegovina">Bosnia-Herzegovina</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belgium">Bélgica</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Bahrain">Bahréin</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Benin">Benín</option>
                                <option value="Saint Barthélemy">Saint Barthélemy</option>
                                <option value="Bermuda">Bermudas</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bolivia, Plurinational State of">Bolivia</option>
                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, San Estaquio y Saba</option>
                                <option value="Brazil">Brasil</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bhutan">Bután</option>
                                <option value="Bouvet Island">Isla Bouvet</option>
                                <option value="Botswana">Botsuana</option>
                                <option value="Belarus">Bielorrusia</option>
                                <option value="Belize">Belice</option>
                                <option value="Canada">Canadá</option>
                                <option value="Cocos (Keeling) Islands">Islas Cocos</option>
                                <option value="Congo, The Democratic Republic of the">República Democrática del Congo</option>
                                <option value="Central African Republic">República Centroafricana</option>
                                <option value="Congo">Congo (República del)</option>
                                <option value="Switzerland">Suiza</option>
                                <option value="Côte d'Ivoire">Costa de Marfil</option>
                                <option value="Cook Islands">Islas Cook</option>
                                <option value="Chile">Chile</option>
                                <option value="Cameroon">Camerún</option>
                                <option value="China">China (República Popular)</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cape Verde">Cabo Verde</option>
                                <option value="Curaçao">Curasao</option>
                                <option value="Christmas Island">Isla de Navidad</option>
                                <option value="Cyprus">Chipre</option>
                                <option value="Czech Republic">República Checa</option>
                                <option value="Germany">Alemania</option>
                                <option value="Djibouti">Yibuti</option>
                                <option value="Denmark">Dinamarca</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">República Dominicana</option>
                                <option value="Algeria">Argelia</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Egypt">Egipto</option>
                                <option value="Western Sahara">Sahara Occidental</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Spain">España</option>
                                <option value="Ethiopia">Etiopía</option>
                                <option value="Finland">Finlandia</option>
                                <option value="Fiji">Fiyi</option>
                                <option value="Falkland Islands (Malvinas)">Islas Malvinas</option>
                                <option value="Micronesia, Federated States of">Micronesia (Estados Federados de)</option>
                                <option value="Faroe Islands">Islas Feroe</option>
                                <option value="France">Francia</option>
                                <option value="Gabon">Gabón</option>
                                <option value="United Kingdom">Reino Unido de Gran Bretaña e Irlanda del Norte</option>
                                <option value="Grenada">Granada</option>
                                <option value="Georgia">Georgia</option>
                                <option value="French Guiana">Guayana Francesa</option>
                                <option value="Guernsey">Guernesey</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greenland">Groenlandia</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guadeloupe">Guadalupe</option>
                                <option value="Equatorial Guinea">Guinea Ecuatorial</option>
                                <option value="Greece">Grecia</option>
                                <option value="South Georgia &amp; South Sandwich Islands">Islas Georgias del Sur y Sandwich del Sur</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guam">Guam</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Heard Island and McDonald Islands">Islas Heard y McDonald</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Croatia">Croacia</option>
                                <option value="Haiti">Haití</option>
                                <option value="Hungary">Hungría</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Ireland">Irlanda</option>
                                <option value="Israel">Israel</option>
                                <option value="Isle of Man">Isla de Man</option>
                                <option value="India">India</option>
                                <option value="British Indian Ocean Territory">Territorio Británico en el Océano Índico</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Iceland">Islandia</option>
                                <option value="Italy">Italia</option>
                                <option value="Jersey">Isla de Jersey</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Jordan">Jordania</option>
                                <option value="Japan">Japón</option>
                                <option value="Kenya">Kenia</option>
                                <option value="Kyrgyzstan">Kirguistán</option>
                                <option value="Cambodia">Camboya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Comoros">Comoras</option>
                                <option value="Saint Kitts and Nevis">San Cristóbal y Nieves</option>
                                <option value="Korea, Republic of">Corea, Republica de</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Cayman Islands">Islas Caimán</option>
                                <option value="Kazakhstan">Kazajistán</option>
                                <option value="Lao People's Democratic Republic">Laos</option>
                                <option value="Lebanon">Líbano</option>
                                <option value="Saint Lucia">Santa Lucía</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Lithuania">Lituania</option>
                                <option value="Luxembourg">Luxemburgo</option>
                                <option value="Latvia">Letonia</option>
                                <option value="Libya">Libia</option>
                                <option value="Morocco">Marruecos</option>
                                <option value="Monaco">Mónaco</option>
                                <option value="Moldova, Republic of">Moldavia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Saint Martin (French part)">San Martín (parte francesa)</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Marshall Islands">Islas Marshall</option>
                                <option value="Macedonia, The former Yugoslav Republic of">Macedonia (República de)</option>
                                <option value="Mali">Malí</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Macao">Macao</option>
                                <option value="Northern Mariana Islands">Islas Marianas del Norte</option>
                                <option value="Martinique">Martinica</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Malta">Malta</option>
                                <option value="Mauritius">Mauricio</option>
                                <option value="Maldives">Maldivas</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Mexico">México</option>
                                <option value="Malaysia">Malasia</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="New Caledonia">Nueva Caledonia</option>
                                <option value="Niger">Níger</option>
                                <option value="Norfolk Island">Isla Norfolk</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Netherlands">Países Bajos (Holanda)</option>
                                <option value="Norway">Noruega</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Niue">Niue</option>
                                <option value="New Zealand">Nueva Zelanda</option>
                                <option value="Oman">Omán</option>
                                <option value="Panama">Panamá</option>
                                <option value="Peru">Perú</option>
                                <option value="French Polynesia">Polinesia Francesa</option>
                                <option value="Papua New Guinea">Papúa Nueva Guinea</option>
                                <option value="Philippines">Filipinas</option>
                                <option value="Pakistan">Pakistán</option>
                                <option value="Poland">Polonia</option>
                                <option value="Saint Pierre and Miquelon">San Pedro y Miquelón</option>
                                <option value="Pitcairn">Islas Pitcairn</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Palestine, State of">Palestina</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Palau">Palau</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunión</option>
                                <option value="Romania">Rumania</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Russian Federation">Rusia</option>
                                <option value="Rwanda">Ruanda</option>
                                <option value="Saudi Arabia">Arabia Saudita</option>
                                <option value="Solomon Islands">Islas Salomón</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sudan">Sudán</option>
                                <option value="Sweden">Suecia</option>
                                <option value="Singapore">Singapur</option>
                                <option value="Saint Helena">Santa Helena</option>
                                <option value="Slovenia">Eslovenia</option>
                                <option value="Svalbard and Jan Mayen">Islas Svalbard y Jan Mayen</option>
                                <option value="Slovakia">Eslovaquia</option>
                                <option value="Sierra Leone">Sierra Leona</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Somalia">Somalia</option>
                                <option value="Suriname">Surinam</option>
                                <option value="South Sudan">Sudán del Sur</option>
                                <option value="Sao Tome and Principe">Santo Tomé y Príncipe</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Sint Maarten (Dutch part)">San Martín (Sint Maarten)</option>
                                <option value="Swaziland">Swazilandia</option>
                                <option value="Turks and Caicos Islands">Islas Turcas y Caicos</option>
                                <option value="Chad">Chad</option>
                                <option value="French Southern Territories">Territorios Australes Franceses</option>
                                <option value="Togo">Togo</option>
                                <option value="Thailand">Tailandia</option>
                                <option value="Tajikistan">Tayikistán</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Timor-Leste">Timor Oriental</option>
                                <option value="Turkmenistan">Turkmenistán</option>
                                <option value="Tunisia">Túnez</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Turkey">Turquía</option>
                                <option value="Trinidad and Tobago">Trinidad y Tobago</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Taiwan">Taiwán</option>
                                <option value="Tanzania, United Republic of">Tanzania</option>
                                <option value="Ukraine">Ucrania</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United States Minor Outlying Islands">Islas menores alejadas de los Estados Unidos</option>
                                <option value="United States">Estados Unidos de America</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistán</option>
                                <option value="Holy See (Vatican City State)">Ciudad del Vaticano</option>
                                <option value="Saint Vincent and the Grenadines">San Vicente y las Granadinas</option>
                                <option value="Venezuela, Bolivarian Republic of">Venezuela</option>
                                <option value="Virgin Islands, British">Islas Vírgenes Británicas</option>
                                <option value="Virgin Islands, U.S.">Islas Vírgenes de los Estados Unidos</option>
                                <option value="Viet Nam">Vietnam</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Wallis and Futuna">Wallis y Futuna</option>
                                <option value="Samoa">Samoa del Oeste</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="South Africa">Sudáfrica</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabue</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                <p>
                                    IBM puede utilizar mis datos de contacto para mantenerme informado de productos servicios y ofertas: por correo electrónico por teléfono Entiendo que puedo retirar mi consentimiento de marketing en cualquier momento por medio del envío de una solicitud de exclusión. También puedo cancelar la recepción de e-mails haciendo clic en el enlace para darme de baja en cada uno de esos e-mails. Entiendo que puedo encontrar más información ingresando a la Declaración de Privacidad de IBM. Al enviar este formulario reconozco que he leído y entendido la Declaración de Privacidad de (https://www.ibm.com/pe-es/privacy) *
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

<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    ITEM
                                </th>
                                <th>
                                    CÓMO SE EVIDENCIA
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        1. ¡Regístrate y <span>empieza a rockear! (100 puntos)</span>
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Registros en Landing Page <a href="{{ route('index') }}">ibmcloudrocks.com</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        2. <span>Inscribe hasta máximo 3</span> personas (rockstars) de tu empresa (200 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Registros en Landing Page ibmcloudrocks.com de tres personas de la misma empresa, los puntos se otorgan a los tres primeros inscritos.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        3. Conéctate al webinar <span>“Let’s create with IBM”</span> (100 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Asistentes al evento o personas que visualicen el video de grabación posterior a este.
                                    </p>
                                    <div class="links">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#modal2">→ Mira el Replay Aquí</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        4. Completa el quiz y comparte tu insignia digital en Linkedin usando <span>#ibmcloudrocks</span> (100 puntos solo quiz - 200 puntos quiz e insignia)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Registros realizados en el quiz y publicaciones en Linkedin usando el hashtag <strong>#ibmcloudrocks</strong>, las publicaciones se trackean con el hashtag.
                                    </p>
                                    <div class="links">
                                        <a href="https://ibmcloudrocks.com/security/es" target="_blank">→ Mira el video de Secutiry</a>
                                        <a href="https://form.typeform.com/to/IBe35Ipv" target="_blank">→ Realizar Quiz</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        5. Asistir al <span>IBM Cloud Rockfest</span> con Diego Torres (300 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Asistencia al evento de forma presencial o virtual.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        6. Agenda y asiste a una reunión con el <span>IBM Innovation Studio</span> o con <span>arquitecto de IBM</span> para postular al <span>IBM Build Lab</span> (300 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Innovation Studio y Build Lab (PTS) deben reportar al Ecosystem qué empresas han solicitado reunión con ellos y se han reunido efectivamente.
                                    </p>
                                    <div class="links links2">
                                        <p>
                                            → Agendar reunión con Innovation Studio:<br>
                                            <a class="a_first a_first0" href="mailto:Innovation.Studio.Gdl.Coordinator@ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">Innovation.Studio.Gdl.Coordinator@ibm.com</a>
                                        </p>
                                        
                                        <p>→ Agendar reunión con arquitecto para postular al Build Lab:<br>
                                            <a class="a_first" href="mailto:garciamg@ar.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">garciamg@ar.ibm.com (Argentina y Uruguay)</a>
                                            <a href="mailto:pcourdur@cl.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">pcourdur@cl.ibm.com (Chile)</a>
                                            <a href="mailto:lchamorr@co.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">lchamorr@co.ibm.com (Colombia)</a>
                                            <a class="a_last" href="mailto:aleruiz@mx1.ibm.com?subject=IBM Cloud Rocks - Solicitud de Reunión">aleruiz@mx1.ibm.com (México)</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        7. Completa al 100% una certificación de <span>IBM PartnerWorld</span> (400 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Se debe enviar Screenshot de la certificación recibida al IP/Ecosystem, esta información se validará y se otorgará el puntaje por cada certificación recibida. La certificación se puede obtener a través de la plataforma IBM training.
                                    </p>
                                    <div class="links">
                                        <a href="https://www.ibm.com/training" target="_blank">→ https://www.ibm.com/training</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        8. Contar con un <span>ESA</span> vigente (300 puntos - ESA vigente y 500 puntos - Nuevo ESA)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Contar con un ESA firmado y vigente otorga automáticamente puntos, IBM reporta esta información. <strong>Si se cuenta con más de un ESA el puntaje otorgado es por cada uno.</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        9. Comparte tu alianza con <span>IBM en Linkedin</span> (300 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Se otorgarán puntos por la publicación hecha usando el hashtag <strong>#ibmcloudrocks</strong>, esta publicación puede ser en cualquier formato (Imagen, video, etc.) el puntaje se otorga a la persona que publique y/o comparta la publicación. <strong>Citar ambas empresas (logos) mencionar el nombre de la solución y que tecnología de IBM tienen.</strong> incorporada.
                                    </p>
                                    <div class="links">
                                        <a href="{{ asset('zip/Template-Alianza-con-IBM.zip') }}" target="_blank">→ Descarga el template para hacer la publicación</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        10. Completa el template <span>Go to Market</span> (500 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Descarga, completa y envía al team de IBM el template Go To Market que encontrarás a continuación:
                                    </p>
                                    <br>
                                    <p class="mb-0">
                                        → Envíalo al team de IBM de acuerdo a tu país:
                                    </p>
                                    <div class="links mt-0">
                                        <p class="mt-0">
                                            <a class="a_first" href="mailto:garciamg@ar.ibm.com"><span>Argentina y Uruguay:</span> garciamg@ar.ibm.com </a><br>
                                            <a href="mailto:pcourdur@cl.ibm.com"><span>Chile:</span> pcourdur@cl.ibm.com</a><br>
                                            <a href="mailto:lchamorr@co.ibm.com"><span>Colombia:</span> lchamorr@co.ibm.com</a><br>
                                            <a class="a_last" href="mailto:aleruiz@mx1.ibm.com"><span>México:</span> aleruiz@mx1.ibm.com</a><br><br>
                                            <a href="{{ asset('zip/Template-Go-To-Market.zip') }}">
                                                <img src="{{ asset('images/icon1.png') }}" alt="">
                                                Descarga el Template Go To Market
                                            </a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        11. Envía la presentación de tu <span>solución innovadora</span> a IBM (500 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Envía la plantilla de presentación de solución en formato .pdf como fecha máxima el <strong>26 de Agosto</strong> al mail que corresponda a tu país:
                                    </p>
                                    <div class="links">
                                        <p>
                                            <a class="a_first" href="mailto:garciamg@ar.ibm.com"><span>Argentina y Uruguay:</span> garciamg@ar.ibm.com </a><br>
                                            <a href="mailto:pcourdur@cl.ibm.com"><span>Chile:</span> pcourdur@cl.ibm.com</a><br>
                                            <a href="mailto:lchamorr@co.ibm.com"><span>Colombia:</span> lchamorr@co.ibm.com</a><br>
                                            <a class="a_last" href="mailto:aleruiz@mx1.ibm.com"><span>México:</span> aleruiz@mx1.ibm.com</a><br><br>
                                            <a href="{{ asset('zip/Presentacion-de-Solucion-Cloud-Rocks-Latam.zip') }}">
                                                <img src="{{ asset('images/icon1.png') }}" alt="">
                                                Descarga plantilla de presentación de solución
                                            </a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_left">
                                    <p>
                                        12. ¡Presenta <span>tu solución</span> a IBM y conviértete en un rockstar de los negocios! (500 puntos)
                                    </p>
                                </td>
                                <td class="td_right">
                                    <p>
                                        Presenta tu solución en vivo con un team selecto de IBM y recibe recomendaciones para potenciar tu solución además de recibir puntaje adicional. Para presentar tu solución debes agendar estar reunión (face to face o virtual) hasta máximo el <strong>2 de Septiembre</strong> al mail que corresponde a tu país:
                                    </p>
                                    <div class="links">
                                        <p>
                                            <a class="a_first" href="mailto:garciamg@ar.ibm.com"><span>Argentina y Uruguay:</span> garciamg@ar.ibm.com </a><br>
                                            <a href="mailto:pcourdur@cl.ibm.com"><span>Chile:</span> pcourdur@cl.ibm.com</a><br>
                                            <a href="mailto:lchamorr@co.ibm.com"><span>Colombia:</span> lchamorr@co.ibm.com</a><br>
                                            <a class="a_last" href="mailto:aleruiz@mx1.ibm.com"><span>México:</span> aleruiz@mx1.ibm.com</a><br><br>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                    '<p>Pronto estaremos en contacto contigo</p>';
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