<?php
function user_exists($username){
	echo "b.a";
	
	//$username = sanitize($username);
	
	echo "b.b";
	$sql = "SELECT * FROM 'users'";
	echo '0';
	/*
	if ($db_handle -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $db_handle -> connect_error;
	  exit();
	}else{
		echo "Connection still good"
	}*/
	
	$query = mysqli_query($db_handle, $sql);
	echo $db_handle;
	if($query == false){
		echo "FALSE";
		echo "error: ".mysqli_error($db_handle);
	}else{
		echo "query true";
	}
	return (mysqli_num_rows($query) == 0) ? false : true;
	//return (mysql_result($query, 0) == 1) ? true : false;

return 1;
}
?>