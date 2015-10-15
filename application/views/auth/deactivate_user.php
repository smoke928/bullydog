<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div style="float:left;"><h1><?php echo lang('deactivate_heading');?></h1></div><div><a href="#" class="info"><p class="fa fa-question-circle" style="margin-top:60px;margin-left:10px"></p></a></div>  
                
                
            </div>
            <div class="clear"></div>
            
            <!-- /.col-lg-12 -->
        </div>
        <div class="alert alert-info alert-dismissable fade in" style="display: none; ">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Deactivates user account.
		</div>
		
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p></h3>
                    </div>
                    <div class="panel-body">
                    	

						<?php echo form_open("auth/deactivate/".$user->id);?>

						<p>
							<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
							<input type="radio" name="confirm" value="yes" checked="checked" />
							<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
							<input type="radio" name="confirm" value="no" />
						</p>

						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(array('id'=>$user->id)); ?>

						<p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

						<?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
   	</div>
</div>



