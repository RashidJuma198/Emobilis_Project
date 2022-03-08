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
$stud ="CREATE TABLE StudentDetails(
    index_No INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    middleName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    admNo VARCHAR(50) NOT NULL,
    examSeries date,
    
); ";
//check whether Table has been created successfully
if($conn->query($stud)===TRUE){
    echo "Table Created Successfully";
   }else{
       echo "Table has Not been Created:".$conn->error;
   }
?>
