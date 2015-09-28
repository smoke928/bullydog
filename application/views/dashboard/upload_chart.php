<div id="page-wrapper">
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
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Enter Vehicle Information</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                        	<div id='emp'>
     						</div>
     						
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
      <script>
		$(document).ready(function()
		{
		    $(".info").click(function(){
		    	$('.alert').show();
		    });
		    
		});
		</script>
		<script src="../../../assets/js/emp.js"></script>
		<script type="text/javascript">
			$( document ).ready(function() {
		  		$('#emp').emp({
		  			'start_year' 	: 2009,
		  			'end_year'		: 2015
		  		});
		  		
			});
		</script>     