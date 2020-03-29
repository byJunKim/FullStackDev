<?php
include 'core/init.php';

if(user_exists("kbj6219") == true){
	echo "exists";
}else{
	echo "doesn't exist?";
	die();
}

	 if(empty($_POST) == false ){
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		echo "exists";
	 }
	 
	 if(empty($username) || empty($password) || empty($email) ){
		$error[] = "None of them can be empty";
	 }else if(user_exists($username) == false){
		$error[] = "User does not exist";
	 }
	 
?>