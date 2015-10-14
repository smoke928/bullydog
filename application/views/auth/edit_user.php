<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div style="float:left;"><h1 class="page-header">Edit User</h1></div><div><a href="#" class="info"><p class="fa fa-question-circle" style="margin-top:60px;margin-left:10px"></p></a></div>  
                
                
            </div>
            <div class="clear"></div>
            
            <!-- /.col-lg-12 -->
        </div>
        <div class="alert alert-info alert-dismissable fade in" style="display: none; ">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			This tool is to upload a Dyno data sheets to supply data for the DTR Dyno Charts. The data sheets are generated using the "" Application or the "" Application
		</div>
		<div class="row">
            
        </div>
		<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <!-- /.panel-heading -->
                        <?php echo form_open(uri_string());?>

					      <p>
					            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
					            <?php echo form_input($first_name);?>
					      </p>

					      <p>
					            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
					            <?php echo form_input($last_name);?>
					      </p>

					      <p>
					            <?php echo lang('edit_user_company_label', 'company');?> <br />
					            <?php echo form_input($company);?>
					      </p>

					      <p>
					            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
					            <?php echo form_input($phone);?>
					      </p>

					      <p>
					            <?php echo lang('edit_user_password_label', 'password');?> <br />
					            <?php echo form_input($password);?>
					      </p>

					      <p>
					            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
					            <?php echo form_input($password_confirm);?>
					      </p>

					      <?php if ($this->ion_auth->is_admin()): ?>

					          <h3><?php echo lang('edit_user_groups_heading');?></h3>
					          <?php foreach ($groups as $group):?>
					              <label class="checkbox">
					              <?php
					                  $gID=$group['id'];
					                  $checked = null;
					                  $item = null;
					                  foreach($currentGroups as $grp) {
					                      if ($gID == $grp->id) {
					                          $checked= ' checked="checked"';
					                      break;
					                      }
					                  }
					              ?>
					              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
					              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
					              </label>
					          <?php endforeach?>

					      <?php endif ?>

					      <?php echo form_hidden('id', $user->id);?>
					      <?php echo form_hidden($csrf); ?>

					      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

					<?php echo form_close();?>
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

<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>
<?=var_dump($user);?>
<div id="infoMessage"><?php echo $message;?></div>


