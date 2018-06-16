<?php include "inc/header.inc.php";?>
<div class="clearfix"> </div>
<div class="clearfix"> </div>
<br/>
<br/>
<br/>
<div class="banner">
		<div class="w3l_banner_info">
			<div class="container">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3l_banner_info_grid">
									<h3>a satisfied customer is the best business strategy of all</h3>
									<p>This is our aim at Timini Restaurants</p>
								</div>
							</li>
							
						</ul>
					</div>
				</section>
						<!-- flexSlider -->
							<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
							<script defer src="js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
						<!-- //flexSlider -->
				<div class="w3ls_banner_scroll">
					<a href="#blog" class="scroll"></a>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
	<div class="services"  id="meal">
		<div class="container">
			<h3 class="head">Our foods and drinks</h3>
			<p class="urna">Below is a list of services we offer at Vivvaa</p>
						<div class="agileinfo_services_grids">
				<?php 
					$getmeals = mysqli_query($conn,"SELECT * FROM foods");
					if (mysqli_num_rows($getmeals) > 0) {
						while ($row = mysqli_fetch_array($getmeals)) {
						$name = $row['name'];
						$description = $row['description'];
						$picture= $row['picture'];
						$price= $row['price'];
					 ?>
					<div class="col-md-4 agileinfo_services_grid">
						<div class="agileinfo_services_grid1">
							<img src="uploads/<?php echo($picture); ?>" alt=" " class="img-responsive" />
							<p>
								<h4><?php echo($name); ?></h4>
								<p><?php echo($description); ?></p>
								<h4>Price: $<?php echo($price); ?></h4>
								<h4><a href="#" class="btn" style="background-color:#8B4513;color: white">Order</a></h4>
							</p>
						</div>
					</div>
					
				<?php } }else{
					echo("NO meals added yet");
				} ?>
			</div>
		</div>
	</div>
<!-- //steps -->

<!-- steps -->
	<div class="steps" id="services">
		<div class="container">
			<h3 class="head">Our Services</h3>
			<p class="urna">We are here to help;</p>
			<div class="wthree_steps_grids">
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Restaurant</h4>
					<p>We have a calling to make sure quality foods are cooked served to our customers with the best brands of drink</p>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Catering services</h4>
					<p>Do you need someone to help cook for you during an event? Look no further because this is what we do </p>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Event Planning</h4>
					<p>We also help individuals, groups, etc. plan and organise thier events at a very pocket-friendly cost</p>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //steps -->

<!-- skills -->
	<div class="skills" id="about">
		<div class="container">

			<h3 class="head">About us?</h3>
			<p class="urna">Brief description</p>
			<br>
				We are a world-class restaurant that offer assorted varieties of foods ranging from our local foods to foreign foods, drinks, snacks, wines and all you can think of.

		</div>
	</div>
<!-- //skills -->

<?php include "inc/footer.inc.php";?>
