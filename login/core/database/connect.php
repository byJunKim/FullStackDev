<?php
$connectionError = "There's problem with connection";

$db_handle = new mysqli('localhost', 'root', '', 'login');

//$db_handle = mysqli_connect('localhost', 'root', '', 'login') or die(connectionError);
//mysqli_select_db($db_handle, 'login') or die(connectionError);
if ($db_handle->connect_errno) {
    die("Connection failed: " . $db_handle->connect_error);
}else{
	echo "Connection successful";
}
?>