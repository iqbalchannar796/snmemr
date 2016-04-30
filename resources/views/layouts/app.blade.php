<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SNMEMR | Login</title>

    {{Html::style('plugins/bootstrap/css/bootstrap.css')}}
    {{Html::style('plugins/bootstrap/font-awesome/css/font-awesome.css')}}
    {{Html::style('plugins/bootstrap/css/animate.css')}}
    {{Html::style('plugins/bootstrap/css/style.css')}}



</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        <h3>Welcome to IN+</h3>
        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>
        {{--@if (Auth::guest())--}}
            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
        {{--@else--}}
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                    {{--{{ Auth::user()->name  }} <span class="caret"></span>--}}
                {{--</a>--}}

                {{--<ul class="dropdown-menu" role="menu">--}}
                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--@endif--}}
        @yield('content')

        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
{{Html::script('plugins/bootstrap/js/jquery-2.1.1.js')}}
{{Html::script('plugins/bootstrap/js/bootstrap.js')}}
</body>

</html>
