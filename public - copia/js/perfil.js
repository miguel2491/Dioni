$(document).ready(function() {
 
    var userx = $('#id_user').val();
    var rol = $('#rol').val();
    if(rol == 3){
        alumnoinfo(userx);
    }else if(rol == 2){
     
        maestroinfo(userx);
        }else{
            $("#div_carreras").append('<div class="container"><div class="col-lg-12"><p>Usted no tiene permisos</p></div></div>');
        }
});


function alumnoinfo(user){
     $.ajax({
        url: 'usuarios/getalumno/'+user, // checa esto para pedir info los ids
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            var s = "";
            console.log(resp.data);

            var nm = resp.data[0].username;
            s +=  '<div class="col-lg-12" style="padding:2%;" >'+
            '<div id="imgbase"> </div> <label id="lb3"  for=""> </label>'+
            '<hr>'+
            '<label id="lb1" for="">'+'Alumno'+'</label><hr><br>'+
            '<label id="lb2"  for="">'+nm+'</label><hr><br>'+
            
            "</div>";
            var idcarrera = resp.data[0].id_carrera;
            carrera(idcarrera);
            $("#perfil_div").append(s);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}
//falta el url de profesor
function maestroinfo(user){
    $.ajax({
        url: 'usuarios/getmaestro/'+user,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            var s = "";
            console.log(resp.data);
            s +=  '<div class="col-lg-12" style="padding:2%;'+
            '<hr>'+
            '<label id="lb1" for="">'+'Maestro '+ resp.data[0].username+' </label><hr><br>'+
            '<label id="lb2"  for="">'+ resp.data[0].email+'</label><hr><br>'+
            '<label id="lb3" for="">'+ resp.data[0].nombre+'</label><hr><br>'+

"</div>";
            $("#perfil_div").append(s);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}


function carrera(id){
    $.ajax({
        url: 'carreras/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            var simg = '<img src="img/fondos/principal/'+resp[0].icono+'" style="width:75px" />';
            console.log(resp); 
           
            $("#imgbase").append(simg);
            $("#lb3").append(''+resp[0].carrera);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}