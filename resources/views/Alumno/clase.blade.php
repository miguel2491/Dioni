@extends('layouts.admin')
@section('main-title')
   ALUMNO
@endsection
@section('main-css')
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
    a{
        color:white;
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
	<div class="row">
		<div class="col-lg-12" style="text-align:center">
            <p><b>CLASE 2</b></p>
            <span id="">10/04/2020</span>
		</div>
	</div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">VIDEO</label>
            <div class="col-sm-8">
            <iframe width="100%" height="250"
                src="https://www.youtube.com/embed/py96K-pT9_I">
            </iframe> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">ACTIVIDAD</label>
            <div class="col-sm-8">
                <textarea class="form-control inputs" rows="5"></textarea> 
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">ANEXOS</label>
            <div class="col-sm-8">
                <input type="text" class="form-control inputs" /> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">TAREA</label>
            <div class="col-sm-8">
                <select class="form-control select2 select inputs"></select> 
            </div>
        </div>
    </div>
    <div class="row" style="padding-bottom:50px">
        <div class="form-group">
            <label class="control-label col-sm-2">CUESTIONARIO</label>
            <div class="col-sm-8" style="margin-bottom:3%">
                <button class="btn btnVer" style="letter-spacing: 3px">CONTESTAR</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('main-scripts')
	<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
	<script src="{{ asset('js/plugins/toastr/toastr.min.js')}}"></script>
	<script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
	<script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
	<script src="{{ asset('js/plugins/autonumeric/autoNumeric.js') }}"></script>
	<script src="{{ asset('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
	<script src="{{ asset('js/plugins/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('js/maestro/maestro.js') }}"></script>
@endsection