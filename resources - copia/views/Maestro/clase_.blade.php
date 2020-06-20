@extends('layouts.admin')
@section('main-title')
   CLASES
@endsection
@section('main-css')
<link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{asset('css/plugins/datetimepicker/datetimepicker.min.css')}}" rel="stylesheet">
<style>
    .skin-3 .wrapper-content{
        padding:0px 5px;
    }
    .nopadding{
        padding-left: 0px !important;
        padding-right: 0px !important;
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
    .inputs{
        background:#ff931e;
        border-color:#ff931e;
        border-radius:5px;
        color:white;
    }
    .btnVer{
        width:100%;
        background:#ff931e;
        color:white;
        font-weight:bold;
    }
</style>
@endsection
@section('main-content')
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
<input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}" id="hdd_IdUsuario">
<input type="hidden" id="url_list_cuatrimestre" value="{{ url('cuatrimestres/lista') }}">
<input type="hidden" id="url_list_maestro" value="{{ url('profesor/lista') }}">
<input type="hidden" id="url_list_materia" value="{{ url('materias/listar') }}">


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <h1>Agregar Clases</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Clase</label>
                <input type="text" autofocus="true" id="clase" name="clase" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Materia</label>
                <select name="materia" id="materia" class="form-control"></select>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Cuatrimestre</label>
                <select name="cuatrimestre" id="cuatrimestre" class="form-control"></select>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Maestro</label>
                <select name="maestro" id="maestro" class="form-control"></select>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Fecha</label>
                <input type="text" id="fecha" name="fecha" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Enlace</label>
                <input type="text" id="enlace" name="enlace" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="descripcion-field">Actividad</label>
                <input type="text" id="actividad" name="actividad" class="form-control" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <button type="button" class="btn btn-default" id="btn_cancelar" data-dismiss="modal"><li class="fa fa-times"></li> Cancelar</button>
        </div>
        <div class="col-xs-6 col-md-6">
            <button type="button" class="btn btn-success" id="btn_agregar"><li class="fa fa-check"></li> Guardar</button>
        </div>
    </div>
</div>
@endsection
@section('main-scripts')
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/plugins/datapicker/locales/bootstrap-datepicker.es.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/moment/moment-with-locales.js') }}"></script>
    <script src="{{ asset('js/plugins/datetimepicker/datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/maestro/clases.js') }}"></script>
@endsection
