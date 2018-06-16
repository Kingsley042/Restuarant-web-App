<?php include "inc/header.inc.php";?>

<body>
	<!-- banner1 -->
			<h3 style="text-align:center; margin: 100px 0 0 10px;">Add Meal</h3>
<!-- //banner1 -->
<!-- mail -->
	<div class="mail" style="padding:0 0 2em 0;border: 1px solid #eee;width:70%;height: 100%;margin:0 auto">
			<div class="agileinfo_mail_grids">
				<div class="col-md-12 agileinfo_mail_grid_left">
					<form id="meal">
						<input type="text" name="name" placeholder="name" required="" id="name">
						<input type="text" name="price" placeholder="price" required="" id="price">
						<input type="hidden" name="addmeal" value="1">
						<textarea name="description" placeholder="description..." required=""></textarea>
						<input type="file" name="file" placeholder="file" required="" id="file"><br>
						<div id="error"></div>
						<input type="submit" name="submit" value="Submit" id="submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //mail -->
</body>
<script type="text/javascript" src="js/add.js"></script>
<?php include "inc/footer.inc.php";?>