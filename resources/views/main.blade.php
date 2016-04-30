<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._header')
    @include('partials._stylesheet')
</head>
<body>
<div id="wrapper">
    @include('partials._leftnavbar')
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('partials._topnavbar')
        {{--@include('partials._dashboard')--}}
                {{--@yield('promo')--}}
                    @yield('content')
                @include('partials._footer')

    </div>
</div>
@include('partials._javascript')
</body>
</html>