<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EDUCACIÓN MOVL MX | @yield('main-title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jQueryUI/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <style>
        .select2-dropdown{
            z-index: 9001;
        }
        .skin-3 .navbar-static-top{
            background:#bfbfbf;
        }
        .skin-3 #page-wrapper, .footer{
            background:#bfbfbf !important;
        }
        .border-bottom, .skin-3 #page-wrapper, .footer{
            border-bottom:0px solid #e7eaec !important;
        }
        .footer{
            border-top:0px solid #e7eaec;
        }
    </style>
    @yield('main-css')
</head>

<body class="skin-3">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            @php
              use App\Models\RolesUser;
              $id_u = Auth::user()->id;
              $rol = RolesUser::where('user_id', $id_u)->first();
            @endphp
            <input type="hidden" id="rol" value="{{ $rol->rol_id }}">
            <input type="hidden" id="id_user" value="{{ $id_u }}">
            @yield('main-content')
            
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('js/inicio.js') }}"></script>
    @yield('main-scripts')
</body>

</html>