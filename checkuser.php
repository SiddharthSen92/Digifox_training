<?php 
//double slash is used for comment in php
//in this php, we check the input datas
//in php language, to display information, we need to use the command called "echo".
//save the datas in a variable. two variables, one for username & the other for password.

$username = $_GET['myusername']; //when we use GET method in form; inside the square brackets, we will use the name of the input 

$password = $_GET['mypassword'];

echo $username.", ".$password;




?>