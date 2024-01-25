<?php 

$hostname = "localhost";
$db_username = "root";
$password = "";
$dbname = "estore";

$conn = mysqli_connect($hostname, $db_username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_errno());
} else {
    // echo "Connection successful";
}