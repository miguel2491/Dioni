$(document).ready(function() {
    
    var id_user = $("#id_user").val();
    var id_clase = $("#id_clase").val();
    getClase(id_clase);
    
});



function getClase(id){
    $.ajax({
        url: '/clases/datos/'+id,
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
          
        
            //      anexos formularios
            //      mainenlace
            //      actividad 
                var activity = '<textarea class="form-control inputs" rows="5">'+
                    resp[0].actividad
                +'</textarea> ';
                var link = resp[0].enlace;
                var strlink = '';
                if( link.includes("youtu")){
                    var ytlink = resp[0].enlace.replace("watch?v=", "embed/");
                    strlink = ''+
                        '<iframe  height="250"'+
                            'src="'+ytlink+'" frameborder="0" allowfullscreen width="100%" >'+
                        '</iframe> '+
                    +'<br>'+'<a href="'+resp[0].enlace+'">'+resp[0].enlace+'</a>';
                }else{
                    strlink ='Enlace de tarea :  <a href="'+resp[0].enlace+'">'+resp[0].enlace+'</a>';
                }

            $('#mainenlace').empty().append(strlink);    
            $('#actividad').empty().append(activity);
   

        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                //location.reload();
            }

        }
    });
}
