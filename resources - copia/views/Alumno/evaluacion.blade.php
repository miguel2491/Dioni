@extends('layouts.admin')
@section('main-title')
   ALUMNO
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
<input type="hidden" id="url_listado" value="{{ url('alumnos/listado') }}">
<input type="hidden" id="url_datosget" value="{{ url('alumnos/datos') }}">
<input type="hidden" id="url_guardar" value="{{ url('alumnos/guardar') }}">
<input type="hidden" id="url_actualizar" value="{{ url('alumnos/update') }}">
<input type="hidden" id="url_eliminar" value="{{ url('alumnos/delete') }}">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <p><b>CUESTIONARIO</b></p>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-5">
                    <span>1.-</span><button class="btn btn-lg pregu">PREGUNTA</button>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12 col-md-12">
                <div class="col-xs-1 col-md-1"></div>
                <div class="col-xs-1 col-md-1">
                    <input type="radio" checked="true" enabled class="form-control" />
                </div>
                <div class="col-xs-8 col-md-8" style="margin-top: 2%">
                    <label class="respu">RESPUESTA 1</label>
                    <i class="fa fa-check"></i>    
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-12">
                <div class="col-xs-1 col-md-1"></div>
                <div class="col-xs-1 col-md-1">
                    <input type="radio" class="form-control" />
                </div>
                <div class="col-xs-8 col-md-8" style="margin-top: 2%">
                    <label class="respu">RESPUESTA 2</label>
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-12">
                <div class="col-xs-1 col-md-1"></div>
                <div class="col-xs-1 col-md-1">
                    <input type="radio" class="form-control" />
                </div>
                <div class="col-xs-8 col-md-8" style="margin-top: 2%">
                    <label class="respu">RESPUESTA 3</label>
                    <i class="fa fa-close"></i>    
                </div>
            </div>
        </div>
        <div class="row" align="right" style="margin-top: 3%">
            <label>CALIFICACIÓN:<b>8</b></label>
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
	<script src="{{ asset('js/maestro/maestro.js') }}"></script>
@endsection