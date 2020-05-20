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
                "mData": "cuatri",
                "bSortable": true,
                "mRender": function(data, type, full) {
                    var cuatri = full.lapso;
                    return cuatri;
                }
            }, {
                "mData": "Acciones",
                "bSortable": false,
                "mRender": function(data, type, full) {
                    var bttnDelete = '<button class="btn btn-danger btn-xs" id="bttn_modal_delete" data-id="' + full.id_cuatri + '" data-target="#modal_delete"  data-toggle="modal" title="Eliminar"><i class="glyphicon glyphicon-trash"></i></button>';
                    var bttnUpdate = '<button class="btn btn-warning btn-xs" id="bttn_modal_update"  data-id="' + full.id_cuatri + '"  data-target="#ModalSave" data-toggle="modal" title="Editar"><i class="glyphicon glyphicon-edit"></i></button> ';
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
                    $().val();
                    $('#saldo_total').val(obj.saldo_total);
                    $('#saldo_disponible').val(obj.saldo_disponible);
                    $("#saldo_gasto").val(obj.saldo_gasto);
                }

            });
        }

    });
    $("#modal_delete").on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        id = typeof button.data('id') != "undefined" ? button.data('id') : 0;
    });
    $('#ModalSave').on('show.bs.modal', function(e) {
        $('#saldo_total').val(0);
        $('#saldo_disponible').val(0);
        $("#saldo_gasto").val(0);
    });
    $('#saveform').click(function() {
        var msg = '';

        data_request = {
            id: 1,
            saldo_total: $('#saldo_total').val(),
            saldo_disponible: $('#saldo_disponible').val(),
            saldo_gasto: $('#saldo_gasto').val(),
        }
        console.log(data_request);
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

function currency(value, decimals, separators) {
    decimals = decimals >= 0 ? parseInt(decimals, 0) : 2;
    separators = separators || ['.', "'", ','];
    var number = (parseFloat(value) || 0).toFixed(decimals);
    if (number.length <= (4 + decimals))
        return number.replace('.', separators[separators.length - 1]);
    var parts = number.split(/[-.]/);
    value = parts[parts.length > 1 ? parts.length - 2 : 0];
    var result = value.substr(value.length - 3, 3) + (parts.length > 1 ?
        separators[separators.length - 1] + parts[parts.length - 1] : '');
    var start = value.length - 6;
    var idx = 0;
    while (start > -3) {
        result = (start > 0 ? value.substr(start, 3) : value.substr(0, 3 + start)) +
            separators[idx] + result;
        idx = (++idx) % 2;
        start -= 3;
    }
    return (parts.length == 3 ? '-' : '') + result;
}