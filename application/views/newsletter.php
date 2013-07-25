<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>Newsletter Signup</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">

</head>

<body>

	<div id="newsletter-form">

		<?php 

		echo form_open('email/send');

		$name_data = array(
			'name' => 'name',
			'id' => 'name',
			'value' => set_value('name')
		);

		?>

	    <!-- Two different methods of doing input fields -->
		<p><label for="name">Name :</label><?php echo form_input($name_data); ?></p>
		
		<p>
			<label for="email">Email Address :</label>
			<input type="text" name="email" id="email" value="<?php set_value('email'); ?>">
		</p>

		<!-- form_subit('id', 'name') You could enter thee with an array like above -->
		<p><?php echo form_submit('submit', 'Submit'); ?></p>

		<?

		echo form_close();

		echo validation_errors('<p class="error">');

		?>

	</div>

</body>

</html>