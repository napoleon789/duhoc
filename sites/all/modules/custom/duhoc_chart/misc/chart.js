jQuery(document).ready(function() {
    jQuery(".chart_sale select").change(function() {
        var id = jQuery(this).val();
        console.log(id);
        jQuery('.content_home').text('loading...').css('color','red');
        jQuery.ajax({ url: 'manage/'+id,
            dataType: 'JSON',
            success: function(output) {
                var result = jQuery.parseJSON(output);
                jQuery('.content_home').html(result.data);
            }
        });
    });
});