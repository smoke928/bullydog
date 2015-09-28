<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div style="float:left;"><h1 class="page-header">User Manager</h1></div><div><a href="#" class="info"><p class="fa fa-question-circle" style="margin-top:60px;margin-left:10px"></p></a></div>  
                
                
            </div>
            <div class="clear"></div>
            
            <!-- /.col-lg-12 -->
        </div>
        <div class="alert alert-info alert-dismissable fade in" style="display: none; ">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			This tool is to upload a Dyno data sheets to supply data for the DTR Dyno Charts. The data sheets are generated using the "" Application or the "" Application
		</div>
		<div class="row">
        
		<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                            	First Name
                                            </td>
                                            <td>
                                            	<input type="text" class="form-control" value="<?=$user->first_name;?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            	Last Name
                                            </td>
                                            <td>
                                            	<input type="text" class="form-control" value="<?=$user->last_name;?>">
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td>
                                        	Username
                                        </td>
                                        <td>
                                        	<input type="text" class="form-control" value="<?=$user->username;?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	Company
                                        </td>
                                        <td>
                                        	<input type="text" class="form-control" value="<?=$user->company;?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	Email
                                        </td>
                                        <td>
                                        	<input type="email" class="form-control" required value="<?=$user->email;?>">
                                        </td>
                                    </tr>
                            	</table>
                            	<button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Update User</button>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                
            </div>
        <!-- /.row -->
        
        <script>
		$(document).ready(function()
		{
		    $(".info").click(function(){
		    	$('.alert').show();
		    });
		    
		});
		</script>