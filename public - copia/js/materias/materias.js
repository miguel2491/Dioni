$(document).ready(function() {
	//listaCuatrimestre();
});

function verCuatri(id){
	var idCarrera = $("#id_carrera").val();
	console.log(idCarrera+"***"+id);
	var get_url = $("#url_materias").val();	
	$.ajax({
            url: get_url+'/'+id+'/'+idCarrera,
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            success: function(data) {
            	//console.log(data);
            },
       		error: function (XMLHttpRequest, textStatus, errorThrown) {
            	alert("Status: " + textStatus);
            	alert("Error: " + errorThrown);
        	}
    	});
}

function cuatrimestre(){
		
		var id = $("#id_carrera").val();

        var get_url = $("#url_listado").val() + '/' + id;
        
        $.ajax({
            url: get_url,
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            success: function(data) {
            var s = '';
            for (var i = 0; i < data.length; i++) {
                var stats = data[i].status;
                s += '<tr><td>' + data[i].id + '</td><td>' + data[i].descripcion + '</td><td>' + fecha_hora + '</td><td>' + lugar + '</td><td>' + bttnPlay + ' ' + bttnVer + ' ' + bttnUpdate + ' ' + bttnDelete + ' ' + bttnNotificaciones + ' ' + bttnActa + '</td></tr>';
                
            }
            //$("#datosT").append(s);
            //$('#table-datos').DataTable({ order: [[0, "desc"]] });
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);
        }
    });
}