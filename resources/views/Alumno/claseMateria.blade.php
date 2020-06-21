@extends('layouts.admin')
@section('main-title')
   CLASES
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
<input type="hidden" id="id_clase" value="{{ !isset($id_clase) ? 0 : $id_clase }}">
<input type="hidden" id="url_anexo_clase" value="{{ url('anexo/clase') }}">
<input type="hidden" id="url_evalguardar" value="{{ url('evaluacion/guardar') }}">
<input type="hidden" id="url_preguntaguardar" value="{{ url('pregunta/guardar') }}">
<input type="hidden" id="url_respuesta_guardar" value="{{ url('respuesta/guardar') }}">
<input type="hidden" id="url_evaluacion" value="{{ url('clase/update_view') }}">




<input type="hidden" id="clases_materiaCuatri" value="{{ url('clases/materiaCuatri') }}">
<input type="hidden" id="cuatrimestres_datos_u" value="{{ url('cuatrimestres/datos_u') }}">


<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12" style="text-align:center">
            <p><b><div id="title"></div></b></p>
            <span><div id="date"></div></span>
		</div>
	</div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">Enlace</label>
            <div class="col-sm-8">
              <div id="mainenlace"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">ACTIVIDAD</label>
            <div class="col-sm-8">
               <div id="actividad"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">ANEXOS</label>
            <div class="col-sm-8">
              <div id="anexos"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-2">Formularios</label>
            <div class="col-sm-8">
                <div id="formularios"></div>
            </div>
        </div>
    </div>
   
    <div id="evaluacionBtn" class="row" style="padding-bottom:50px">
        <div class="col-sm-12">
              <div id="btnireval"></div>
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
	<script src="{{ asset('js/alumno/clase.js') }}"></script>
@endsection