@extends('layouts.admin')
@section('main-title')
   MAESTRO
@endsection
@section('main-css')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
<style>
    .skin-3 .wrapper-content{
        padding:0px 5px;
    }
    .botons{
        background:#003c54;
        border-radius:5px;
        color:white;
        width:80%;
        margin-left:10%;
        padding:5px 5px 5px 5px;
        margin-bottom:5%;
    }
    a{
        color:#52566f;
    }
    .pregu{
        width: 90%;
        background: #003c54;
        color:white;
        text-transform: uppercase;
        text-align: center;
        font-size: 10px;
        height: 15px;
        padding-bottom: 20px;
        font-weight: bold;
    }
    .respu{
        width: 60%;
        background: #ff931e;
        color: white;
        text-transform: uppercase;
        height: 20px;
        border-radius: 20px;
        font-size: 10px;
        padding: 2px 0px 0px 15px;

    }
</style>
@endsection
@section('main-content')
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
<input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}" id="hdd_IdUsuario">
<input type="hidden" name="id_evaluacion" value="{{ !isset($id) ? 0 : $id }}" id="id_evaluacion">
<input type="hidden" name="id_profesor" value="{{ Auth::user()->id }}" id="hdd_IdProfesor">
<input type="hidden" id="url_listado" value="{{ url('alumnos/listado') }}">
<input type="hidden" id="url_preguntas" value="{{ url('evaluacion/con_pregunta') }}">
<input type="hidden" id="url_resp" value="{{ url('evaluacion/con_respuesta') }}">
<input type="hidden" id="url_evalua_profe" value="{{ url('evaluacion/profesor_ind') }}">
<input type="hidden" id="url_profesor_evaluaciones" value="{{ url('evaluacion/lista_profesor') }}">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div style="margin-left: 80%">
                <img src="img/fondos/login/unimovil.png" style="width:50px" />
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <p><b>CUESTIONARIOS / Evaluaciones</b></p>
            </div>
        </div>
        <input type="hidden" id="id_evaluacion" value="0">
        <div class="row" id="btn_add_eva" style="display: none" align="left">
            <a data-toggle="modal" data-target="#modal_add"><i class="fa fa-plus-circle"></i></a>
        </div>
        <div class="row" align="center" id="title_eva" style="display: none">
            <h2 id="name_evalua"></h2>
        </div>
        <div class="row" id="btn_add_preguntas" style="display: none" align="left">
            <a data-toggle="modal" data-target="#modal_add_pregunta"><i class="fa fa-plus-circle"></i></a>
        </div>
        <div id="div_evaluacion">

        </div>
        <div class="row" align="right">
            <a data-toggle="modal" data-target="#modal_add">Agregar Evaluacion<i class="fa fa-upload"></i></a>
        </div>
        <div id="evaluaciones"></div>
        <!--


        -->
    </div>
     <div class="footer" style="margin-bottom: -15%">
        <div>
             <a href="{{ URL::to('menu_profe') }}">
                    <img src="img/fondos/principal/regresar1.png" style="width:15px" />
                </a>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_add" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="descripcion-field">Nombre de Evaluación</label>
                            <input type="text" autofocus="true" id="Evaluacion" name="Evaluacion" class="form-control" value=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><li class="fa fa-times"></li> Cancelar</button>
                <button type="submit" class="btn btn-success" id="btn_eva"><li class="fa fa-check"></li> Aceptar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_add_pregunta" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="descripcion-field">Pregunta</label>
                            <input type="text" autofocus="true" id="Pregunta" name="Pregunta" class="form-control" value=""/>
                            <input type="hidden" id="id_pregunta" value="0">
                        </div>
                    </div>
                </div>
                <div class="row" id="div_res" style="display: none">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="descripcion-field">Respuesta</label>
                            <input type="text" autofocus="true" id="Respuesta" name="Respuesta" class="form-control" value=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btn_cancelar" data-dismiss="modal"><li class="fa fa-times"></li> Cancelar</button>
                <button type="submit" style="display: block" class="btn btn-success" id="btn_agregar_preg"><li class="fa fa-check"></li> Guardar Pregunta</button>
                <button type="submit" style="display: none" class="btn btn-xs btn-success" id="btn_agregar_respuesta"><li class="fa fa-check"></li> Guardar</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('main-scripts')
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/autonumeric/autoNumeric.js') }}"></script>
    <script src="{{ asset('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('js/maestro/evaluacionNueva.js') }}"></script>
@endsection
