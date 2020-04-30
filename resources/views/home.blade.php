@extends('layouts.admin')

@section('main-title')
Inicio
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <a href="{{ URL::to('pan_maestro') }}">
                <div align="center">
                    <img src="img/fondos/principal/derecho1.png" style="width:75px" /><br>
                    <label class="titulos_menu">DERECHO</label>
                </div>
            </a>        
        </div>
        <div class="col-xs-6 col-md-6">
        <a href="{{ URL::to('pan_alumno') }}">
            <div align="center">
                <img src="img/fondos/principal/administracion1.png" style="width:70px" />
                <label class="titulos_menu">ADMINISTRACIÓN</label>
            </div>  
        </a>          
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <div align="center">
                <img src="img/fondos/principal/logistica1.png" style="width:70px" />
                <label class="titulos_menu">INGENIERÍA EN LOGÍSTICA</label>
            </div>                
        </div>
        <div class="col-xs-6 col-md-6">
            <div align="center">
                <img src="img/fondos/principal/pericial1.png" style="width:70px" />
                <label class="titulos_menu">INVESTIGACIÓN PERCIAL</label>
            </div>        
        </div>
    </div>
    <div class="row">    
        <div class="col-xs-6 col-md-6">
            <div align="center">
                <img src="img/fondos/principal/contaduria1.png" style="width:70px" />
                <label class="titulos_menu">CONTADURÍA</label>  
            </div>              
        </div>
        <div class="col-xs-6 col-md-6">
            <div align="center">
                <img src="img/fondos/principal/educacion.png" style="width:70px" />
                <label class="titulos_menu">CIENCIAS DE LA EDUCACIÓN</label>
            </div>        
            
        </div>
    </div>
@endsection
