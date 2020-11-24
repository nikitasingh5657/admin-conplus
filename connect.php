<?php 
error_reporting(0);
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="conplusinvest"; // Database name

	
// $host="localhost"; // Host name
// $username="apcdeufi_test"; // Mysql username
// $password="rudraexpo@123"; // Mysql password
// $db_name="apcdeufi_conplusinvest"; // Database name

$conn = new mysqli($host, $username, $password, $db_name);
mysqli_report(MYSQLI_REPORT_ERROR);

?>