<?php  session_start();
include "functions.inc.php";

//check login and log admin in
if (isset($_POST['check_login'])) {
	$email = sanitize($_POST['email']);
	$password = sanitize ($_POST['password']);
	$password = sha1(md5($password));
	$checkusser = mysqli_query($conn,"SELECT email from admin where `email` = '$email' and `password` = '$password'");
	if (mysqli_num_rows($checkusser) > 0) {
		$_SESSION['admin_email'] = $email; 
		echo "yes";
		

	}else{
		echo "<div class='red-text'>You don't have any admin priviledges to access the dashboard</div>";
	}
}

if (isset($_POST['addmeal'])) {
	$name = sanitize ($_POST['name']);
	$price = sanitize ($_POST['price']);
	$description = sanitize ($_POST['description']);
	$file = $_FILES['file'];
	$tmp_name = $file['tmp_name'];
	$name = $file['name'];
	$size = $file['size'];
	$type = $file['type'];
	$allowed_ext = array("jpg", "png","gif","jpeg");
	$img_ext = explode('/', $type);
	$img_ext = strtolower(end($img_ext));
	if (in_array($img_ext, $allowed_ext)) {
		$img_ext = $img_ext;
	}else{
		echo "Image type not allowed. (Please upload an image with the following extensions: .jpg, .png, .jpeg or .gif)";
		$err_flag = true;
		}
	if ($size > 512000) {
		echo "Your image size is too large. Please select an image below 500kb file size.";
		$err_flag = true;
	}
	if (!isset($err_flag)) {
		$upload_date= time();
		$random = rand(0,10000);
		$customedName = $upload_date.$random.'.'.$img_ext;
		$file_dir = "../../uploads/".$customedName;
		$send = move_uploaded_file($tmp_name, $file_dir);
		if ($send) {
			$insertmeal =  mysqli_query($conn,"INSERT INTO foods (name,description,picture,price) VALUES ('$name','$description','$customedName','$price')");
		}
		if ($insertmeal) {
			echo("Meal added successfully");
		}
	}
}

 ?>