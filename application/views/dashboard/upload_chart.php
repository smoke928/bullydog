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
		<?php if ($error): ?>
			<div class="alert alert-info alert-dismissable fade in">
	        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 <?= $error ?>
			</div>
		<?php endif; ?>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Enter Vehicle Information</h3>
                    </div>
                    <div class="panel-body">
                    	<?php echo form_open_multipart('dashboard/parser');?>
                        	<div class="form-group">
                				<input class="form-control" placeholder="Tuner Name: ie. Stock, Cold Air, 93 Octane" name="tuner_name" type="text" id="tuner_name">
                			</div>
                			<span id="">Select Year: </span> 
            				<select class="form-control" id="select_year" name="select_year" class="emp_select">
            					<option value="" disabled selected>Select Year</option>
            				</select>
            				<br />
                			<span id="">Select Make: </span> 
                			<select class="form-control" id="select_make" name="select_make" class="emp_select">
                				<option value="" disabled selected>Select Make</option>
                			</select>
                			<br />
                			<span id="">Select Model: </span> 
                			<select class="form-control" id="select_model" name="select_model" class="emp_select">
                				<option value="" disabled selected>Select Model</option>
                			</select>
                			<br />
                			<span id="">Select Package: </span> 
                			<select class="form-control"  id="select_package" name="select_package" class="emp_select">
                				<option value="" disabled selected>Select Package</option>
                			</select>
                			<br />
                			<input type="file" name="dtr_file" data-url="/parser" class="btn btn-outline btn-primary" />
                			<br />
                			<button id="fileuploadbutton" disabled type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Upload Chart</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    	<br />
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