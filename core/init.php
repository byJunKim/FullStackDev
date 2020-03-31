<?php
session_start();
//echo "destory<br>";
////session_destroy();


//error_reporting(0);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$login_errors = array();
$register_errors = array();

?>