<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url(); ?>lib/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<!--     <link rel="stylesheet" href="<?php // echo base_url(); 
																				?>lib/css/fonts.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>lib/css/master.css">
	
	<?php if(isset($css)): ?>
		<?php foreach($css as $val): ?>
			<link rel="stylesheet" href="<?php echo $val; ?>">
		<?php endforeach; ?>
	<?php endif; ?>
</head>

<body>


