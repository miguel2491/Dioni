//cuestionario/consulta/
$(document).ready(function() {
    var id_aux = $("#id_evaluacion").val(); 
    console.log(id_aux);
    if(id_aux != 0){
        info_evaluacion_ind(id_aux);
    }else{
        info_evaluacion();
    }
    
});

function info_evaluacion_ind(eva)
{
    var id_profesor = $("#hdd_IdProfesor").val();
    var data = {
        "id_profesor":id_profesor,
        "id_evaluacion":eva
    };
    var url = $("#url_evalua_profe").val();
    $.ajax({
		url: url,
        type: 'POST',
        data:data,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        success: function(data) {
            var obj = data[0].id_evaluacion;
            if(obj != 0){
            	$("#id_evaluacion").val(obj);
            	$("#btn_add_eva").css('display','none');
            	$("#title_eva").css('display','block');
            	$("#name_evalua").text(data[0].nombre_evaluacion);
            	$("#btn_add_preguntas").css('display','block');
            	consultar_preguntas(obj);
            }else{
            	$("#id_evaluacion").val(0);
            	$("#id_evaluacion").val(0);
            	$("#btn_add_eva").css('display','block');
            	$("#title_eva").css('display','none');
            	$("#name_evalua").text("");
            	$("#btn_add_preguntas").css('display','none');
            }
        }
    });    
}

function info_evaluacion()
{
	var id_profesor = $("#hdd_IdProfesor").val();
	$.ajax({
		url: 'evaluacion/profesor/' + id_profesor,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
        	var obj = data.id_evaluacion;
            if(obj != 0){
            	$("#id_evaluacion").val(obj);
            	$("#btn_add_eva").css('display','none');
            	$("#title_eva").css('display','block');
            	$("#name_evalua").text(data.titulo);
            	$("#btn_add_preguntas").css('display','block');
            	consultar_preguntas(obj);
            }else{
            	$("#id_evaluacion").val(0);
            	$("#id_evaluacion").val(0);
            	$("#btn_add_eva").css('display','block');
            	$("#title_eva").css('display','none');
            	$("#name_evalua").text("");
            	$("#btn_add_preguntas").css('display','none');
            }
        }
    });
}

function consultar_preguntas(ide)
{
    var url = $("#url_preguntas").val();
    $.ajax({
		url: url +'/' + ide,
        type: 'GET',
        dataType: 'json',
        success: function(data) {console.log(data);
            var c = "";
            for(var x = 0; x < data.length; x++){
            	var i = x+1;
            	var pregunta = data[x].nombre_pregunta;
            	var id_preg = data[x].id_preguntas;
            	c += "<div class='row' id='eva_"+id_preg+"'><div class='form-group><div class='col-sm-5'>"+
	            "<span>"+i+".-</span><button class='btn btn-lg pregu'>"+pregunta+"</button>"+
                "</div></div></div>";
                cons_res(id_preg);
            }
            $("#div_evaluacion").append(c);
            
        }
    });	
}

function cons_res(idp)
{
    var url = $("#url_resp").val();
	$.ajax({
		url: url+'/' + idp,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var c = "";
            for(var x = 0; x < data.length; x++){
            	var respuesta = data[x].respuesta;
            	c += '<div class="row">'+
            			'<div class="form-group">'+
                			'<div class="col-xs-1 col-md-1"></div>'+
                				'<div class="col-xs-1 col-md-1">'+
                    				'<input type="radio" class="form-control" /></div>'+
                					'<div class="col-xs-8 col-md-8" style="margin-top: 2%">'+
                    					'<label class="respu">'+respuesta+'</label>'+
                					'</div></div></div>';
            }
            $("#eva_"+idp).append(c);
            
        }
    });
}
$('#btn_eva').click(function() {
    var data = {
        "nombre_e":$("#Evaluacion").val(),
        "id_profesor":$("#hdd_IdProfesor").val()
    };
    $.ajax({
        url: $('#url_evalguardar').val(),
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        data: data,
        success: function(data) {
            if(data.status == "ok"){
                location.reload();
                toastr.success(data.message);
            }else{
                toastr.error(data.message);  
                $("#modal_add").modal('hide');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = JSON.parse(jqXHR.responseText);
            if (jqXHR.status == 400) {
                toastr.error('', data.message);
            }
            if (jqXHR.status == 401) {
                location.reload();
            }
            if (jqXHR.status == 422) {
                $.each(data.errors, function(key, value) {
                    if (msg == '') {
                        msg = value[0] + '<br>';
                    } else {
                        msg += value[0] + '<br>';
                    }
                });
                toastr.error(msg);
            }
        }
    });
});
$('#btn_agregar_preg').click(function() {
	var data = {
		"id_evaluacion":$("#id_evaluacion").val(),
		"nombre_pregunta":$("#Pregunta").val()
	};
	$.ajax({
        url: $('#url_preguntaguardar').val(),
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        data: data,
        success: function(data) {
            if(data.status == "ok"){
                $("#div_res").css('display','block');
                $("#btn_agregar_preg").css('display','none');
                $("#btn_agregar_respuesta").css('display','block');
                $("#Pregunta").attr('disabled',true);
                $("#id_pregunta").val(data.id);
                toastr.success(data.message);
            }else{
                $("#div_res").css('display','none');
                toastr.error(data.message);  
                $("#modal_add_pregunta").modal('hide');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = JSON.parse(jqXHR.responseText);
            if (jqXHR.status == 400) {
                toastr.error('', data.message);
            }
            if (jqXHR.status == 401) {
                location.reload();
            }
            if (jqXHR.status == 422) {
                $.each(data.errors, function(key, value) {
                    if (msg == '') {
                        msg = value[0] + '<br>';
                    } else {
                        msg += value[0] + '<br>';
                    }
                });
                toastr.error(msg);
            }
        }
    });
});

$("#btn_agregar_respuesta").click(function() {
	var data = {
        "id_pregunta":$("#id_pregunta").val(),
        "respuesta":$("#Respuesta").val()
    };
    $.ajax({
        url: $('#url_respuesta_guardar').val(),
        
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        data: data,
        success: function(data) {
            if(data.status == "ok"){
                $("#Respuesta").val("");
                toastr.success(data.message);
            }else{
                toastr.error(data.message);
                $("#modal_add").modal('hide');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = JSON.parse(jqXHR.responseText);
            if (jqXHR.status == 400) {
                toastr.error('', data.message);
            }
            if (jqXHR.status == 401) {
                location.reload();
            }
            if (jqXHR.status == 422) {
                $.each(data.errors, function(key, value) {
                    if (msg == '') {
                        msg = value[0] + '<br>';
                    } else {
                        msg += value[0] + '<br>';
                    }
                });
                toastr.error(msg);
            }
        }
    });
});
$("#btn_cancelar").click(function() {
    location.reload();
});

function info_materia(){
    window.location="{{ URL::to('pan_maestro/asignatura')}}";
}