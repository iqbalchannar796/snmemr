{{Html::script('plugins/jquery-2.1.1.js')}}
{{Html::script('js/function.js')}}
{{Html::script('plugins/bootstrap/js/bootstrap.js')}}
{{Html::script('plugins/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js')}}
{{Html::script('plugins/bootstrap/js/plugins/slimscroll/jquery.slimscroll.min.js')}}
{{Html::script('plugins/bootstrap/js/plugins/peity/jquery.peity.min.js')}}
{{Html::script('plugins/bootstrap/js/inspinia.js')}}
{{Html::script('plugins/bootstrap/js/plugins/sparkline/jquery.sparkline.min.js')}}
{{Html::script('plugins/bootstrap/js/demo/sparkline-demo.js')}}


{{Html::script('plugins/bootstrap/js/plugins/toastr/toastr.min.js')}}
{{Html::script('js/custom.js')}}

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>







@yield('javascript')
