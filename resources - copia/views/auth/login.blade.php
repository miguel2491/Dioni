<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación Móvil MX | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/secciones/login.css" rel="stylesheet">

</head>

<body class="fondo_principal">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
            <img src="img/fondos/login/unimovil.png" style="width:50px" />
            </div>
            <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group inputWithIcon inputIconBg">
                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group inputWithIcon inputIconBg">
                    <input type="password" class="form-control" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn block m-b" >INGRESAR</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
