$('#principal .owl-carousel').owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	autoplayTimeout : 3000
});
$('#servicios .owl-carousel').owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : false,
	autoplayTimeout : 3000
});
$('.clientes .owl-carousel').owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		},
		420: {
			items : 2
		},
		768: {
			items : 3
		},
		1200: {
			items : 4
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : false,
	autoplayTimeout : 3000
});

$(document).ready(function() {
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
	$('.navbar-nav').find('li').click(function(){
		$('.collapse').toggleClass('in');
		$('#nav-icon3').toggleClass('open');
	})
	resizeContent();
    $(window).resize(function() {
        resizeContent();
    });
});

var $win = $(window);
$win.scroll(function() {
	if ($win.scrollTop() > 55) {
		$("nav").addClass("navbarcolor");
		$(".cont-carousel.right").css("top","18%");
	} else {
		$("nav").removeClass("navbarcolor");
		$(".cont-carousel.right").css("top","28%");
	}
});

$('a[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : y
 	}, 'slow');
});

function resizeContent() {
    var top = $( window ).height();
	$("body").css('height', top);
}

// function MenuScrollPintado() {
// 	if ($("nav").hasClass("pintado")) {
// 		$("nav").removeClass("pintado");
// 		if ($win.scrollTop() == 0) {
// 			$("nav").addClass("navbarcolor");
// 		}
// 	} else {
// 		if ($win.scrollTop() == 0) {
// 			$("nav").removeClass("navbarcolor");
// 		}
// 		$("nav").addClass("pintado");
// 	}
// }

function abrirModal(dato) {
	modal('myModal');
}

function enviarEmail() {
	var nombres  = $('#nombre').val();
	var email    = $('#email').val();
	var telefono = $('#telefono').val();
	var mensaje  = $('#mensaje').val();

	if(nombres == '' || nombres == null) {
		msj('error','Ingrese su nombre completo');
		return;
	}
	if(email == '' || email == null || email == undefined) {
		msj('error','Ingrese su correo electr&oacute;nico');
		return;
	}
	if (validateEmail(email)) {
	} else {
		  msj('error','Este Email: '+email+' no es valido');
		  return;
	}
	if(telefono == '' || telefono == null) {
		msj('error','Ingrese su teléfono');
		return;
	}

	$.ajax({
		data  : { nombres : nombres,
				  email   : email,
				  telefono : telefono,
				  mensaje : mensaje},
		url   : 'Inicio/enviarEmail',
		type  : 'POST',
		dataType : 'json'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
        		$('#nombre').val();
		    	$('#email').val();
				$('#telefono').val();
				$('#mensaje').val();
        	}else {
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }

	});
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function solicitarReserva() {
	var nombre_completo = $('#nombre').val();
	var celular  		= $('#celular').val();
	var fecha_llegada	= $('#fecha').val();
	var hora 	 		= $('#hora').val();
	var vuelo 	 		= $('#vuelo').val();
	var servicio 		= $('#servicio').val();
	var personas		= $('#personas').val();
	var aerolinea		= $('#aerolinea').val();
	var correo			= $('#correo').val();
	var origen			= $('#origen').val();
	var destino			= $('#destino').val();
	var comentario      = $('#comentario').val();

	if(nombre_completo == null || nombre_completo == '') {
		return;
	}
	if(celular == null || celular == '') {
		return;
	}
	if(fecha_llegada == null || fecha_llegada == '') {
		return;
	}
	if(hora == null || hora == '') {
		return;
	}
	if(vuelo == null || vuelo == '') {
		return;
	}
	if(servicio == null || servicio == '') {
		return;
	}
	if(personas == null || personas == '') {
		return;
	}
	if(aerolinea == null || aerolinea == '') {
		return;
	}
	if(correo == null || correo == '') {
		return;
	}
	if (!validateEmail(correo)) {
		return;
	}
	if(origen == null || origen == '') {
		return;
	}
	if(destino == null || destino == '') {
		return;
	}
	$.ajax({
		data  : { nombre_completo : nombre_completo,
				  celular 	      : celular,
				  fecha_llegada   : fecha_llegada,
				  hora 			  : hora,
				  vuelo 		  : vuelo,
				  servicio 		  : servicio,
				  personas 		  : personas,
				  aerolinea 	  : aerolinea,
				  correo 	  	  : correo,
				  origen 	  	  : origen,
				  destino 	  	  : destino,
				  comentario 	  : comentario},
		url   : 'Reserva/solicitarEstimacion',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
        		limpiarCampos();
        	}else {
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
}

function soloLetras(e) {
    key 	   = e.keyCode || e.which;
    tecla 	   = String.fromCharCode(key).toLowerCase();
    letras     = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }
     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }

 function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta números
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function limpiar() {

}

function cambiarNro() {
	var data = $('#servicio').val();
	if(data == "Auto") {
		$('#personas').val("1 - 3");
		$( "#personas" ).prop( "disabled", true );
		setTimeout(function(){ 
			$( "#personas" ).parent().addClass('is-focused');
		 }, 500);
	}else if(data == "Minivan") {
		$('#personas').val("4 - 5");
		$( "#personas" ).prop( "disabled", true );
		setTimeout(function(){ 
			$( "#personas" ).parent().addClass('is-focused');
		 }, 500);
	}else if(data == "Van") {
		$('#personas').val("5 - 8");
		$( "#personas" ).prop( "disabled", true );
		setTimeout(function(){ 
			$( "#personas" ).parent().addClass('is-focused');
		 }, 500);
	}
}

/* SCRIPT DE CHAT FACEBOOK */
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id))
		return;
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function limpiarCampos(){
	$('#nombre').val("");
	$('#celular').val("");
	$('#fecha').val("");
	$('#hora').val("");
	$('#vuelo').val("");
	$('#servicio').val('0');
	$('.selectpicker').selectpicker('refresh');
	$('#personas').val("");
	$('#aerolinea').val("");
	$('#correo').val("");
	$('#origen').val("");
	$('#destino').val("");
	$('#comentario').val("");
}
