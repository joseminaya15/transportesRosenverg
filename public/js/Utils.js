function log(msj) {
	console.log(msj);
}

function tocar(event){
	$(event).css("cursor", "move");
	
	$(event).mouseup(function() {
		$(event).css("cursor", "pointer");
	});
}

var CONFIG = (function() {
	var private = {
		'ANP' : 'Acci&oacute;n No permitida',
		'MSJ_ERR' : 'Comun&iacute;quese con alguna persona a cargo :(',
		'EST_INACTIVO' : 0,
		'CABE_ERR'   : 'Error',
		'EST_LLAMAR' : 'SU_TURNO',
		'EST_PERDID' : 'PERDIO_TURNO',
		'EST_ENTREV' : 'EN_ENTREVISTA',
		'TIPOS'      : 'image/*,video/*'
	};
	return {
		get : function(name) {
			return private[name];
		}
	};
})();

function modal(idModal) {
	$('#'+idModal).modal('toggle');
}

function abrirCerrarModal(idModal) {
	$('#'+idModal).modal('toggle');
}

function msj(tipo, msj, cabecera) {
	if (tipo == 'error') {
		toastr.error(msj, cabecera, {
			positionClass: "toast-bottom-center",
			showDuration: 500,
		    hideDuration: 500,
			timeOut: 2500,
			showEasing: "linear",
			hideEasing: "linear",
			showMethod: "slideDown",
			hideMethod: "slideUp"
		});
	} else if (tipo == 'warning') {
		toastr.warning(msj, cabecera, {
			positionClass: "toast-bottom-center",
			showDuration: 500,
		    hideDuration: 500,
			timeOut: 2500,
			showEasing: "linear",
			hideEasing: "linear",
			showMethod: "slideDown",
			hideMethod: "slideUp"
		});
	} else {
		toastr.success(msj, cabecera, {timeOut: 4000});
	}
}

function mostrarNotificacion(tipo, msj, cabecera) {
	if (tipo == 'error') {
		toastr.error(msj, cabecera, {
			positionClass: "toast-bottom-center",
			showDuration: 500,
		    hideDuration: 500,
			timeOut: 2500,
			showEasing: "linear",
			hideEasing: "linear",
			showMethod: "slideDown",
			hideMethod: "slideUp"
		});
	} else if (tipo == 'warning') {
		toastr.warning(msj, cabecera, {
			positionClass: "toast-bottom-center",
			showDuration: 500,
		    hideDuration: 500,
			timeOut: 2500,
			showEasing: "linear",
			hideEasing: "linear",
			showMethod: "slideDown",
			hideMethod: "slideUp"
		});
	} else {
		toastr.success(msj, cabecera, {
			positionClass: "toast-bottom-center",
			showDuration: 500,
		    hideDuration: 500,
			timeOut: 2500,
			showEasing: "linear",
			hideEasing: "linear",
			showMethod: "slideDown",
			hideMethod: "slideUp"
		});
	}
}
function cerrarSesion() {
	$('#formLogout').submit();
	localStorage.clear();
}
function checkClaveActual(clave) {
	var result = 1;
	$.ajax({
		data : { clave : clave },
		url : "checkClaveNow",
		async : false,
		type : 'POST'
	}).done(function(data) {
		data = JSON.parse(data);
		result = data.resultado;
	});
	return result;
}
function existCampoById(campo, valor, tbl) {
	$.ajax({
		type : "POST",
		'url' : 'exiCampoById',
		data : {
			'p_campo' : campo,
			'p_valor' : valor,
			'p_tbl' : tbl
		}
	}).done(function(data) {
		return data;
	});
}

function setCombo(idNameCombo, valores, _default, selected, value_0 = 1) {
	if(value_0 != 1) {
		value_0 = 0;
	} else {
		value_0 = "";
	}
	$('#' + idNameCombo).find('option').remove().end().append(
	    '<option value="'+value_0+'">Selec. ' + _default + '</option>' + valores);

	if(selected != true) {
		$('select[name=' + idNameCombo + ']').val(value_0);
	} 
	$('#' + idNameCombo).selectpicker('refresh');

}

function setCombo2(idNameCombo, valores) {
	$('#' + idNameCombo).find('option').remove().end().append(valores);
	$('select[name=' + idNameCombo + ']').val("");
	$('#' + idNameCombo).selectpicker('refresh');
}

