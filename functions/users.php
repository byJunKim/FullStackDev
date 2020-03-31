<?php
function user_exists($db_handle, $username){	
	$username = sanitize($db_handle, $username);
	//echo "username: ".$username."<br>";
	$sql = "SELECT UID FROM users WHERE Username = '$username'";
	
	$query = $db_handle->query($sql);
	//echo "Num of Users: ".mysqli_num_rows($query)."<br>";
	return (mysqli_num_rows($query) == 0) ? false : true;
	//return (mysql_result($query, 0) == 1) ? true : false;

}

function user_id_from_username($db_handle, $username){

	$username = sanitize($db_handle, $username);
	$sql = "SELECT UID FROM users WHERE Username = '$username'";
	
	$result = $db_handle->query($sql);
	return $result;

}

function login($db_handle, $username, $password){
	$username = sanitize($db_handle, $username);
	$userID = user_id_from_username($db_handle, $username);
	$userID = mysqli_fetch_array($userID);
	$password = md5($password);
	$sql = "SELECT UID FROM users WHERE Username = '$username' AND Password = '$password'";
	$result = $db_handle->query($sql);
	return (mysqli_num_rows($result) != 0) ? $userID : false;
}

function register_user($db_handle, $register_data){
	
	array_walk($register_data, 'array_sanitize', $db_handle);
	$keys = implode(", ", array_keys($register_data));
	$data = "'".implode("', '", $register_data)."'";
	$sql = "INSERT INTO users ($keys) VALUES ($data)";
	
	if(mysqli_query($db_handle, $sql)){
		echo "User data successfully inserted";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_handle);
	}
	header("location:../index.php");

}

?>