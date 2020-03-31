<!DOCTYPE html>
<html>
<?php
//include 'style.php';
if(empty($_POST) == false ){
	$username = $_POST['uname'];
	$password = $_POST['psw'];

	if(empty($username) || empty($password)){
		$login_errors[] = "None of the fields can be empty<br>";
	}else if(user_exists($db_handle, $username) == false){
		$login_errors[] = "User does not exist<br>";
	}else{
		$login = login($db_handle, $username, $password);
		if($login === false){
			
			$login_errors[] = "Login Failed<br>";
			$login_errors[] = "Please Try Again or Register<br>";
		}else{
			$_SESSION['UID'] = $login;
			header('Location:index.php');
			exit();
		}
	}
}
?>

<h2>Login</h2>

<?php
if(empty($login_errors) === true){
	echo "Please type the username and password<br>";
}else{
	echo outputErrors($login_errors);
}

?>

<body>
<div class="container">
	<form method="POST">
		<ul>
			<li>
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname">
			</li>
			<li>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" >
			</li>
			<li>
				<input type="submit" value="log in" class = 'button' >
			</li>
			<li>
				
				<button><a href='core/register.php'>Register</a></button>
			</li>
		</ul>  	
	</form>
</div>
</body>
</html>

