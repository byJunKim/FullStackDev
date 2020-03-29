<?php
include 'core/init.php';
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Prepr Login</h2>

<div class="container">
	<form action="login.php" method="POST">
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
				<input type="submit" value="log in">
			</li>
			<li>
				<button><a href="register.php">Register</a></button>
			</li>
		</ul>  	
	</form>
</div>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
