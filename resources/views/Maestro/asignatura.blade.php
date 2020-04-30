@extends('layouts.admin')
@section('main-title')
   Asignatura
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
    .botonsAsigna{
        background:#ff931e;
        text-transform:uppercase;
        border-radius:20px;
        color:white;
        width:80%;
        margin-left:10%;
        margin-bottom:15%;
    }
    .btnCrearClase{
        background:#003c54;
        text-transform:uppercase;
        border-radius:10px;
        color:white;
        width:40%;
        margin-left:60%;
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
            <p><b>ASIGNATURA:</b></p>
		</div>
        <div class="col-lg-12" style="text-align:center">
            <p>METODOLOGÍA DE LA INVESTIGACIÓN</p>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-12" style="margin-top:5%">
            <div align="center" class="botonsAsigna">
                <a href="{{ URL::to('pan_maestro/asignatura_clase')}}">
                    <label>
                        CLASE 1
                    </label>
                </a>
            </div>
            <div align="center" class="botonsAsigna" onclick="info_materia()">
                <label>
                    CLASE 2
                </label>    
            </div>
            <div align="center" class="botonsAsigna" onclick="info_materia()">
                <label>CLASE 3</label>
            </div>
        </div>    
    </div>
    <div class="row" style="margin-top:50%">
        <button class="btn btnCrearClase">CREAR CLASE</button>
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