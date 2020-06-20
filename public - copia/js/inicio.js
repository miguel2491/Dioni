$(document).ready(function() {
    console.log("Inicio");

});
   
function materias(){
    
    $.ajax({
        url: '/materias/listar',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}