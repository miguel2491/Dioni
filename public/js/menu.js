$(document).ready(function() {
    //materias();
});
   
function materias(){
    console.log("HOLA");
    $.ajax({
        url: 'carreras/listar',
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            var s = "";
            console.log(resp.data.length);
            for(var x = 0; x < resp.data.length; x++){
                var id = resp.data[x].user_id;
                var carrera = resp.data[x].carrera;
                var icono = resp.data[x].icono;
                s += "<div class='col-xs-6 col-md-6' style='padding:10px'>"+
                        "<a href='{{ URL::to(materia/"+id+") }}'>"+
                            "<div align='center'>"+
                                "<img src='img/fondos/principal/"+icono+"' style='width:75px' /><br>"+
                                "<label class='titulos_menu' style='text-transform:uppercase'>"+carrera+"</label>"+
                            "</div>"+
                        "</a>"+
                    "</div>";
            }
            $("#div_carreras").append(s);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}