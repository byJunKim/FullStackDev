<?php
include 'core/init.php';
?>


<!DOCTYPE html>
<html>

<?php
include 'core/style.php';
include 'core/header.php';
?>

<body>
<?php


if(isset($_SESSION['UID'])){
	include 'core/loggedin.php';
}else{
	include 'core/login.php';
}
?>


</body>
</html>
