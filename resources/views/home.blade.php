@extends('layouts.admin')

@section('main-title')
Inicio
@endsection
@section('main-content')
<div class="row border-bottom">
    <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">EDUCACIÓN MÓVIL MX</span>
            </li>
            @php
              use App\Models\RolesUser;
              $id = Auth::user()->id;
              $roles = RolesUser::where('user_id', $id)->first();
            @endphp
            @php
                if($roles->rol_id==1){
            @endphp
            <li style="margin-left:80%">
                <a href="{{ URL::to('menu_profe') }}">
                    <img src="img/fondos/login/unimovil.png" style="width:50px" />
                </a>
            </li>
            @php
                }
            @endphp
            @php
                if($roles->rol_id==3){
            @endphp
            <li style="margin-left:80%">
                <a href="{{ URL::to('menu_alumno') }}">
                    <img src="img/fondos/login/unimovil.png" style="width:50px" />
                </a>
            </li>
            @php
                }
            @endphp
            <!--
            <li style="margin-left:80%">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    <img src="img/fondos/login/unimovil.png" style="width:50px" />
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            -->
        </ul>
    </nav>
</div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('materia/DR00') }}">
                <div align="center">
                    <img src="img/fondos/principal/derecho1.png" style="width:75px" /><br>
                    <label class="titulos_menu">DERECHO</label>
                </div>
            </a>        
        </div>
        <div class="col-xs-6 col-md-6">
        <a href="{{ URL::to('materia/ADE00') }}">
            <div align="center">
                <img src="img/fondos/principal/administracion1.png" style="width:70px" />
                <label class="titulos_menu">ADMINISTRACIÓN</label>
            </div>  
        </a>          
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('materia/ILD00') }}">
            <div align="center">
                <img src="img/fondos/principal/logistica1.png" style="width:70px" />
                <label class="titulos_menu">INGENIERÍA EN LOGÍSTICA</label>
            </div>                
            </a>
        </div>
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('materia/IP00') }}">
            <div align="center">
                <img src="img/fondos/principal/pericial1.png" style="width:70px" />
                <label class="titulos_menu">INVESTIGACIÓN PERCIAL</label>
            </div>        
            </a>
        </div>
    </div>
    <div class="row">    
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('materia/CT00') }}">
                <div align="center">
                    <img src="img/fondos/principal/contaduria1.png" style="width:70px" /><br>
                    <label class="titulos_menu">CONTADURÍA</label>  
                </div>              
            </a>
        </div>
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('materia/CT00') }}">
            <div align="center">
                <img src="img/fondos/principal/educacion.png" style="width:70px" />
                <label class="titulos_menu">CIENCIAS DE LA EDUCACIÓN</label>
            </div>        
            </a>
        </div>
    </div>
    <div class="footer">
        <div>
             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    <img src="img/fondos/principal/regresar1.png" style="width:15px" />
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
        </div>
    </div>
@endsection
