@extends('layouts.admin')
@section('main-title')
   MATERIA CLASES
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
    .bots{
		background:#003c54;
        text-transform:uppercase;
        border-radius:5px;
        color:white;
        margin-bottom:5%;
        height: 50px;
        padding:15px 5px 5px 5px;
    }
    a{
        color:white;
    }
    .btnTitle{
        background: #ff931e;
        color: white;
        text-transform: uppercase;
        border-radius: 20px;
        padding: 15px 5px 25px 10px;
        height: 20px;
        font-weight: bold;
    }
</style>
@endsection
@section('main-content')
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
<input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}" id="hdd_IdUsuario">
<input type="hidden" id="url_listado" value="{{ url('alumnos/listado') }}">
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
            <div align="center" class="btnTitle" style="margin-top:3%">
                <span>{{$cuatrimestre}}</span>
            </div>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-12" style="margin-top:5%">
            @foreach($materia as $mate)
            <div align="center" class="bots">
                <div class="col-xs-1 col-md-1">
                    <i class="fa fa-pencil"></i>
                </div>
                <div class="col-xs-10 col-md-10">
                    <label>
                        {{$mate->materia}}
                    </label>
                </div>
            </div>
            @endforeach
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