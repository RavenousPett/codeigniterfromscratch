<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>Title of the document</title>
</head>

<body>
	<p>Welcome to the home</p>

	<?php foreach ($row as $r) : ?>
		
		<h1><?php echo $r->title; ?></h1>	
		<div>
			<?php echo $r->contents; ?>
		</div>
	
	<?php endforeach ?>

</body>

</html>