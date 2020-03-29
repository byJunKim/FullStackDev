<?php
session_start();
error_reporting(0);

require 'database/connect.php';
echo "a";
require 'functions/general.php';
echo "b";
require 'functions/users.php';
echo "c";
$errors = array();

?>