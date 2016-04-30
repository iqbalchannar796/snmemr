$(document).ready(function(){
    $('.send-btn').click(function(){
           // var company_id=$('#departments-company_id').val();
            $.ajax({
                type: 'post',
                dataType:'JSON',
                url:'/products/login',// baseUrl+'/index.php/departments/sample',
                data: {
                    company_id:'656',
                    _token    :$('input[name=_token]').val()
                    // searchby:888
                },
                beforeSend:function() {
                    //overlay_ajax();
                },
                success: function (data) {
                       alert(data.response);
                       alert(data.company_id);
                       alert(data.helper);
                        alert(data.helper1);
                      alert(data.class)

                  //  $('#departments-branch_id').html(data.result);
                    //  alert(data.code);
                },
                error:function(){
                    alert('ajax call failed...');
                },
                complete: function(){
                    // $.unblockUI();
                }
            });
    });
});
