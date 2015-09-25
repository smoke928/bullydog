<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open("auth/login"); ?>
                        <fieldset>
                        	<div id="infoMessage"><?php echo $message; ?></div>
                            <div class="form-group">
                                <?php echo form_input($email); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_input($password); ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <?php echo form_checkbox('remember', '1', FALSE); ?>Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <?php echo form_submit('submit', 'Login'); ?>
                        </fieldset>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>




