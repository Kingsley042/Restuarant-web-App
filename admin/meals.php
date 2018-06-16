<?php include 'inc/header.inc.php'; ?>

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
							<img src="../uploads/<?php echo($picture); ?>" alt=" " class="img-responsive" />
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
<?php include 'inc/footer.inc.php'; ?>
