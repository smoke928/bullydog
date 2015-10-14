<div class="container-fluid">
	<br /><br />
	<div class="row ">
		<div class="col-lg-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1><?php echo lang('forgot_password_heading');?></h1>
					<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
				</div>
				<div class="panel-body">
					<div id="infoMessage">
						<?php echo $message;?>
					</div>
					<?php echo form_open("auth/forgot_password");?>
						<p>
							<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
							<?php echo form_input($email);?>
						</p>
						<p>
							<?php echo form_submit('submit', lang('forgot_password_submit_btn'));?>
						</p>
					<?php echo form_close();?>
				</div>
				<div class="panel-footer">
					<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>









