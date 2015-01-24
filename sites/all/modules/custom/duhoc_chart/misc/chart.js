jQuery(document).ready(function() {
    jQuery(".chart_sale select").change(function() {
        var id = jQuery(this).val();
        jQuery('#chart_div').html('<div class="loadding"><img src="sites/all/modules/custom/duhoc_chart/images/bx_loader.gif" /></div>');
        jQuery('.content_mont').html('');
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
                            var right = output.right;
//                            var right = output.right;
                            console.log(right);
                            jQuery('.content_mont').html(right);

                            var chuan = '['+output.data+']';
                            var row = jQuery.parseJSON(chuan);
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', '');
                            data.addColumn('number', 'Now year');
                            data.addColumn('number', 'Taget');
                            data.addRows(row);
                            var options = {
                                chartArea:{left:20,top:60,width:"86%"},
                                hAxis: {title: "", titleTextStyle: {color: "red"}}
                            };
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