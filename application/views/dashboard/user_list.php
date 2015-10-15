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
            <div class="col-md-4">
                <a href="/auth/create_user"><button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Add New User</button></a>
            </div>
            <div class="col-md-4">
                <div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
				</div>
            </div>
        </div><br />
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
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Group ID</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td>
                                            	<?=$user->id;?>
                                            </td>
                                            <td>
                                            	<?=$user->first_name;?>
                                            </td>
                                            <td>
                                            	<?=$user->last_name;?>
                                            </td>
                                            <td>
                                            	<?=$user->username;?>
                                            </td>
                                            <td>
                                            	<?=$user->id;?>
                                            </td>
                                            <td>
                                            	<a href="/auth/edit_user/<?=$user->id;?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-pencil"></i>
                            					</button></a>
                                            	<a href="/auth/deactivate/<?=$user->id;?>"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                            					</button></a>
                            				</td>
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
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