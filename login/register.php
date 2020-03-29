<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Prepr Login</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div class="container">
	<form action="register.php" method="POST">
		<ul>
			<li>
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
			</li>
			<li>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
			</li>
			<li>
				<label for="email"><b>Email</b></label>
				<input type="email" placeholder="Enter Email" name="email" required>
			</li>
			<li>
				<input type="submit">
			</li>
		</ul>  	
	</form>
</div>