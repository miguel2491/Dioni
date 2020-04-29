<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <a href="{{ route('home') }}">
                            <img alt="image" class="img-circle" width="48px" height="48px" src="{{ url('usuarios/fotos/'.Auth::user()->id) }}"/>
                        </a>
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name .' '. Auth::user()->name .' ' . Auth::user()->last_name_mother }}</strong>
                         </span> <span class="text-muted text-xs block"><b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Perfil</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    MOV
                </div>
            </li>
            <!-- <li>
                <a href="{{ URL::to('configuracion') }}">
                    <i class="fa fa-gear" aria-hidden="true"></i> Configuración
                </a>
            </li> -->
            <li {{{ (Request::is('profesor','alumnos','carreras','materias','cuatrimestres','clases','clases_asignadas') ? 'class=active' : '') }}}>
                <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Catálogos</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level" collapse {{{ (Request::is('profesor','alumnos','carreras','materias','cuatrimestres','clases','clases_asignadas') ? 'in' : '') }}}">
                    <li>
                        <a href="{{ URL::to('profesor') }}">
                            <i class="fa fa-users" aria-hidden="true"></i> Profesores
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('alumnos') }}">
                            <i class="fa fa-user" aria-hidden="true"></i> Alumnos
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('carreras') }}">
                            <i class="fa fa-user" aria-hidden="true"></i> Carreras
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('materias') }}">
                            <i class="fa fa-book" aria-hidden="true"></i> Materias
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('cuatrimestres') }}">
                            <i class="fa fa-user" aria-hidden="true"></i> Cuatrimestre
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('clases') }}">
                            <i class="fa fa-user" aria-hidden="true"></i> Clases
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('clases_asignadas') }}">
                            <i class="fa fa-user" aria-hidden="true"></i> Clases Asignadas
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('alumno') }}">
                    <i class="fa fa-users" aria-hidden="true"></i> Alumno
                </a>
            </li>
            <li>
                <a href="{{ URL::to('profesor') }}">
                    <i class="fa fa-users" aria-hidden="true"></i> Profesor
                </a>
            </li>
        </ul>
    </div>
</nav>