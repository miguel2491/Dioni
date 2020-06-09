$(document).ready(function() {
    
    var id_user = $("#id_user").val();
 
    var id_cuatri = $("#id_cuatri").val();
     alumno(id_user);
     materias(id_user,id_cuatri)
});



function materias(iduser,idcuatri){
    $.ajax({
        url: '/cuatrimestres/materias/datos/'+idcuatri+'/'+iduser,
        type: 'GET',
        dataType: 'json',
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
}
function alumno(id){    
    $.ajax({
        url: '/alumnos/from_u/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            
           $("#id_alumno").val(resp[0].id)

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}