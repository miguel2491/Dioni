@extends('layouts.admin')
@section('main-title')
   MATERIA
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
		background:#ff931e;
        text-transform:uppercase;
        border-radius:20px;
        color:white;
        width:70%;
        margin-left:10%;
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
<input type="hidden" id="url_listado" value="{{ url('materias/listado') }}">
<input type="hidden" id="url_materias" value="{{ url('materia/clases') }}">
<input type="hidden" id="id_carrera" value="{{$id_materia}}">
<input type="hidden" id="view_clase" value="{{ url('materia/clases') }}">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">EDUCACIÓN MÓVIL MX</span>
            </li>
            <li style="margin-left:80%">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    <img src="../img/fondos/login/unimovil.png" style="width:50px" />
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </nav>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
            <div align="center">
                <img src="../img/fondos/principal/{{$icono}}" style="width:75px" />
            </div>
            <div align="center" style="margin-top:3%">
                <b>{{$materia}}</b>
            </div>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-12" style="margin-top:5%;padding-bottom: 10%">
            @foreach($cuatri as $cua)
                <div align="center" class="botons">
                    <a href="{{route('materia.clase',['id'=>$cua->id_cuatri,'name'=>$id_materia])}}">
                        <label>
                            {{$cua->cuatri}}
                        </label>
                    </a>    
                </div>
            @endforeach
        </div>    
    </div>
</div>
<div class="footer">
        <div>
            <img src="../img/fondos/principal/regresar1.png" style="width:15px" />
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
	<script src="{{ asset('js/materias/materias.js') }}"></script>
@endsection