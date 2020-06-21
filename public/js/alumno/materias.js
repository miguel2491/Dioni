$(document).ready(function() {
    
    var id_user = $("#id_user").val();
    var id_cuatri = $("#id_cuatri").val();
    cuatrimestre(id_cuatri);
     alumno(id_user);
     
});

function cleanData(){
    var id_user = $("#id_user").val();
    var id_cuatri = $("#id_cuatri").val();
    cuatrimestre(id_cuatri);
     alumno(id_user);
     materias(id_user,id_cuatri)
}


function getClases(id){


    var id_cuatri = $("#id_cuatri").val();
    //clases/materiaCuatri

    $.ajax({
        url: $('#clases_materiaCuatri').val()+'/'+id+'/'+id_cuatri,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);                  

           $('#div_materias').empty();
           if(resp.length > 0)
            {
                resp.forEach(el => {
                    $('#div_materias').append('<hr><a href="/alumno/clase/'+el.id+'">'+el.clase+'<br>'+el.fecha+'</a><hr>');
                   });
            }else{
                $('#div_materias').append('Esta clase no tiene anexos aun.<br>');
           
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

function cuatrimestre(id){
    $.ajax({
        url: $('#cuatrimestres_datos_u').val()+'/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
          
        var st = resp[0].lapso+'<br>'+resp[0].fechainicio+'<br>Materias';
                    //resp[0].carrera
            $('#title').empty();
            $('#title').append(st);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}


function addgetmateria(id){
    $.ajax({
        url: '/materias/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log("try add");
          
        var st = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'+            
        '<p><a onClick="return getClases('+resp[0].id+')">'+resp[0].nombre+'</a></p>'+
        '<hr>'+
        '</div>'+'';
                    //resp[0].carrera

           $('#div_materias').append(st);

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


function materias(iduser,idcuatri){
    $.ajax({
        url: '/cuatrimestres/materias/datos/'+idcuatri+'/'+iduser,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            $('#div_materias').empty();
            resp.forEach(x => {
               
                addgetmateria(x.id_materia);
               
            });
           

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
            
           $("#id_alumno").val(resp[0].id);
           var id_cuatri = $("#id_cuatri").val();
           materias(resp[0].id,id_cuatri);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}