function setValueCombo(idNameCombo, valorSeteado) {
	$('select[name=' + idNameCombo + ']').val(valorSeteado);
	$('#' + idNameCombo).selectpicker('refresh');
}

function setComboFull(idNameCombo, valores, _default) {
	$('#'+idNameCombo).find('option').remove().end().append('<option value="">Selec. '+_default+'</option>'+valores);
	$('#'+idNameCombo).mobileSelect('refresh');
}

function setComboValorFull(idNameCombo, valor) {
	$('#'+idNameCombo).val(valor);
	$('#'+idNameCombo).mobileSelect('refresh');
}

function getComboVal(idCombo) {
	return $('#'+idCombo+' option:selected').val();
}

function isDate(txtDate) {
	var currVal = txtDate;
	if (currVal == '') {
		return false;
	}
	var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
	var dtArray = currVal.match(rxDatePattern); // is format OK?

	if (dtArray == null) {
		return false;
	}
	dtDay = dtArray[1];
	dtMonth = dtArray[3];
	dtYear = dtArray[5];

	if (dtMonth < 1 || dtMonth > 12)
		return false;
	else if (dtDay < 1 || dtDay > 31)
		return false;
	else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11)
			&& dtDay == 31)
		return false;
	else if (dtMonth == 2) {
		var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
		if (dtDay > 29 || (dtDay == 29 && !isleap))
			return false;
	}
	return true;
}

(function($) {
	$.fn.clickToggle = function(func1, func2) {
		var funcs = [ func1, func2 ];
		this.data('toggleclicked', 0);
		this.click(function() {
			var data = $(this).data();
			var tc = data.toggleclicked;
			$.proxy(funcs[tc], this)();
			data.toggleclicked = (tc + 1) % 2;
		});
		return this;
	};
}(jQuery));


function successValidConfig(idTabla, indexRow, indexCampo, pk, nuevoValor, msj, clase, idGrupo, idNota) {
	$('#' + idTabla).bootstrapTable(
			'updateCell',
			{
				rowIndex : indexRow,
				fieldName : indexCampo,
				fieldValue : '<span class="' + clase
						+ ' editable editable-click" data-pk="' + pk + '" data-grupo="'+idGrupo+'" data-id_nota="'+idNota+'">'
						+ nuevoValor + '</span>'
			});
}

function successValid(idTabla, indexRow, indexCampo, pk, nuevoValor, msj, clase) {
	$('#' + idTabla).bootstrapTable(
			'updateCell',
			{
				rowIndex : indexRow,
				fieldName : indexCampo,
				fieldValue : '<span class="' + clase
						+ ' editable editable-click" data-pk="' + pk + '">'
						+ nuevoValor + '</span>'
			});
}

function setearInput(idInput, val, previo, disabled, clase) {
	if(!val) {
		val = null;
	}
	if(!previo) {
		previo = null;
	}
	if(!disabled) {
		disabled = null;
	}
	if(!clase) {
		clase = 'divInput';
	}
	$("#"+idInput).val(val);
	$("#"+idInput).parent().removeClass("is-invalid");
	if(val != null && val != "") {
		$("#"+idInput).parent().addClass("is-dirty");
	} else {
		$("#"+idInput).parent().removeClass("is-dirty");
	}

	var span  = $('#'+idInput).parent().find('span');
	if(span.data('limit')){
		var limit = '0/'+span.data('limit');
		span.html(limit);
	}
	if(previo != null) {
		$("#"+idInput).attr("val-previo", previo);
	}
	if(disabled != null) {
		$('#'+idInput).attr("disabled", true);
		$("#"+idInput).css('cursor', 'not-allowed');
	} else {
		$('#'+idInput).attr("disabled", false);
		$("#"+idInput).css('cursor', '');
		$('.'+clase).removeClass('is-disabled');
	}
}

