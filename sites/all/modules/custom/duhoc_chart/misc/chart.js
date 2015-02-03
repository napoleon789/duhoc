//Chart for contract
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
                        url: 'sales/'+id,
                        success: function(output) {
                            var right = output.right;
                            console.log(right);
                            jQuery('.content_mont').html(right);
                            var chuan = '['+output.data+']';
                            var row = jQuery.parseJSON(chuan);
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', '');
                            data.addColumn('number', 'Current year');
                            data.addColumn('number', 'Target');
                            data.addRows(row);
                            var options = {
                                chartArea:{left:25,top:60,width:"84%"},
                                fontSize:10,
                                colors: ["#414853", "#febd16"],
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
    //Chart for revenue
    jQuery(".chart_reve select").change(function() {
        var id = jQuery(this).val();
        jQuery('#chart_div2').html('<div class="loadding"><img src="sites/all/modules/custom/duhoc_chart/images/bx_loader.gif" /></div>');
        jQuery('.content_revenue').html('');
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
                        url: 'revenue/'+id,
                        success: function(output) {
                            var right = output.right;
                            jQuery('.content_revenue').html(right);
                            var chuan = '['+output.data+']';
                            var row = jQuery.parseJSON(chuan);
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', '');
                            data.addColumn('number', 'Current year');
                            data.addColumn('number', 'Revenue');
                            data.addRows(row);
                            var options = {
                                chartArea:{left:25,top:60,width:"84%"},
                                fontSize:10,
                                colors: ["#414853", "#febd16"],
                                hAxis: {title: "", titleTextStyle: {color: "red"}}
                            };
                            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
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
