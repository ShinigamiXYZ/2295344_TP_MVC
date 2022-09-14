<?php

$hostname= "localhost";
$database = "userforum_2295344";
$username = "root";
$password = "";
$port = 3306;


$conn= mysqli_connect($hostname, $username, $password, $database);
if(!$conn) 
 {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_set_charset($conn, "utf8");

?>

