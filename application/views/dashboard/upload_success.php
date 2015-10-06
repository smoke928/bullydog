<div id="page-wrapper" ng-app="sctDynamometerTestResultsApp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div style="float:left;"><h1 class="page-header">DTR Dyno Chart Uploader</h1></div><div><a href="#" class="info"><p class="fa fa-question-circle" style="margin-top:60px;margin-left:10px"></p></a></div>  
                
                
            </div>
            <div class="clear"></div>
            
            <!-- /.col-lg-12 -->
        </div>
        <div class="alert alert-info alert-dismissable fade in" style="display: none; ">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			This tool is to upload a Dyno data sheets to supply data for the DTR Dyno Charts. The data sheets are generated using the "" Application or the "" Application
		</div>
		<!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                        Chart "" Successfully Created
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="container">
                        	
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    	<br />
    	
    	
    	<script src="http://code.highcharts.com/highcharts.src.js"></script>
    	
      <script>
      
		$(document).ready(function()
		{	
			
		    $(".info").click(function(){
		    	$('.alert').show();
		    });
		    
		    $('#container').highcharts({
		        options: {
		            chart: {
		                type: 'line'
		            }
		        },
		        series: <?= $chartset ?>		,
		        xAxis: [{
		        	title : {
						name : 'RPM'	
					},
		            categories: ['2.4k', '2.7k', '3.0k', '3.3k', '3.6k', '3.9k', '4.2k', '4.5k', '4.8k', '5,1k', '5.4k', '5.7k', '6.0k', '6.3k', '6.6k', '6.9k', '7.2k'],
		            crosshair: true
		        }],
		        yAxis: [{ // Primary yAxis
		            labels: {
		                format: '{value} hp',
		                style: {
		                    color: Highcharts.getOptions().colors[1]
		                }
		            },
		            title: {
		                text: 'Horse Power',
		                style: {
		                    color: Highcharts.getOptions().colors[1]
		                }
		            }
		        }, { // Secondary yAxis
		            title: {
		                text: 'Torque',
		                style: {
		                    color: Highcharts.getOptions().colors[0]
		                }
		            },
		            labels: {
		                format: '{value} ft-pounds',
		                style: {
		                    color: Highcharts.getOptions().colors[0]
		                }
		            },
		            opposite: true
		        }],
		        title: {
		            text: 'SCT Dynamometer Test Results'
		        }
			});
		});
		</script>
		