jQuery(document).ready(function() {
    jQuery(".chart_sale select").change(function() {
        var id = jQuery(this).val();
        jQuery('#chart_div').text('loading...').css('color','red');
        jQuery.ajax({
            url: 'https://www.google.com/jsapi?callback',
            cache: true,
            dataType: 'script',
            success: function(){
                google.load('visualization', '1', {packages:['corechart'], 'callback' : function()
                {

                    jQuery.ajax({
                        type: "POST",
                        dataType: "json",
                        url: 'manage/'+id,
                        success: function(output) {
                            console.log(output.data);
                            var data = google.visualization.arrayToDataTable([ ["Month", "Now year", "Tagets"], ["January",      4,      8]]);
                            var options = {title: 'My Daily Activities'};
                            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                            chart.draw(data, options);
                        }
                    });


                }
                });
                return true;
            }
        });
    });
});