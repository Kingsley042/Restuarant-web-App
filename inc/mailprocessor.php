<?php

mysql_connect("localhost", "root", "") or die("Couldn't connect to SQL server");
	$x= mysql_select_db('vivvaa') or die ("Couldn't connnect to database");


	
	
	if(isset($_POST['mailsubmit'])){
		$mail=($_POST['submail']);
		$sanitized_email = filter_var($mail, FILTER_SANITIZE_EMAIL);
		if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL))
		{		
		$upload = mysql_query("INSERT INTO newsletter (`email`) VALUES ('$mail')");
		
	} else{
		echo "incorrect mail format!!";
	}
	}


?>