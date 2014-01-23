<?php 
		include "config.php";

	$name = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$cpass = $_POST['cpassword'];
	
	$query = "Insert INTO user(user_fname,user_lname,user_password,user_email ) VALUES ('$name','$lname','$pass','$email') ";
	$sql = mysql_query($query);
	if($sql){
		header("location:home.php");
	}
 ?>