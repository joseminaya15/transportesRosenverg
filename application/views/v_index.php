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
        <title>Transportes Rosenverg</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logos/favicon.png">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/dist/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>flexSlider/flexslider.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>JiSlider/JiSlider.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>scrollflow/css/eskju.jquery.scrollflow.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/css/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>engagement.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>general.min.css?v=<?php echo time();?>">
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
                        <a class="navbar-brand logo" href="#">Rosenverg</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#principal">Inicio</a></li>
                            <li><a href="#nosotros">Nosotros</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#tour">Tours</a></li>
                            <li><a href="Reserva">Reservas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="principal">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo1.jpg" alt="">                        
                        <img src="<?php echo RUTA_IMG?>fondo/fondo1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo2.jpg" alt="">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo3.jpg" alt="">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo3.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6 cont-carousel-left">
                    <h2>Tu taxi desde $20 desde el Aeropuerto a Miraflores</h2>
                    <img class="logo-trip" src="<?php echo RUTA_IMG?>logos/logo.svg" alt="">
                </div>
                <div class="col-sm-6 cont-carousel right">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Cont&aacute;ctenos</h2>
                        </div>
                        <div class="mdl-card_supporting-text">
                            <div class="col-xs-12 mdl-input-group">
                                <div class="mdl-icon">
                                    <i class="mdi mdi-person"></i>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="nombre">
                                    <label class="mdl-textfield__label" for="nombre">Nombres</label>
                                </div>
                            </div>
                            <div class="col-xs-12 mdl-input-group">
                                <div class="mdl-icon">
                                    <i class="mdi mdi-mail"></i>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="email">
                                    <label class="mdl-textfield__label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-xs-12 mdl-input-group">
                                <div class="mdl-icon">
                                    <i class="mdi mdi-call"></i>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="telefono">
                                    <label class="mdl-textfield__label" for="telefono">Tel&eacute;fono</label>
                                </div>
                            </div>
                            <div class="col-xs-12 mdl-input-group">
                                <div class="mdl-icon">
                                    <i class="mdi mdi-message"></i>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <textarea class="mdl-textfield__input" rows="3" type="text" id="mensaje"></textarea>
                                    <label class="mdl-textfield__label" for="mensaje">Mensaje</label>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions text-center">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="enviarEmail()">Enviar</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
        <section id="nosotros" class="section">
            <div class="container">
                <h2 class="title text-center">Bienvenidos a Transportes Rosenverg</h2>
                <div class="mdl-card">
                    <div class="mdl-card__title">
                        <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>file/nosotros.jpg" alt="">           
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>Transportes Rosenverg se cre&oacute; con la finalidad de brindar un excelente servicio de taxi y tours de transporte personal desde el Aeropuerto Internacional Jorge Ch&aacute;vez hacia toda la ciudad y viceversa.</p>
                        <h2 class="subtitle">Misi&oacute;n</h2>
                        <p>Brindar un excelente servicio de taxi teniendo como principios base la puntualidad, confiabilidad, &eacute;tica y responsabilidad para nuestros clientes.</p>
                        <h2 class="subtitle">Visi&oacute;n</h2>
                        <p>Ser la empresa lider de taxis a nivel nacional, reconocida por un servicio de alta calidad, seguridad, confort y continuo mejoramiento en el servicio de la flota; a cargo de experimentados conductores. Esto les asegura una experiencia inolvidable a nuestros pasajeros.</p>
                        <p>No duden en contactarnos, estamos a su disposici&oacute;n las 24 horas del d&iacute;a, los 365 d&iacute;as del a&ntilde;o.Transportes Rosenverg les agradece por su preferencia.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section clientes">
            <div class="container">
                <h2 class="title text-center">Conf&iacute;an en nosotros</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item text-center">
                        <a href=" http://www.molitalia.com.pe" target="blank"><img src="<?php echo RUTA_IMG?>logos/logo-molitalia.png" alt=""></a>
                    </div>
                    <div class="item text-center">
                        <a><img src="<?php echo RUTA_IMG?>logos/sainca.png" alt=""></a>
                    </div>
                    <div class="item text-center">
                        <a href="http://www.handsonperu.org/" target="blank"><img src="<?php echo RUTA_IMG?>logos/hop.png" alt=""></a>
                    </div>
                    <div class="item text-center">
                        <a href="http://ichangeperu.org/" target="blank"><img src="<?php echo RUTA_IMG?>logos/ichange.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="servicios" class="section background-grey">
            <div class="container text-center">
                <h2 class="title text-center">Servicios</h2>
                <div class="">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="mdl-card mdl-card-servicios">
                                <div class="mdl-card__title">
                                    <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>file/basico.jpg">
                                    <p>1 - 3 pax</p>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <table class="mdl-data-table mdl-js-data-table">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Partida</th>
                                                <th class="text-left">Destino</th>
                                                <th class="text-center">Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">Miraflores</td>
                                                <td class="text-center">$20 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">San Isidro</td>
                                                <td class="text-center">$20 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">Barranco</td>
                                                <td class="text-center">$20 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Otros</td>
                                                <td class="text-left">Destino</td>
                                                <td class="text-center"><a href="tel:+51996312529">Consulte Aqu&iacute;</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mdl-card mdl-card-servicios">
                                <div class="mdl-card__title">
                                    <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>file/elite.jpg">
                                    <p>4 - 5 pax</p>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <table class="mdl-data-table mdl-js-data-table">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Partida</th>
                                                <th class="text-left">Destino</th>
                                                <th class="text-center">Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">Miraflores</td>
                                                <td class="text-center">$25 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">San Isidro</td>
                                                <td class="text-center">$25 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">Barranco</td>
                                                <td class="text-center">$25 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Otros</td>
                                                <td class="text-left">Destino</td>
                                                <td class="text-center"><a href="tel:+51996312529">Consulte Aqu&iacute;</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mdl-card mdl-card-servicios">
                                <div class="mdl-card__title">
                                    <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>file/van.jpg">
                                    <p>5 - 8 pax</p>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <table class="mdl-data-table mdl-js-data-table">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Partida</th>
                                                <th class="text-left">Destino</th>
                                                <th class="text-center">Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">Miraflores</td>
                                                <td class="text-center">$35 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">San Isidro</td>
                                                <td class="text-center">$35 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Aeropuerto</td>
                                                <td class="text-left">Barranco</td>
                                                <td class="text-center">$35 dolares</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Otros</td>
                                                <td class="text-left">Destino</td>
                                                <td class="text-center"><a href="tel:+51996312529">Consulte Aqu&iacute;</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tour" class="section">
            <div class="container text-center">
                <h2 class="title text-center">Tours</h2>
                <div class="">
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="MUSEO NICOLINI" src="<?php echo RUTA_IMG?>tour/museo_nicolini.jpg">
                            <p>Museo Nicolini</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Este museo alberga la colecci&oacute;n de Jorge Nicolini, una de las m&aacute;s fascinantes en el mundo y la m&aacute;s grande en Sudam&eacute;rica, 
                            conformada por 120 autos de incalculable valor cultural e hist&oacute;rico, fabricados entre los a&ntilde;os 1901 y 1973. Exhibe m&aacute;s de 70 autos, 
                            3 de ellos &uacute;nicos en el mundo. El taller de restauraci&oacute;n puede ser visitado durante el recorrido.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/banco_reserva.jpg">
                            <p>Museo del Banco de la Reserva</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Cuenta con tres &aacute;reas de exhibici&oacute;n. Destacan la de arqueolog&iacute;a, en donde se exhiben cer&aacute;micos, textiles y de madera de las culturas Vicus, Moche, 
                            Chancay, Inca, Lambayeque, Nazca, Chim&uacute; y Chav&iacute;n, con la impresionante colecci&oacute;n de oro pre inca Hugo Cohen, que se puede apreciar en la 
                            b&oacute;veda del banco. En la Sala de Arte popular, se muestran tejidos, mantos, petacas, cer&aacute;micas, entre otros que representan las diferentes 
                            regiones del Per&uacute;.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/barrio_chino.jpg">
                            <p>Barrio Chino</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El Barrio Chino de Lima, alrededor de la calle Cap&oacute;n, surgi&oacute; de una gran corriente de inmigratoria que se dio en la ciudad desde 1849.
                            Aqu&iacute; podr&aacute;s ver varias construcciones de estilo chino y comer en los t&iacute;picos Chifas, (restaurantes de comida china) con un sabor &uacute;nico en el mundo, que mezcla la cocina china con la criolla propia del Per&uacute;.
                            El Barrio Chino est&aacute; en el centro de Lima, al sureste del Centro Hist&oacute;rico.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/malecon_miraflores.jpg">
                            <p>Malec&oacute;n de Miraflores</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Los cientos de visitantes que diariamente caminan por sus calles y recorren su malec&oacute;n quedan cautivados con este rinc&oacute;n de la capital, 
                            que ha sido catalogado en un art&iacute;culo del 'Huffington Post' como 'el inicio perfecto para la aventura lime&ntilde;a'. 
                            Con una inmejorable vista al Oc&eacute;ano Pac&iacute;fico, invita a disfrutar de todas las actividades que ofrece al visitante; 
                            desde recorrerlo en bicicleta, hasta volar en parapente.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/parque_muralla.jpg">
                            <p>Parque La muralla</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Alberga un fragmento restaurado de la antigua muralla que circundaba Lima y que fuera construida en el siglo XVII para protegerla 
                            de los piratas y ataques de los enemigos de la corona espa&ntilde;ola. En el lugar se encuentra la estatua del fundador de Lima, el 
                            conquistador espa&ntilde;ol Francisco Pizarro, as&iacute; como un museo de sitio donde se exhiben piezas arqueol&oacute;gicas halladas en la zona.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/museo_arqueologia.jpg">
                            <p>Museo Nacional de Arqueolog&iacute;a</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Es el museo estatal m&aacute;s antiguo del pa&iacute;s. Muestra todas la etapas de la historia del Per&uacute;, desde la edad de piedra hasta la 
                            independencia. Exhibe cer&aacute;micas, textiles, metales, material org&aacute;nico y l&iacute;tico, adem&aacute;s de restos humanos bien conservados. 
                            Tambi&eacute;n cuenta con objetos de valor hist&oacute;rico-art&iacute;stico y fondos documentales, fotogr&aacute;ficos y bibliogr&aacute;ficos que dan cuenta 
                            de los per&iacute;odos colonial y republicano.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/pantano_villa.jpg">
                            <p>Pantanos de Villa</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El Refugio de Vida Silvestre Pantanos de Villa es un destino especial para la observaci&oacute;n de aves. Es un &Aacute;rea Natural 
                            Protegida creada con la finalidad de asegurar la conservaci&oacute;n de una muestra representativa de la flora y fauna de un humedal 
                            costero del Per&uacute;, como sustento para las aves locales y migratorias. Se estima que en conjunto se cuenta con 206 especies 
                            registradas hasta la actualidad. Cuenta con servicios de alquiler de botes.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/parque_leyenda.jpg">
                            <p>Parque de Las Leyendas</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El zool&oacute;gico m&aacute;s importante del Per&uacute;. Destaca por albergar diferentes ejemplares de flora y fauna de la costa, sierra y selva 
                            de nuestro pa&iacute;s, con recreaciones ambientales de cada regi&oacute;n. Es como viajar por el Per&uacute; sin salir de Lima.
                            Cuenta con 54 monumentos arqueol&oacute;gicos que son parte del complejo arqueol&oacute;gico Maranga y un museo en donde 
                            se exhiben, conservan e investigan los hallazgos.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/museo_submarino.jpg">
                            <p>Museo de submarino Abtao</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Submarino de los a&ntilde;os 50, que sirvi&oacute; a la Marina del Per&uacute; por 48 a&ntilde;os.
                            La visita permite conocer todas sus partes, como el compartimiento de los torpedos, el puesto central, 
                            donde podr&aacute;n utilizar el periscopio, el compartimiento de m&aacute;quinas, el compartimiento de motores, hasta llegar 
                            a la cubierta. Adem&aacute;s, da la oportunidad de participar de la recreaci&oacute;n de un combate submarino, 
                            con efecto de luces y sonido. Al finalizar la visita, es posible accionar el ca&ntilde;&oacute;n que se encuentra en 
                            la cubierta.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/circuito_magico.jpg">
                            <p>Circuito M&aacute;gico del Agua</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Ubicado en el Parque de la Reserva, es un maravilloso conjunto de 13 fuentes ornamentales, cibern&eacute;ticas 
                            e interactivas en donde el agua, la m&uacute;sica, la luz, las im&aacute;genes y los efectos l&aacute;ser, en perfecta conjunci&oacute;n 
                            y armon&iacute;a, se mezclan para presentarnos espect&aacute;culos, &uacute;nicos e incre&iacute;bles, llenos de magia, ilusi&oacute;n y fantas&iacute;a. 
                            Ostenta el reconocimiento y distinci&oacute;n mundial al haber obteniendo el Record Guinness como 'El Complejo de 
                            Fuentes m&aacute;s Grande del Mundo en un Parque P&uacute;blico'.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/marcahuasi.jpg">
                            <p>Marcahuasi</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>Marcahuasi es una meseta de la Cordillera de los Andes ubicada al este de Lima, sobre la cadena monta&ntilde;osa que se eleva hacia la margen derecha del r&iacute;o R&iacute;mac. Esta formaci&oacute;n domina el paisaje de 4.000 m de altitud sobre el nivel del mar.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/rupac.jpg">
                            <p>Rupac</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>R&uacute;pac es un sitio arqueol&oacute;gico perteneciente a la cultura los atavillos. Est&aacute; situado en la Regi&oacute;n Lima, provincia de Huaral, Distrito de Atavillos Bajo. La construcci&oacute;n data alrededor del a&ntilde;o 1200 d.C.. Las edificaciones fueron construido en piedra. Fue declarado Patrimonio Cultural de la Naci&oacute;n mediante Resoluci&oacute;n Directoral Nacional N° 283/INC en el a&ntilde;o 1999.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/museo_larco.jpg">
                            <p>Museo Larco</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El Museo Larco fue fundado en 1926 y est&aacute; ubicado en el Distrito de Pueblo Libre, en Lima. Exhibe galer&iacute;as que muestran los 3000 a&ntilde;os de desarrollo de la historia del Per&uacute; precolombino.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/ruinas_pachacamac.jpg">
                            <p>Ruinas de Pachacamac</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El Museo de Sitio de Pachac&aacute;mac es un museo que est&aacute; situado en el departamento de Lima, cerca del sitio arqueol&oacute;gico Pachacamac.​​​ Tiene una colecci&oacute;n de 277 piezas prehisp&aacute;nicas entre cer&aacute;mica, de madera y metal; y textiles.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/centro_lima.jpg">
                            <p>Centro hist&oacute;rico de Lima</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El centro hist&oacute;rico de Lima es el &aacute;rea de la ciudad de Lima que abarca su emplazamiento original y sus edificios m&aacute;s antiguos. El conjunto, emplazado entre los distritos de Lima y del R&iacute;mac,​ fue declarado Patrimonio de la Humanidad en 1988 y es uno de los m&aacute;s importantes destinos tur&iacute;sticos del Per&uacute;.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-card-tour">
                        <div class="mdl-card__title">
                            <img alt="transporte rosenverg" src="<?php echo RUTA_IMG?>tour/museo_oro.jpg">
                            <p>Museo de Oro</p>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalTour($(this))">Ver m&aacute;s</button>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>El Museo Oro del Per&uacute; y Armas del Mundo es un museo arqueol&oacute;gico y militar ubicado en el Distrito de Santiago de Surco, en Lima (Per&uacute;), creado en la d&eacute;cada de 1960 a partir de la colecci&oacute;n privada del empresario y diplom&aacute;tico peruano Miguel Mujica Gallo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <p>&copy;2017 Transportes Rosenverg S.A.C</p>
                <p class="font-light">Cal. 15 Mza. 14A Lote. 16 A.H. Laura Caller - Los Olivos</p>
                <p class="font-light">Celular: <a href="tel:+51996312529">996312529</a> - Correo: <a href="mailto:taxirosenverg@gmail.com">taxirosenverg@gmail.com</a></p>
            </div>
        </footer>


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text" id="terminosYcondiciones">Ver Destino</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <form action="#">
                                <div class="col-xs-12 mdl-input-group">
                                    <div class="mdl-select">
                                        <select class="selectpicker" id="destino_inicio" class="form-control" name="destino_inicio" >
                                            <option value="">Seleccione un destino de inicio</option>
                                            <option>LIMA</option>
                                            <option>ANCON</option>
                                            <option>ATE</option>
                                            <option>BARRANCO</option>
                                            <option>BRE&Ntilde;A</option>
                                            <option>CARABAYLLO</option>
                                            <option>CHACLACAYO</option>
                                            <option>CHORRILLOS</option>
                                            <option>CIENEGUILLA</option>
                                            <option>COMAS</option>
                                            <option>EL AGUSTINO</option>
                                            <option>INDEPENDENCIA</option>
                                            <option>JESUS MARIA</option>
                                            <option>LA MOLINA</option>
                                            <option>LA VICTORIA</option>
                                            <option>LINCE</option>
                                            <option>LOS OLIVOS</option>
                                            <option>LURIGANCHO</option>
                                            <option>LURIN</option>
                                            <option>MAGDALENA DEL MAR</option>
                                            <option>PUEBLO LIBRE</option>
                                            <option>MIRAFLORES</option>
                                            <option>PACHACAMAC</option>
                                            <option>PUCUSANA</option>
                                            <option>PUENTE PIEDRA</option>
                                            <option>PUNTA HERMOSA</option>
                                            <option>PUNTA NEGRA</option>
                                            <option>RIMAC</option>
                                            <option>SAN BARTOLO</option>
                                            <option>SAN BORJA</option>
                                            <option>SAN ISIDRO</option>
                                            <option>SAN JUAN DE LURIGANCHO</option>
                                            <option>SAN JUAN DE MIRAFLORES</option>
                                            <option>SAN LUIS</option>
                                            <option>SAN MARTIN DE PORRES</option>
                                            <option>SAN MIGUEL</option>
                                            <option>SANTA ANITA</option>
                                            <option>SANTA MARIA DEL MAR</option>
                                            <option>SANTA ROSA</option>
                                            <option>SANTIAGO DE SURCO</option>
                                            <option>SURQUILLO</option>
                                            <option>VILLA EL SALVADOR</option>
                                            <option>VILLA MARIA DEL TRIUNFO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 mdl-input-group m-b-30">
                                    <div class="mdl-select">
                                        <select class="selectpicker" id="destino_fin" class="form-control" name="destino_fin">
                                            <option value="">Seleccione un destino fin</option>
                                            <option>LIMA</option>
                                            <option>ANCON</option>
                                            <option>ATE</option>
                                            <option>BARRANCO</option>
                                            <option>BREÑA</option>
                                            <option>CARABAYLLO</option>
                                            <option>CHACLACAYO</option>
                                            <option>CHORRILLOS</option>
                                            <option>CIENEGUILLA</option>
                                            <option>COMAS</option>
                                            <option>EL AGUSTINO</option>
                                            <option>INDEPENDENCIA</option>
                                            <option>JESUS MARIA</option>
                                            <option>LA MOLINA</option>
                                            <option>LA VICTORIA</option>
                                            <option>LINCE</option>
                                            <option>LOS OLIVOS</option>
                                            <option>LURIGANCHO</option>
                                            <option>LURIN</option>
                                            <option>MAGDALENA DEL MAR</option>
                                            <option>PUEBLO LIBRE</option>
                                            <option>MIRAFLORES</option>
                                            <option>PACHACAMAC</option>
                                            <option>PUCUSANA</option>
                                            <option>PUENTE PIEDRA</option>
                                            <option>PUNTA HERMOSA</option>
                                            <option>PUNTA NEGRA</option>
                                            <option>RIMAC</option>
                                            <option>SAN BARTOLO</option>
                                            <option>SAN BORJA</option>
                                            <option>SAN ISIDRO</option>
                                            <option>SAN JUAN DE LURIGANCHO</option>
                                            <option>SAN JUAN DE MIRAFLORES</option>
                                            <option>SAN LUIS</option>
                                            <option>SAN MARTIN DE PORRES</option>
                                            <option>SAN MIGUEL</option>
                                            <option>SANTA ANITA</option>
                                            <option>SANTA MARIA DEL MAR</option>
                                            <option>SANTA ROSA</option>
                                            <option>SANTIAGO DE SURCO</option>
                                            <option>SURQUILLO</option>
                                            <option>VILLA EL SALVADOR</option>
                                            <option>VILLA MARIA DEL TRIUNFO</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mdl-card__actions p-30 text-right m-t-30">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-login" onclick="calcular()">Calcular Precio</button>
                        </div>
                        <div class="mdl-card__menu">
                            <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal" onclick="borrar()">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="ModalTour" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-0">
                            <img alt="" src="">
                        </div>
                        <div class="mdl-card__supporting-text">
                            <h2></h2>
                            <p></p>
                        </div> 
                        <div class="mdl-card__menu">                            
                            <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal"><i class="mdi mdi-close"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/dist/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>   
        <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>    
        <script src="<?php echo RUTA_PLUGINS?>scrollflow/js/eskju.jquery.scrollflow.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>flexSlider/jquery.flexslider.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>JiSlider/JiSlider.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/js/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            function openModalTour(e){
                var modal   = $('#ModalTour');
                var card    = e.closest('.mdl-card');
                var img     = card.find('.mdl-card__title').find('img');
                var title   = card.find('.mdl-card__title').find('p');
                var content = card.find('.mdl-card__supporting-text').find('p');
                modal.find('.mdl-card__title').find('img').attr({
                    "alt"   : img.attr('alt'),
                    "src"   : img.attr('src')
                });
                modal.find('.mdl-card__supporting-text').find('h2').text(title[0].innerText);
                modal.find('.mdl-card__supporting-text').find('p').text(content[0].innerText);
                modal.modal('toggle');
            }
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
