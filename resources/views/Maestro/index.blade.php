@extends('layouts.admin')
@section('main-title')
   MAESTRO
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
            <p><b>PROFERSOR(A):</b></p>
            <span id="">JUAN PEREZ</span>
		</div>
	</div>
    <div class="row">
		<div class="col-lg-12">
            <div align="center">
                <img src="img/fondos/maestro/profe.png" style="width:75px" />
            </div>
            <div align="center" style="margin-top:3%">
                <b>ASIGNATURAS:</b>
            </div>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-12" style="margin-top:5%">
            <div align="center" class="botons">
            <a href="{{ URL::to('pan_maestro/asignatura')}}">
                <label>
                    <i class="fa fa-pencil"></i>
                        INTRODUCCION AL DERECHO
                </label>
            </a>    
            </div>
            <div align="center" class="botons" onclick="info_materia()">
                <label>
                    <i class="fa fa-pencil"></i>
                        HISTORIA DEL DERECHO
                </label>    
            </div>
            <div align="center" class="botons" onclick="info_materia()">
                <label><i class="fa fa-pencil"></i> METODOLOGÍA DE LA INVESTIGACIÓN</label>
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