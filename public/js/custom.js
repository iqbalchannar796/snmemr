$(function(){
    $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });
});
$(function () {
        $('#datetimepicker0').datetimepicker({
            defaultDate: new Date(),
            format: 'LT'
        });
    }).change();


$(function () {
    $('#datetimepicker1').datetimepicker({
        defaultDate: new Date(),
        format: 'LT'
    });
});

$(function () {
    $('#datetimepicker0').datetimepicker();
    $('#datetimepicker1').datetimepicker();
    $("#datetimepicker0").on("dp.change", function (e) {
        $('#datetimepicker1').data("DateTimePicker").minDate(e.date);

        startingtime=$('#startingtime').val();
        endingtime=$('#endingtime').val();
        var day = '1/1/1970 ';
        diff_in_min = ( Date.parse(day + endingtime) - Date.parse(day + startingtime) ) / 1000 / 60;
        if(diff_in_min < 0 || diff_in_min == 0){
            $('#datetimepicker1').data("DateTimePicker").date(e.date);
        }
    });



    $("#datetimepicker1").on("dp.change", function (e) {
        $('#datetimepicker0').data("DateTimePicker").maxDate(e.date);
        startingtime=$('#startingtime').val();
        endingtime=$('#endingtime').val();
        var day = '1/1/1970 ';
        diff_in_min = ( Date.parse(day + endingtime) - Date.parse(day + startingtime) ) / 1000 / 60;
        if(diff_in_min < 0 || diff_in_min == 0){
            $('#datetimepicker0').data("DateTimePicker").date(e.date);
        }

    });
});






