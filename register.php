<!DOCTYPE html>
<html>
<?php 
include 'init.php';
include 'style.php';
include 'header.php';	
?>


<?php

if(empty($_POST) === false){

	if(user_exists($db_handle, $_POST['uname']) === true){
		$register_errors[] = "The username: '". $_POST['uname']. "' is in use<br>";
	}

	if(preg_match("/\s/", $_POST['uname']) === 1 || preg_match("/\s/", $_POST['psw']) === 1){
		$register_errors[] = "Your username or password must not contain any spaces<br>";
	}

	if(strlen($_POST['uname']) < 2){
		$register_errors[] = "Username too short";
	}else if(strlen($_POST['uname']) > 20){
		$register_errors[] = "Username too long<br>";
	}

	if(strlen($_POST['psw']) < 4){
		$register_errors[] = "Password must be at least length of 4<br>";
	}else if(strlen($_POST['psw']) > 20){
		$register_errors[] = "Password too long<br>";
	}

	if($_POST['psw'] !== $_POST['psw_again']){
		$register_errors[] = "Passwords do not match<br>";
	}

}
?>

<h2>Register</h2>
<body>
<?php

if(empty($register_errors) === true){
	echo "Fields marked with an asterisk(*) are required<br>";
	if(empty($_POST) === false && user_exists($db_handle, $_POST['uname']) == false){
		$register_data = array(
			'Username'	=> $_POST['uname'],
			'Password' 	=> md5($_POST['psw']),
			'Email'		=> $_POST['email'],
			'First_Name'=> $_POST['first_name'],
			'Last_Name' => $_POST['last_name']
			);
		
		register_user($db_handle, $register_data);
	}
}else{
	echo outputErrors($register_errors);
}
?>

<div class="container">
	<form action="" method="POST">
		<ul>
		
			<li>
				<label for="first_name"><b>First Name*: </b></label>
				<input type="text" placeholder="Enter Username" name="first_name" required>
			</li>
		
			<li>
				<label for="last_name"><b>Last Name*: </b></label>
				<input type="text" placeholder="Enter Username" name="last_name" required>
			</li>
		
			<li>
				<label for="uname"><b>Username*: </b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
			</li>
			<li>
				<label for="psw"><b>Password*: </b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
			</li>
			<li>
				<label for="psw_again"><b>Confirm Password*: </b></label>
				<input type="password" placeholder="Enter Password" name="psw_again" required>
			</li>
			<li>
				<label for="email"><b>Email: </b></label>
				<input type="text" placeholder="Enter Email" name="email">
			</li>
			<li>
				<input type="submit" value = "Register">
			</li>
		</ul>  	
	</form>
</div>
</body>
</html>



