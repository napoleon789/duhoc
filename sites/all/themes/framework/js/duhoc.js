jQuery(document).ready(function($) {
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
    $("#edit-field-select-contract-und").change(function() {
        $('.load').text('loading...').css('color','red');
        var contract = $(this).val();
        var pathname = window.location.pathname;
        var host = window.location.host;
            $.ajax({
                url:'contract/'+contract,
                dataType: 'JSON',
                success:function(result){
                    $('.load').text('');
            }});
    });
});