<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="keywords"               content="your,keywords">
        <meta name="date"                   content="November  30, 2017" />
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#245C72">
        <title>Transporte Rosenverg</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logos/favicon.png">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/dist/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>flexSlider/flexslider.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>JiSlider/JiSlider.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>scrollflow/css/eskju.jquery.scrollflow.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/css/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"	  href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>engagement.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>general.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">                          
    </head>
    <body data-spy="scroll">
        <div id="home">
            <div class="header">
                <div class="container">
                    <div class="call-header">
                        <a href="tel:+016579057"><i class="mdi mdi-call"></i><span>LL&aacute;manos: 01-6579057</span></a><label class="separacion"> - </label>
                        <a href="tel:+51996312529"><i class="fa fa-whatsapp"></i><span>Whatsapp: +51 996312529</span></a>
                    </div>
                    <div class="redes-header">
                        <ul>
                            <li><a href="https://www.facebook.com/taxitoursrosenverg/" target="_blank" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:taxirosenverg@gmail.com" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    		<nav class="navbar navbar-default">
    			<div class="container">
    				<div class="navbar-header">
    					<button id="nav-icon3" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    						<span class="sr-only">Toggle navigation</span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    					</button>
    					<a class="navbar-brand logo" href="Inicio">Rosenverg</a>
    				</div>
    			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			      	<ul class="nav navbar-nav navbar-right">
    				        <li><a href="Inicio">Inicio</a></li>
    				        <li><a href="Inicio#nosotros">Nosotros</a></li>
    				        <li><a href="Inicio#servicios">Servicios</a></li>
    				        <li><a href="Inicio#tour">Tours</a></li>
    				        <li class="active"><a href="#tour">Reservas</a></li>
    			      	</ul>
    			    </div>
    		  	</div>
    		</nav>
    	</div>
		<section id="Reservas" class="section m-b-50">
            <div class="container text-center">
                <h2 class="title text-center m-b-0">Reservas en l&iacute;nea</h2>
                <p class="subtitle m-b-40">Recuerde que todos nuestros servicios estan sujetos a comprobantes de pago, Boletas o Facturas.</p>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-account_box"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="nombre" maxlength="50" onkeypress="return soloLetras(event);">
                            <label class="mdl-textfield__label" for="nombre">Nombres y Apellidos</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-call"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="celular" maxlength="9" onkeypress="return valida(event);">
                            <label class="mdl-textfield__label" for="celular">Celular</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <button class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="mdi mdi-date_range"></i>
                            </button>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input personales" type="text" id="fecha" name="fecha" maxlength="10" placeholder="dd/mm/aaaa" value="">
                            <label class="mdl-textfield__label" for="fecha">Fecha de llegada</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-access_time"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="hora" >
                            <label class="mdl-textfield__label" for="hora">Hora de llegada</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-subject"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="vuelo" maxlength="50">
                            <label class="mdl-textfield__label" for="vuelo">Nro Vuelo</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input mdl-select">
                        <div class="mdl-icon">
                            <i class="mdi mdi-directions_car"></i>
                        </div>
                        <select class="selectpicker" title="Tipo de vehiculo" id="servicio" onchange="cambiarNro()">
                            <option value="Auto">Auto</option>
                            <option value="Minivan">Minivan</option>
                            <option value="Van">Van</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-accessibility"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="personas">
                            <label class="mdl-textfield__label" for="personas">Nro personas</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input mdl-select">
                        <div class="mdl-icon">
                            <i class="mdi mdi-flight"></i>
                        </div>
                        <select class="selectpicker" title="Aerol&iacute;nea" id="aerolinea" >
                            <option value="Aerogal">Aerogal</option>
                            <option value="Aerolineas Argentinas">Aerolineas Argentinas</option>
                            <option value="Aeroméxico">Aerom&eacute;xico</option>
                            <option value="Air Canada">Air Canada</option>
                            <option value="Air Europa">Air Europa</option>
                            <option value="Air France">Air France</option>
                            <option value="Amaszonas airlines">Amazonas Airline</option>
                            <option value="American Airlines">American Airline</option>
                            <option value="Andes airlines">Andes Airline</option>
                            <option value="ATSA airlines">ATSA Airline</option>
                            <option value="Aviacsa">Aviacsa</option>
                            <option value="Avianca airlines">Avianca Airline</option>
                            <option value="Avior Airlines">Avior Airline</option>
                            <option value="British Airways">British Airways</option>
                            <option value="Chilejet">Chilejet</option>
                            <option value="Copa Airlines">Copa Airline</option>
                            <option value="Delta Airlines">Delta Airline</option>
                            <option value="Estelar aerolínea">Estelar Aerol&iacute;nea</option>
                            <option value="Iberia Airlines">Iberia Airline</option>
                            <option value="Interjet">Interjet</option>
                            <option value="Jet Blue">Jet Blue</option>
                            <option value="KLM">KLM</option>
                            <option value="Lacsa">Lacsa</option>
                            <option value="LAN Airlines">LAN Airline</option>
                            <option value="LATAM">LATAM</option>
                            <option value="Latin American Wings">Latin American Wings</option>
                            <option value="LC Peru">LC Per&uacute;</option>
                            <option value="Peruvian Airlines">Peruvian Airline</option>
                            <option value="PlusUltra">PlusUltra</option>
                            <option value="Sky Airlines">Sky Airline</option>
                            <option value="Spirit Airlines">Spirit Airline</option>
                            <option value="Star Perú">Star Per&uacute;</option>
                            <option value="Taca">Taca</option>
                            <option value="TAM Brazilian Airlines">TAM Brazilian Airline</option>
                            <option value="TAME">TAME</option>
                            <option value="United Airlines">United Airline</option>
                            <option value="Viva Air">Viva Air</option>
                            <option value="Viva Colombia airlines">Viva Colombia Airline</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-email"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="correo" maxlength="50">
                            <label class="mdl-textfield__label" for="correo">Correo electr&oacute;nico</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-location_on"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="origen" maxlength="50">
                            <label class="mdl-textfield__label" for="origen">Punto de origen</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-location_on"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="destino" maxlength="50">
                            <label class="mdl-textfield__label" for="destino">Punto de destino</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-message"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" rows="3" type="text" id="comentario" maxlength="250"></textarea>
                            <label class="mdl-textfield__label" for="comentario">Mensaje</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-right m-t-50">
                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="solicitarReserva();">Reservar</button>
                </div>
            </div>
		</section>
        <section class="bar-chat">
                <div class="icons-center">
                    <button id="chat" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                        <i class="mdi mdi-chat"></i>
                    </button>                                                                       
                </div>                               
            </section>
        <div id="fb-root"></div>       
        <div class="coolChat">
            <div class="contenedorA">
                <div class="active_pluginBtn">
                    <span class="inicA">Chatea con nosotros</span>
                </div>
                <div class="robePlugin">    
                    <div class="fb-page" data-href="https://www.facebook.com/taxitoursrosenverg/" data-tabs="messages" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/taxitoursrosenverg/"><a href="https://www.facebook.com/taxitoursrosenverg/"></a></blockquote></div></div>
                </div>
            </div>
            <button id="chat-close" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                <i class="mdi mdi-close"></i>
            </button>
        </div>
		<footer>
            <div class="container">
                <p>&copy;2017 Transportes Rosenverg S.A.C</p>
                <p class="font-light">Cal. 15 Mza. 14A Lote. 16 A.H. Laura Caller - Los Olivos</p>
            </div>
        </footer>

    	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/dist/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>jquery-mask/jquery.mask.min.js?v=<?php echo time();?>"></script>  	
    	<script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>  	
    	<script src="<?php echo RUTA_PLUGINS?>scrollflow/js/eskju.jquery.scrollflow.min.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>flexSlider/jquery.flexslider.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_PLUGINS?>JiSlider/JiSlider.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    	<script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    	<script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            initButtonCalendarDaysMaxToday('fecha');
            initMaskInputs('fecha');
            $('#chat').on('click',function(e){
                e.stopPropagation();
                $('body').toggleClass('activeFix');
            });
            $('#chat-close').click(function(){
                $('body').toggleClass('activeFix');
            });
    	</script>
    </body>
</html>

