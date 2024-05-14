<?php
//database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_project";
$conn = new mysqli($servername, $username, $password, $database);
// check information
if($conn->connect_error){
die("connection failed:" . $conn->connect_error);


}?>