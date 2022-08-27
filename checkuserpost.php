<?php 

$username = $_POST['myusername'];

$password = $_POST['mypassword'];

//my desired username is abc@123 and password is 123.

if ($username == "abc@123" && $password == "123") {
	//echo "Welcome to the site";
	//pop up using javascript
	?>
	<script type="text/javascript">
		alert("Welcome to the site");
		window.location.href = "home.php";
	</script>
	<?php

}else{
	//echo "Check username and password. Wrong Credentials!!";
	?>
	<script type="text/javascript">
		alert("Check username and password. Wrong Credentials!!");
		window.location.href = "index.php";
	</script>

	<?php
}

//echo $username.", ".$password;


?>