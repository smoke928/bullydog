<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div style="float:left;"><h1 class="page-header">Create New User</h1></div><div><a href="#" class="info"><p class="fa fa-question-circle" style="margin-top:60px;margin-left:10px"></p></a></div>  
                
                
            </div>
            <div class="clear"></div>
            
            <!-- /.col-lg-12 -->
        </div>
        <div class="alert alert-info alert-dismissable fade in" style="display: none; ">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			This tool is to Create a new Dashboard User.
		</div>
		
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Enter Vehicle Information</h3>
                    </div>
                    <div class="panel-body">
                    	<div id="infoMessage"><?php echo $message;?></div>

						<?php echo form_open("auth/create_user");
						$class = array('class'=>'form-control')
						?>

						      <p>
						            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
						            <?php echo form_input($first_name, '', $class);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
						            <?php echo form_input($last_name, '', $class);?>
						      </p>
						      
						      <?php
						      if($identity_column!=='email') {
						          echo '<p>';
						          echo lang('create_user_identity_label', 'identity');
						          echo '<br />';
						          echo form_error('identity');
						          echo form_input($identity, '', $class);
						          echo '</p>';
						      }
						      ?>

						      <p>
						            <?php echo lang('create_user_company_label', 'company');?> <br />
						            <?php echo form_input($company, '', $class);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_email_label', 'email');?> <br />
						            <?php echo form_input($email, '', $class);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_phone_label', 'phone');?> <br />
						            <?php echo form_input($phone, '', $class);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_password_label', 'password');?> <br />
						            <?php echo form_input($password, '', $class);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
						            <?php echo form_input($password_confirm, '', $class);?>
						      </p>


						      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

						<?php echo form_close();?>
                    </div>
                </div>
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



