<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="Kisiwa";
//Connect To php
 
$conn =New mysqli($servername,$username,$password,$dbname);

//Checking if the connection has been established
if($conn->connect_error){
    die("Error While Connecting To Server :".$conn->connect_error);
}
?>
