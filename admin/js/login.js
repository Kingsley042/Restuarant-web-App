$('#submit').click(function (e) {
     e.preventDefault();
	email = $("#email").val();
	password = $("#password").val();
	if (password != "" && email !="") {
		$.post('inc/process.php',{check_login:1,email:email,password:password},function (data) {
       if (data ==='yes') {
       	location.href = "dashboard.php";
       }else{
       	 $("#available").html(data);
       }
    	});
	}
	
})