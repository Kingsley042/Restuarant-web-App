<?php include 'admin/inc/functions.inc.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Mrs. Timini Restaurant</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='../font/fa/css/font-awesome.min.css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!--navigation-->
<div class='navbar navbar-default navbar-fixed-top'>
	<div class="top-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h2><a class="navbar-brand" href="index.php">Mrs. Timini</a></h2>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--shylock">
						<ul class="nav navbar-nav link-effect-7" id="link-effect-7">
							<li><a href="./" data-hover="Home">Home</a></li>
							<li><a href="#meal" data-hover="Our menu" class="scroll">Our Menu</a></li>
							<li><a href="#services" data-hover="Services" class="scroll">Services</a></li>
							<li><a href="#about" data-hover="About Us" class="scroll">About Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>	
	</div>	
	</div>
	
<!--navigation-->
<!-- banner1 -->
	