$(document).ready(function() {
    
    $('#title').append("Materias");
    var id_user = $("#id_user").val();
 
     profesor(id_user);
     //
});


function modalAnexo(){
    $('#titleModal').empty().append('Agregar Anexo');
    var st = ''+
    '<label for="">Aqui deje su link</label>'+
    '<input type="text" id="enlace" class="form-control"><hr>'+
    
    '<select name="tipo" id="tipo" class="form-control">'+
        '<option value="Url">Url</option>'+
        '<option value="Pdf">PDF</option>'+
        '<option value="youtube">Video de youtube</option>'+
    '</select>'+
    '<input type="hidden" value="'+$('#idclase').val()+'" id="id_clase ">'+
    '';
    
    $('#bodyModal').empty().append(st);
    
}

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


function getClase(id){
    //clases/datos/ getAnexos(id);
    
    $.ajax({
        url: '/clases/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);     
            $('#idclase').val(resp[0].id);
            $('#title').empty();
            $('#title').append(resp[0].clase);                  
            $('#info').empty();
            getAnexos(id);
            //    var materia = getmateria(resp[0].id_materia);
            //    var cuatrimeste = getcuatrimestre(resp[0].id_cuatrimestre);
            var st = 
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'+
            '<p>Clase: '+resp[0].clase+'</p>'+
            '<p>Actividad: '+resp[0].actividad+'</p>'+
            '<p>enlace:  <a href="'+resp[0].enlace+'">'+resp[0].enlace+'</a></p>'+
            '<p>'+resp[0].fecha+'</p>'+
        '</div>'+
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'+            
            '<hr>'+
        '</div>'+
    
        '<hr>'+
    
        '<div class="col-lg-12">'+
            'Anexos'+
            '<div id="anexos"></div>'+
            '<a class="btn btn-default pull-right" onclick="return modalAnexo()" data-toggle="modal" data-target="#exampleModal" >Agregar Anexo</a><br>'+
        '<hr>'+
        '</div>'+
        
        '<div class="col-lg-12">'+
            'Formularios'+
            '<div id="formularios"></div>'+
            '<a class="btn btn-default pull-right" >Agregar Formulario</a><br>'+
        '</div>';

            
           
            $('#info').append(st);
            
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                console.log(textStatus);
            }

        }
    });
}

function getAnexos(id){
    
    
    
    $.ajax({
        url: '/anexo/clase/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);

            if(resp.length > 0){
                resp.forEach(el => {
                    $('#anexos').append('<a href="'+el.link+'">'+el.link+'</a><br><hr>');
                });
            }else{console.log('no anexos');
            $('#anexos').append('Esta clase no tiene anexos aun.<br>');
            }
            //$("#anexos").append(resp[0].username);
 
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}


function getmateria(id){
    $.ajax({
        url: '/materias/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
           return resp[0].carrera

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}
function getcuatrimestre(id){
    
    $.ajax({
        url: '/cuatrimestres/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            return resp.lapso

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}