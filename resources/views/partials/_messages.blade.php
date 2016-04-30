@if(Session::has('success'))
     <div class="alert alert-success alert-dismissable" style="margin-top: 19px; margin-bottom:0px"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success !</strong>&emsp;
          {{ Session::get('success') }}  
     </div>
@endif

{{--@if(count($errors) > 0)--}}
    {{--<div class="alert alert-danger" role="alert">--}}
     {{--<strong>Errors :</strong>--}}
     {{--<ul>--}}
         {{--@foreach($errors->all() as $error)--}}
         {{--<li>  {{ $error }}</li>--}}
         {{--@endforeach--}}
     {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}