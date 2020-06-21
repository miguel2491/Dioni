@extends('layouts.admin')
@section('main-title')
   EVALUACIONES
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
    #tbl_body tr td{
        text-align:center;
        height:50px;
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

<input type="hidden" id="url_evalguardar" value="{{ url('evaluacion/guardar') }}">
<input type="hidden" id="url_preguntaguardar" value="{{ url('pregunta/guardar') }}">
<input type="hidden" id="url_respuesta_guardar" value="{{ url('respuesta/guardar') }}">
<input type="hidden" id="url_evaluacion" value="{{ url('clase/update_view') }}">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div style="margin-left: 80%">
                <img src="img/fondos/login/unimovil.png" style="width:50px" />
            </div>
        </nav>
    </div>
	<div class="row">
		<div class="col-lg-12" style="text-align:center">
            <p><b>EVLUACIÓN DEL CUESTIONARIO</b></p>
		</div>
	</div>
    <div class="row">
        <div class="table-responsives">
        <table id="table-datos">
                        <thead>
                            <tr>
                                <th style="text-align:center">ALUMNO</th>
                                <th style="text-align:center">CALIFICACIÓN</th>
                                <th style="text-align:center"></th>
                            </tr>
                        </thead>
                        <tbody id="tbl_body">
                            <tr>
                                <td>ÁLVARO GONZÁLEZ ROSAS</td>
                                <td>9</td>
                                <td style="width:30%"><button class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></button></td>
                            </tr>
                            <tr>
                                <td>LIDIA ROJAS FUERTES</td>
                                <td>8</td>
                                <td style="width:30%"><button class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></button></td>
                            </tr>
                            <tr>
                                <td>ANDREA FIERRO LOPEZ</td>
                                <td>N/P</td>
                                <td style="width:30%"><button class="btn btn-xs btn-warning"><i class="fa fa-eye-slash"></i></button></td>
                            </tr>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
        </div>
    </div>
    <div class="footer">
        <div>
             <a href="{{ URL::to('menu_profe') }}">
                    <img src="img/fondos/principal/regresar1.png" style="width:15px" />
                </a>
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