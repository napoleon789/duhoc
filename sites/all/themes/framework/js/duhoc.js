jQuery(document).ready(function($) {
    $(".selec_date select").change( function() {
        $(".ngay_thang input").val('');
        $(".ngay_thang").hide();
       var date_select = $(this).val();
        if(date_select == 1 || date_select == 0) {
           $("#edit-field-com-received-date-value-wrapper").show();
        }
        if(date_select == 2) {
            $("#edit-field-field-paid-date-value-wrapper").show();
        }
        if(date_select == 3) {
            $("#edit-field-field-due-date-value-wrapper").show();
        }
        if(date_select == 4) {
            $("#edit-field-create-date-value-wrapper").show();
        }
    });


    var panel = $("#edit-field-student-basic-und-0-field-marketing-channels-und").val();
    if(panel ==0){
        $("#edit-field-student-basic-und-0-field-detail-chanel-und").show();
    }
    $("#edit-field-student-basic-und-0-field-marketing-channels-und").change(function() {
        $("#edit-field-student-basic-und-0-field-detail-chanel-und").hide();
        var giatri = ($(this).val());
        if(giatri == 0 ) {
            $("#edit-field-student-basic-und-0-field-detail-chanel-und").show();
        }
    });

   // jQuery('.page-quanly-setting input[type="text"]').attr('disabled',true);
    $("#contract_change .form-select").change(function() {
        var num = $(this).parents('#contract_change').attr('rel');
        $('.load'+num).text('loading...').css('color','red');
        var contract = $(this).val();
        var pathname = window.location.pathname;
        var host = window.location.host;
            $.ajax({
                url:'contract/'+contract+'/'+num,
                dataType: 'JSON',
                success:function(result){
                    $('.load'+num).text('');
            }});
    });
});
var num = 0;
function clickME() {
    num++;
    for(var i = 0; i<=num;i++) {
        var giatri =jQuery("#admin_vanri"+i);
        giatri.show();
    }

}