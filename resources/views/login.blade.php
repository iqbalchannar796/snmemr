@extends('layouts.app')
@section('title','| Login')
@section('stylesheet')
    {{--{!!Html::style('plugins/parsley/css/parsley.css')!!}--}}
@endsection
@section('content')

    <form role="form"  class="m-t" role="form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required="">
            @if ($errors->has('email'))
                <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
            @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        <a href="{{ url('/password/reset') }}"><small>Forgot password?</small></a>

    </form>

@endsection

@section('javascript')
        <!-- Laravel Javascript Validation -->
    {{--{!! Html::script('vendor/jsvalidation/js/jsvalidation.js') !!}--}}
    {{--{!! JsValidator::formRequest('App\Http\Requests\ProductRequest', '#my-form') !!}--}}
@endsection