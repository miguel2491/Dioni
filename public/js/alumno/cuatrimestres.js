//cuestionario/consulta/
$(document).ready(function() {
    
    var id_user = $("#id_user").val();
    alumno(id_user);
    var id_carrera = $("#id_carrera").val();
    carrera(id_carrera);
    
});

function carrera(id){
    $.ajax({
        url: '/carreras/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            var simg = '<img src="/img/fondos/principal/'+resp[0].icono+'" style="width:75px" />';
            
           
            $("#imgbase").append(simg);
            $("#lbtitlecarrera").append(''+resp[0].carrera);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}

function alumno(id){    
    $.ajax({
        url: '/alumnos/from_u/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            
           $("#id_alumno").val(resp[0].id)
           cuatrimestres( resp[0].id);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}

function cuatrimestres(id){
    $.ajax({
    url: '/cuatrimestres/alumno/'+id,
    type: 'GET',
    dataType: 'json',
    success: function(resp) {
        console.log(resp);


         for(var x = 0; x < resp.length; x++){

            cuatrimestresInfo(resp[x].id_cuatrimestre);

         }       
      
    },
    error: function(jqXHR, textStatus, errorThrown) {
        var data = jqXHR.responseJSON;
        if (jqXHR.status == 401) {
            //location.reload();
        }

    }
});
}



function cuatrimestresInfo(id){
    $.ajax({
        url: '/cuatrimestres/datos_u/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
                var s = 
                '<hr>'+
                '<label for="">'+resp[0].lapso+'</label>'+ '<br>'+
                '<label for="">'+resp[0].fechainicio+'</label>'+ '<br>'+
                '<a href="/cuatrimestres/materias/'+resp[0].id+'">Acceder a cuatrimestre</a>'+ '<br>'+
                '<hr>'+
                '<br>'
                 +''
                        ;
              $('#div_cuatrimestres').append(s);     
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }
    
        }
    });
}