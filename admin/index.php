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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='../../font/fa/css/font-awesome.min.css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
<!--navigation-->
<!-- banner1 -->
			<h3 style="text-align:center; margin: 60px 0 0 10px;">LOG IN</h3>
<!-- //banner1 -->
<!-- mail -->
	<div class="mail" style="padding:0 0 2em 0;border: 1px solid #eee;width:70%;height: 100%;margin:0 auto">
			<div class="agileinfo_mail_grids">
				<div class="col-md-12 agileinfo_mail_grid_left">
					<form>
						<input type="email" name="email" placeholder="Email" required="" id="email">
						<input type="password" name="password" placeholder="Password" required="" id="password">
						<input type="submit" name="submit" value="Submit" id="submit">
					</form>
					<div id="available"></div>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //mail -->
<script src="js/login.js"></script>

<?php include "inc/footer.inc.php";?>