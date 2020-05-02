<!DOCTYPE html>
<html>

@section('htmlheader')
    @include('layouts.htmlheader')
@show

<body class="skin-1">
    <div id="wrapper">
        
        <div id="page-wrapper" class="gray-bg">
             <div class="row border-bottom">
              </div>

              @yield('main-content')

        </div>
    </div>

@section('scripts')
    @include('layouts.scripts')
    @yield('localscripts')
@show

</body>
</html>