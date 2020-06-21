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
<input type="hidden" id="url_profesor_materias" value="{{ url('profesor/profesorMaterias/') }}">
<input type="hidden" id="url_profesor_from" value="{{ url('profesor/from_u') }}">
<input type="hidden" id="url_profesor_materias_clase" value="{{ url('profesor/materia/clase') }}">
<input type="hidden" id="url_clases_datos" value="{{ url('clases/datos') }}">
<input type="hidden" id="url_anexo_clase" value="{{ url('anexo/clase') }}">
<input type="hidden" id="url_anexo_guardar" value="{{ url('anexo/guardar') }}">
<input type="hidden" id="url_anexo_delete" value="{{ url('anexo/delete') }}">


<input type="hidden" id="url_profesor_evaluaciones" value="{{ url('evaluacion/lista_profesor') }}">
<input type="hidden" id="url_update_clase" value="{{ url('clase/update_evalua') }}">
<input type="hidden" id="url_view_clase" value="{{ url('clase/update_view') }}">

<input type="hidden" id="id_maestro" >
<input type="hidden" id="idclase" >

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12" style="text-align:center">
            <p><b><div id="title"></div></b></p>
        </div>
        <div class="row" >
       
        <a href="/maestro/clase" class="btn btnCrearClase">CREAR CLASE</a>
        <hr>
        </div>
        <div class="col-lg-12" style="text-align:center">
        <div id="profesor" class="pull-left"></div>
        <div id="action" class="pull-right">
            
        </div>
      

        <br>
        <hr>
            <div id="info"></div>
		</div>
    </div>
         
</div>

<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btnSaveAnexo" click="saveAnexo()">Agregar </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar </button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL LISTA EVALUACIONES -->
<div class="modal" id="ListaEvaluacion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="evaluaciones" style="text-align: center;">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btnAceptarEva" data-dismiss="modal">Aceptar </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar </button>
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
    <script src="{{ asset('js/maestro/clasesmaterias.js') }}"></script>
@endsection