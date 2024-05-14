<?php
include "db_connect.php";
//get form data
$email = $_POST['email'];


$password = password_hash($_POST['password'],PASSWORD_DEFAULT);//HASH PASSWORD
$full_name = $_POST['full_name'];


//insert user into the database
$sql = "INSERT INTO signup (email,password, full_name )VALUES ('$email', '$password','$full_name');
if($conn->query($sql) ===TRUE){
    //close MySQL connection
    $conn->close();
    //redirect to the homepage
    header("Location:/education_resource_team/index.html");
    exit();//stop further execution
}else{
    echo "error:". $sql". "<br>". $conn->error;
    //close MySQL connection
    $conn->close();