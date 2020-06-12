$(document).ready(function() {
	 
    $('#fecha').datepicker({
        language: 'es',
        format: 'dd-mm-yyyy',
        autoclose: true,
        calendarWeeks: true,
        weekStart: 1,
    });
     $.ajax({
        url: $("#url_list_cuatrimestre").val(),
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            var cuatrimestre = resp.data;
            var itemcuatrimestre = [];

            cuatrimestre.forEach(function(element) {
                itemcuatrimestre.push({
                    id: element.id,
                    text: element.lapso
                });
            });

            $('#cuatrimestre').select2({
                placeholder: {
                    id: 0,
                    text: 'Seleccione un cuatrimestre'
                },
                width: '100%',
                allowClear: true,
                data: itemcuatrimestre,
                //dropdownParent: $('#ModalSave')
            });

            $("#cuatrimestre").val(0).change();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                location.reload();
            }
        }
    });

     $.ajax({
        url: $("#url_list_maestro").val(),
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            var maestro = resp.data;
            var itemmaestro = [];

            maestro.forEach(function(element) {
                itemmaestro.push({
                    id: element.id,
                    text: element.nombre
                });
            });

            $('#maestro').select2({
                placeholder: {
                    id: 0,
                    text: 'Seleccione un Maestro'
                },
                width: '100%',
                allowClear: true,
                data: itemmaestro,
                //dropdownParent: $('#ModalSave')
            });

            $("#maestro").val(0).change();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                location.reload();
            }

        }
    });

     $.ajax({
        url: $("#url_list_materia").val(),
        type: 'GET',
        dataType: 'json',
        success: function(resp) { 
            var materia = resp.data;
            var itemmateria = [];

            materia.forEach(function(element) {
                itemmateria.push({
                    id: element.id,
                    text: element.nombre
                });
            });

            $('#materia').select2({
                placeholder: {
                    id: 0,
                    text: 'Seleccione un Materia'
                },
                width: '100%',
                allowClear: true,
                data: itemmateria,
                //dropdownParent: $('#ModalSave')
            });

            $("#materia").val(0).change();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                location.reload();
            }

        }
    });
});

$('#btn_agregar').click(function() {
    var auxFechaN = $('#fecha').val();
	var data = {
		"clase":$("#clase").val(),
		"materia":$('#materia option:selected').val()==undefined?'0':$('#materia option:selected').val(),
        "cuatrimestre":$('#cuatrimestre option:selected').val()==undefined?'0':$('#cuatrimestre option:selected').val(),
        "maestro":$('#maestro option:selected').val()==undefined?'0':$('#maestro option:selected').val(),
        "fecha":auxFechaN,
        "enlace":$("#enlace").val(),
        "actividad":$("#actividad").val()
	};
    console.log(data);
	$.ajax({
        url: 'clase_guardar',
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        data: data,
        success: function(data) {
            console.log(data);
            if(data.status == "ok"){
                toastr.success(data.message);
            }else{
                toastr.error(data.message);  
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
