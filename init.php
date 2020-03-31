<?php
session_start();

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$login_errors = array();
$register_errors = array();

?>