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
    '<input type="hidden" value="'+$('#idclase').val()+'" id="id_clase">'+
    '';
    
    $('#bodyModal').empty().append(st);
    
}

function materias(id){
    $.ajax({
        url: $('#url_profesor_materias').val() + '/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
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
        url: $('#url_profesor_from').val() + '/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
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
    url: $('#url_profesor_materias_clase').val() + '/' + id + '/' + id_maestro,
       type: 'GET',
       dataType: 'json',
       success: function(resp) {
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
        url: $('#url_clases_datos').val() + '/' + id ,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log('aqui');console.log(resp);
            var formulario = resp[0].id_evaluacion;
            var formtxt;
            if(formulario = null){
                formtxt= 'No hay evaluacion para esta clase';
            }else{
                formtxt="<br><button class='btn btn-xs btn-primary btnEva' onclick='ir_eva("+ resp[0].id_evaluacion+")'>Evaluacion asignada</button>";
            }
            
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
            '<div id="formularios">'+formtxt+'</div><br>'+
            '<a class="btn btn-default pull-right" id="btnAddForm" onclick="getEvaluaciones()">Agregar Evaluacion</a><br><hr>'+
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
function anexoDelete(id){
   

    $.ajax({
        url: $('#url_anexo_delete').val() + '/' + id ,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });

}
function getAnexos(id){
    $.ajax({
        url: $('#url_anexo_clase').val() + '/' + id ,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            if(resp.length > 0){
                resp.forEach(el => {
                    $('#anexos').append('<br><a href="'+el.link+'"><h3>'+el.link+'</h3></a> <a class="btn btn-sm pull-right btn-danger" onclick="return anexoDelete('+el.id+')" >Eliminar </a><br><hr>');
                });
            }else{
                $('#anexos').append('Esta clase no tiene anexos aun.<br>');
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

function getmateria(id){
    $.ajax({
        url: '/materias/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
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

$(".btnSaveAnexo").click(function() {
    var data = {
        id_clase : $("#id_clase").val(),
        link : $("#enlace").val(),
        tipo: $('#tipo option:selected').val()==undefined?'0':$('#tipo option:selected').val()
    };
    $.ajax({
        url: $('#url_anexo_guardar').val(),
        type: 'POST',
        data:data,
      
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function(resp) {
            console.log(resp);
            $("#exampleModal").modal('hide');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            
            if (jqXHR.status == 401) {
                //location.reload();
            }

            alert(textStatus);

        }
    });

});



$(".btnAceptarEva").click(function(){
    var ide = "";
    $("input:radio[name=evaluacion]:checked").each(function () {
        ide = $(this).val();
    });
    var data = {
        "id":$("#idclase").val(),
        "id_evaluacion":ide
    };
    console.log(data);
    $.ajax({
        url: $('#url_update_clase').val(),
        type: 'POST',
        data:data,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        success: function(resp) {
            console.log(resp);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
});



function getEvaluaciones()
{
    var idprofe = $("#id_user").val();
    $.ajax({
        url: $('#url_profesor_evaluaciones').val() + '/' + idprofe,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            $("#ListaEvaluacion").modal('show');
            if(resp.length > 0){
                var cd = "<div class='col-xs-12'>";
                for(var r = 0; r < resp.length;r++){
                    var id = resp[r].id_evaluacion;
                    var nombre = resp[r].nombre_evaluacion;

                   
                    

                    cd += "<div class='row'><div class='col-xs-12'><label>"+nombre+"</label></div>"+
                    " <div class='col-xs-12'> selecionar <input type='radio' class='minimal ev' name='evaluacion' id='ev" + id + "' value=" + id + " /> "+nombre+"<br><br></div>"
                    +"<div class='col-xs-12'> <button class='btn btn-xs btn-primary btnEva' onclick='ir_eva("+id+")'>Ver evaluacion</button><hr></div></div>";
                }
                cd = cd +"</div>";
                $('#evaluaciones').empty().append(cd);
            }else{
                $('#evaluaciones').append('Profesor sin evaluaciones.<br>');
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

function ir_eva(id)
{
    var data = {
        "id":$("#idclase").val(),
        "id_evaluacion":id
    };
    var url = $("#url_update_clase").val();
    $.ajax({
        url: url,
        type: 'POST',
        data:data,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        },
        success: function(resp) {
            var url2 = $("#url_view_clase").val();
            window.location = url2+'/'+ id;   
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
    console.log(id);
}
