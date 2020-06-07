@extends('layouts.admin')
@section('main-title')
   Menú
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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div style="margin-left: 80%">
                <img src="img/fondos/login/unimovil.png" style="width:50px" />
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('perfil') }}">
                <div align="center">
                    <img src="img/fondos/login/unimovil.png" style="width:45px" /><br>
                    <label class="titulos_menu">Perfil</label>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('cuestionario_maestro') }}">
                 
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('evaluacion_maestro') }}">
                <div align="center">
                    <img src="img/fondos/principal/evaluacion.png" style="width:75px" /><br>
                    <label class="titulos_menu">Evaluación</label>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('cuestionario_maestro') }}">
                <div align="center">
                    <img src="img/fondos/principal/cuestionarios.png" style="width:70px" />
                    <label class="titulos_menu">Cuestionario</label>
                </div>
            </a>
        </div>
    </div>
    <div class="row" style="padding-bottom: 85%">
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('evaluacion_alumno') }}">
                <div align="center">
                    <img src="img/fondos/principal/evaluacion.png" style="width:75px" /><br>
                    <label class="titulos_menu">Evaluación Alumno</label>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('cuestionario_alumno') }}">
                <div align="center">
                    <img src="img/fondos/principal/cuestionarios.png" style="width:70px" />
                    <label class="titulos_menu">Cuestionario Alumno</label>
                </div>
            </a>
        </div>
    </div>
    <div class="footer">
        <div>
             <a href="{{ route('home') }}">
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
