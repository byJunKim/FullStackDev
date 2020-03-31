<?php
function sanitize($db_handle, $data){
	return mysqli_real_escape_string($db_handle, $data);
}

function array_sanitize(&$value, &$key, $db_handle){
	$value = mysqli_real_escape_string($db_handle, $value);
	$key = mysqli_real_escape_string($db_handle, $key);
}

function outputErrors($errors){
	$output = array();
	
	foreach ($errors as $error){
		$output[] = '<li>'.$error.'</li>';
	}
	return '<ul>'.implode('',$output).'<ul>';
}


?>