function setearCombo(idCombo, val, previo, disabled){
	if(!previo){
		previo = null;
	}
	if(!disabled){
		disabled = null;
	}
	if(previo != null){
		$("#"+idCombo).attr("val-previo", previo);
	}
	if(disabled != null){
		disableEnableCombo(idCombo, true);
	} else if (disabled == null){
		disableEnableCombo(idCombo, false);
	}
	$("#"+idCombo).parent().parent().parent().removeClass("is-invalid");
	$("#"+idCombo).val(val);
	$("#"+idCombo).selectpicker('render');
}
function readCookie(name) {
    var nameEQ = escape(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
}
function updateMdl(){
	componentHandler.upgradeAllRegistered();
}
function removeSessionStorage() {
	for(var i = 0; i < arguments.length; i++) {
		sessionStorage.removeItem(arguments[i]);
	}
}
var date_regex = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
function get_elapsed_time_string(total_seconds) {
	  function pretty_time_string(num) {
	    return ( num < 10 ? "0" : "" ) + num;
	  }
	  var hours = Math.floor(total_seconds / 3600);
	  total_seconds = total_seconds % 3600;

	  var minutes = Math.floor(total_seconds / 60);
	  total_seconds = total_seconds % 60;

	  var seconds = Math.floor(total_seconds);

	  hours = pretty_time_string(hours);
	  minutes = pretty_time_string(minutes);
	  seconds = pretty_time_string(seconds);

	  var currentTimeString = hours + ":" + minutes + ":" + seconds;

	  return currentTimeString;
	}

function convertirFormatoFecha(txtDate, flg) {
	if(flg != undefined) {
		var fecha = txtDate.split("-");
		return (fecha[2]+"/"+fecha[1]+"/"+fecha[0]);
	} else {
		var fecha = txtDate.split("/");
	    return (fecha[2]+"-"+fecha[1]+"-"+fecha[0]);
	}
}
function convertirFormatoHora(txtHora){
	var hora = txtHora.length == 7 ? ("0"+txtHora) : txtHora;
	hora = hora.replace(' ', ':');
	hora = hora.split(':');
	var h = parseInt(hora[0]);
	h = hora[2] == 'pm' ?h+12 : h;
	if(hora[2] == 'pm' && hora[0]=='12'){
		h = h-12;
	}else if(hora[2] == 'am' && hora[0]=='12'){
		h = h+12;
	}
	return h+":"+hora[1]+":00"; 
}
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
$(".numeros").keypress(function (key) {
	if (key.charCode < 48 || key.charCode > 57)
	    return false;
});
function removeObjectFromArray(arrayData,objRemove){
	for(var i = 0; i < arrayData.length; i++){
		if(arrayData[i] == objRemove){
			arrayData.splice(i, 1);
			break;
		}
	}
	return arrayData;
}
function fijarFechaInicioInFechaFinal(element, idFechaFinal, tipo){
	var idFecha = $(element).attr("id");
	var fechaValor = $('#'+idFecha).val();
	var d = new Date(fechaValor.split("/").reverse().join("-")+' 00:00:00');
	var hoy = new Date();
	$('#'+idFechaFinal+'ForCalendar').siblings('button').removeAttr('disabled');
	$('#'+idFechaFinal).removeAttr('disabled');
	$('#'+idFechaFinal).parent().removeClass('is-disabled');
	if(tipo == undefined){
		initButtonCalendarDaysRangeDate2(idFechaFinal, d, hoy);
	}else if(tipo == 1){
		initButtonCalendarDaysMinToday(idFechaFinal, d);
	}
	componentHandler.upgradeAllRegistered();
}
function fijarFechaMaxToday(element, idFechaFinal, divFecha) {
	var idFecha = $(element).attr("id");
	var fechaValor = $('#'+idFecha).val();
	var d = new Date(fechaValor.split("/").reverse().join("-")+' 00:00:00');
	$('#'+divFecha).html('<div class="mdl-icon mdl-icon__button">'+
												'<button class="mdl-button mdl-js-button mdl-button--icon">'+
													'<i class="mdi mdi-today"></i>'+
												'</button>'+
											'</div>'+
											'<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">'+
												'<input class="mdl-textfield__input" placeholder="dd/mm/aaaa" type="text" id="'+idFechaFinal+'" name="'+idFechaFinal+'" maxlength="10">'+
												'<label class="mdl-textfield__label" for="'+idFechaFinal+'">Fecha de descuento</label>'+
											'</div>');
	componentHandler.upgradeAllRegistered();
	initButtonCalendarDaysMaxToday(idFechaFinal,undefined, d);
}
function array_column(arry, column, indice) {
    var result;
    if(typeof indice != "undefined") {
        result = {};
        for(key in arry)
            result[arry[key][indice]] = arry[key][column];
    }else {
        result = [];
        for(key in arry) {
        	result.push( arry[key][column] );
        }
    }
    return result;
}
