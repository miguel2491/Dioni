$(document).ready(function() {
    var dataTable_datos;
    var id = 0;

    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'slideDown',
        positionClass: "toast-top-full-width",
        timeOut: 3000
    };

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });

    $.ajax({
        url: $("#url_list_cuatrimestre").val(),
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            var cuatrimestre = resp.data;
            var itemcuatrimestre = [];

            cuatrimestre.forEach(function(element) {
                itemcuatrimestre.push({
                    id: element.id,
                    text: element.lapso
                });
            });

            $('#cuatrimestre').select2({
                placeholder: {
                    id: 0,
                    text: 'Seleccione un cuatrimestre'
                },
                width: '100%',
                allowClear: true,
                data: itemcuatrimestre,
                //dropdownParent: $('#ModalSave')
            });

            $("#cuatrimestre").val(0).change();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                location.reload();
            }
        }
    });

    $.ajax({
        url: $("#url_list_carrera").val(),
        type: 'GET',
        dataType: 'json',
        success: function(resp) {
            var carrera = resp.data;
            var itemcarrera = [];

            carrera.forEach(function(element) {
                itemcarrera.push({
                    id: element.user_id,
                    text: element.carrera
                });
            });

            $('#carrera').select2({
                placeholder: {
                    id: 0,
                    text: 'Seleccione una carrera'
                },
                width: '100%',
                allowClear: true,
                data: itemcarrera,
                //dropdownParent: $('#ModalSave')
            });

            $("#carrera").val(0).change();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                location.reload();
            }

        }
    });

    $.ajax({
        url: $("#url_list_maestro").val(),
        type: 'GET',
        dataType: 'json',
        success: function(resp) { console.log(resp);
            var maestro = resp.data;
            var itemmaestro = [];

            maestro.forEach(function(element) {
                itemmaestro.push({
                    id: element.id,
                    text: element.nombre
                });

                console.log(element);
            });

            $('#maestro').select2({
                placeholder: {
                    id: 0,
                    text: 'Seleccione un Maestro'
                },
                width: '100%',
                allowClear: true,
                data: itemmaestro,
                //dropdownParent: $('#ModalSave')
            });

            $("#maestro").val(0).change();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var data = jqXHR.responseJSON;
            if (jqXHR.status == 401) {
                location.reload();
            }

        }
    });

    dataTable_datos =
        $("#table-datos").dataTable({
            "bDeferRender": true,
            "iDisplayLength": 10,
            "bProcessing": true,
            "sAjaxSource": $('#url_listado').val(),
            "fnServerData": function(sSource, aoData, fnCallback, oSettings) {
                oSettings.jqXHR = $.ajax({
                    "dataType": 'json',
                    "type": "GET",
                    "url": sSource,
                    "success": fnCallback,
                    "error": function(jqXHR, textStatus, errorThrown) {
                        var data = jqXHR.responseJSON;
                        /*
                        if (jqXHR.status == 401 || jqXHR.status == 500) {
                            location.reload();
                        }*/
                    }
                });
            },
            "bAutoWidth": false,
            //"bFilter": false,
            "aoColumns": [{
                "mData": "id"
            }, {
                "mData": "materia",
                "bSortable": true,
                "mRender": function(data, type, full) {
                    var materia = full.nombre;
                    return materia;
                }
            }, {
                "mData": "cuatrimestre",
                "bSortable": true,
                "mRender": function(data, type, full) {
                    var cuatri = full.lapso;
                    return cuatri;
                }
            },{
                "mData": "carrera",
                "bSortable": true,
                "mRender": function(data, type, full) {
                    var carrera = full.carrera;
                    return carrera;
                }
            }, {
                "mData": "Acciones",
                "bSortable": false,
                "mRender": function(data, type, full) {
                    var bttnDelete = '<button class="btn btn-danger btn-xs" id="bttn_modal_delete" data-id="' + full.id + '" data-target="#modal_delete"  data-toggle="modal" title="Eliminar"><i class="glyphicon glyphicon-trash"></i></button>';
                    var bttnUpdate = '<button class="btn btn-warning btn-xs" id="bttn_modal_update"  data-id="' + full.id + '"  data-target="#ModalSave" data-toggle="modal" title="Editar"><i class="glyphicon glyphicon-edit"></i></button> ';
                    return bttnUpdate + bttnDelete;
                }
            }, ],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $("td:eq(0), td:eq(2)", nRow).attr('align', 'center');

            },
            "aLengthMenu": [
                [5, 10, -1],
                [5, 10, "Todo"]
            ],
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Registros del _START_ al _END_  total: _TOTAL_ ",
                "sInfoEmpty": "Sin registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

    $('#ModalSave').on('shown.bs.modal', function() {
        $(this).find('[autofocus]').focus();
    });
    $("#ModalSave").on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        id = typeof button.data('id') != "undefined" ? button.data('id') : 0;
        if (id != 0) {
            $.ajax({
                url: $('#url_datosget').val() + '/' + id,
                type: 'GET',
                data: '',
                success: function(data) {
                    //var array = $.parseJSON(data);
                    var obj = data;
                    console.log(data);
                    $('#materia').val(obj[0].nombre);
                    $('#cuatrimestre').val(obj[0].id_cuatrimestre).change();;
                    $("#carrera").val(obj[0].id_carrera).change();
                    $("#maestro").val(obj[0].id_maestro).change();
                }

            });
        }

    });
    $("#modal_delete").on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        id = typeof button.data('id') != "undefined" ? button.data('id') : 0;
    });
    $('#ModalSave').on('show.bs.modal', function(e) {
        $('#materia').val("");
        $('#cuatrimestre').select2({dropdownParent: $(this).parent()}).select2('val', 0);
        $("#carrera").select2({dropdownParent: $(this).parent()}).select2('val', 0);
        $("#maestro").select2({dropdownParent: $(this).parent()}).select2('val', 0);
    });
    $('#saveform').click(function() {
        var msg = '';

        data_request = {
            
            materia: $('#materia').val(),
            cuatrimestre: $('#cuatrimestre option:selected').val()==undefined?'0':$('#cuatrimestre option:selected').val(),
            carrera: $('#carrera option:selected').val()==undefined?'0':$('#carrera option:selected').val(),
            maestro: $('#maestro option:selected').val()==undefined?'0':$('#maestro option:selected').val(),
        }
        var get_url = id == 0 ? $("#url_guardar").val() : $("#url_actualizar").val() + '/' + id;
        var type_method = id == 0 ? 'POST' : 'PUT';

        $.ajax({
            url: get_url,
            type: type_method,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            data: data_request,
            success: function(data) {
                if (data.status == 'fail') {
                    toastr.error(data.message);
                } else {
                    toastr.success(data.message);
                    dataTable_datos._fnAjaxUpdate();
                    $("#ModalSave").modal('hide');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                }
            },

            error: function(jqXHR, textStatus, errorThrown) {
                var data = JSON.parse(jqXHR.responseText);

                if (jqXHR.status == 400) {
                    toastr.error('', data.message);
                }

                if (jqXHR.status == 401) {
                    location.reload();
                }

                if (jqXHR.status == 422) {
                    $.each(data.errors, function(key, value) {
                        if (msg == '') {
                            msg = value[0] + '<br>';
                        } else {
                            msg += value[0] + '<br>';
                        }

                    });

                    toastr.error(msg);
                }
            }
        });
    });
    $('#btn_eliminar').click(function() {
        //var id = $('#delpoliza').val();

        $.ajax({
            url: $("#url_eliminar").val() + '/' + id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'fail') {
                    toastr.error(data.message);
                } else {
                    dataTable_datos._fnAjaxUpdate();
                }

                $("#modal_delete").modal('hide');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                var data = JSON.parse(jqXHR.responseText);
                if (jqXHR.status == 400) {
                    toastr.error('', data.message);
                }

                if (jqXHR.status == 401) {
                    location.reload();
                }
            }
        });
    });
});
