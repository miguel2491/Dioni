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
                if($roles->rol_id==2){
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
                <img src="img/fondos/login/unimovil.png" style="width:50px" />
            </li>
            @php
                }
            @endphp
        </ul>
    </nav>
</div>
    <div class="row" id="div_carreras">

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
@section('main-scripts')
<script src="{{ asset('js/menu.js') }}"></script>
@endsection
