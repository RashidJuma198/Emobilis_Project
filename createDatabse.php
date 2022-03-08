<?php
$servername ="localhost";
$username = "root";
$password ="";

//Connect To php
 
$conn =New mysqli($servername,$username,$password);

//Checking if the connection has been established
if($conn->connect_error){
    die("Error While Connecting To Server :".$conn->connect_error);
}
//Create a database named Kisiwa

$sql ="CREATE DATABASE Kisiwa;";

//check whether database has been created successfully
if($conn->query($sql)===TRUE){
 echo "Databse Created Successfully";
}else{
    echo "Database has Not been Created:".$conn->connect_error;
}
?>
