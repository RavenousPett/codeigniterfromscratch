<h1>Create an account</h1>

<fieldset>
	<legend>Personal Information</legend>
	<?php echo form_open('login/create_member'); ?>
	<?php echo form_input('first_name', set_value('first_name', 'First Name')); ?>
	<?php echo form_input('last_name', set_value('last_name', 'Last Name')); ?>
	<?php echo form_input('email_address', set_value('email_address', 'Email Address')); ?>
</fieldset>

<fieldset>
	<legend>Login Info</legend>
	<?php echo form_input('user_name', set_value('user_name', 'User Name')); ?>
	<?php echo form_input('password', set_value('password', 'Password')); ?>
	<?php echo form_input('password_conf', set_value('password_conf', 'Re-type Password')); ?>

	<?php echo form_submit('submit', 'Create Account'); ?>

	<?php echo validation_errors('<p class="error">'); ?>	

</fieldset>