$(document).ready(function() {
    
    $('#title').append("Materias");
    var id_user = $("#id_user").val();
 
     profesor(id_user);
     //
});


function materias(id){
    $.ajax({
        url: '/profesor/profesorMaterias/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);     
            $('#title').empty();
            $('#title').append("Materias");                  
            $('#info').empty();
            resp.forEach(x => {
                $('#info').append('<a onclick="return clases('+x.id+')">'+x.nombre+'<a/><hr>');
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                console.log(textStatus);
            }

        }
    });
}



function profesor(id){    
    $.ajax({
        url: '/profesor/from_u/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            $('#id_maestro').val(resp[0].id);
           $("#profesor").append(resp[0].username);
           materias(resp[0].id)

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}


function clases(id){         
     var id_maestro = $('#id_maestro').val();
   //profesor/materia/clase/id_maestro/id
   $.ajax({
       url: '/profesor/materia/clase/'+id+'/'+id_maestro,
       type: 'GET',
       dataType: 'json',
       success: function(resp) {
           console.log(resp);
           $('#title').empty();
           $('#title').append("Clases");
           $('#info').empty();
           $('#action').empty();
           $('#action').append('<a onclick="return materias('+ $('#id_maestro').val()+')">Volver<a/>');
           if(resp.length == 0){
               $('#info').append('Esta materia no tiene clases agregadas, de click en CREAR CLASE para agregar contenido de clase');
           }else{
           resp.forEach(x => {
               $('#info').append(' <a onclick="return getClase('+x.id+')">Fecha : '+x.fecha+' / '+x.clase+'<br>'+
               '/ '+x.clase+'<a/><hr>');
           });
        }
       },
       error: function(jqXHR, textStatus, errorThrown) {
           var data = jqXHR.responseJSON;
           if (jqXHR.status == 401) {
               console.log(textStatus);
           }

       }
   });
   
}


function getClase(id){}
