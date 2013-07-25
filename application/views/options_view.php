<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>Give it some options</title>
</head>

<body>
	<h2>Create</h2>
	
	<?php echo form_open('site/create'); ?>

		<p>
			<label for="title">Title:</label>
			<input type="text" id="title" name="title" / >
		</p>

		<p>
			<label for="content">Content:</label>
			<input type="content" id="content" name="content" / >
		</p>

		<p>
			<input type="submit" value="go" />
		</p>

	<?php echo form_close(); ?>

	<hr />

	<h2>Read</h2>
	<?php if(isset($records)) : foreach($records as $row) : ?>

	<h2><?php echo anchor("site/delete/$row->id", $row->title); ?></h2> 
	<div><?php echo $row->contents; ?></div>

	<?php endforeach ?>

	<?php else : ?>
	<h2>No Records Returned.</h2>
	<?php endif; ?> 

	<h2>Delete</h2>

	<p>To delte a record, click on one of the heading above. A delte query will be automatically run.</p>

</body>

</html>