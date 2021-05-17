<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo base_url(); ?>lib/images/logo.ico" type="image/x-icon">
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

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '313900923577661'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1" 
	src="https://www.facebook.com/tr?id=313900923577661&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"9d45829279d13443ee36c6709396eb7e"})});</script>
</head>


<body>
