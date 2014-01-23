<?php 
		include "config.php";


	$email = $_POST['email'];
	$pass = $_POST['password']; 
	$query = "Select * From user Where user_password = '$pass' and user_email = '$email' ";
	$sql = mysql_query($query);
	if($sql){
		if(mysql_num_rows($sql)>0){
			echo "Successfully Login";
		}
		else{
			echo "Not Login";
		}
			}
 ?>