@extends('layouts.admin_admin')
@section('main-title')
   ADMIN Cuentas
@endsection
@section('main-css')
<link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
@endsection
@section('main-content')
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
<input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}" id="hdd_IdUsuario">
<input type="hidden" id="url_listado" value="{{ url('clases/lista_asignadas') }}">
<input type="hidden" id="url_listado_alumnos" value="{{ url('alumnos/listado') }}">
<input type="hidden" id="url_datosget" value="{{ url('clases_asignadas/datos_asignadas') }}">
<input type="hidden" id="url_guardar" value="{{ url('clases/guardar_asignadas') }}">
<input type="hidden" id="url_actualizar" value="{{ url('clases/actualiza_asignada') }}">
<input type="hidden" id="url_eliminar" value="{{ url('clases/delete_asignada') }}">
<input type="hidden" id="url_list_cuatrimestre" value="{{ url('cuatrimestres/lista') }}">
<input type="hidden" id="url_list_materias" value="{{ url('materias/listado') }}">

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<div class="row">
						<div class="col-md-7">
							<h5><i class="glyphicon glyphicon-align-justify"></i> Clase</h5>
						</div>
						<div class="col-md-5">
							<div class="pull-right">
								<a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ModalSave">
									Nuevo
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="ibox-content">
					<!-- Inicia Cuerpo  de la Vista -->
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="table-datos">
							<thead>
								<tr>
									<th class="text-center">Clave</th>
									<th class="text-center">Alumno</th>
									<th class="text-center">Usuario</th>

									<th class="text-center">Acciones</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<!-- Fin Cuerpo de la Vista -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--Modal guardar y editar-->
<div class="modal fade" id="ModalSave" tabindex="-1" role="dialog" aria-labelledby="ModalEditar">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="ModalEditar">Asignar Clase</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<input type="text" class="form-control" id="id_alumno">
					<div class="col-md-6">
						<div class="form-group">
							<label>Materia</label>
							<select name="materias" id="materias" class="form-control"></select>
						</div>
					</div>
 					<div class="col-md-6">
						<div class="form-group">
							<label>Cuatrimestre</label>
							<select name="cuatrimestre" id="cuatrimestre" class="form-control"></select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal"><li class="fa fa-times"></li> Cancelar</button>
				<button class="btn btn-success" id="saveform"><li class="fa fa-check"></li> Aceptar</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_delete" data-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="bootbox-body" style="text-align: center;">¿Desea eliminar el registro?</div>
				<input type="hidden" name="delpoliza" id="delpoliza">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><li class="fa fa-times"></li> Cancelar</button>
				<button type="submit" class="btn btn-success" id="btn_eliminar"><li class="fa fa-check"></li> Aceptar</button>
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
	<script src="{{ asset('js/catalogos/clases_asignadas.js') }}"></script>
@endsection
