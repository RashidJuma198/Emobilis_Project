<?php
include('connection.php');  
 $username = $_POST['user'];  
 $password = $_POST['pass']; 
 $department = $_POST['department']; 
   
	 //to prevent from mysqli injection  
	 $username = stripcslashes($username);  
	 $password = stripcslashes($password);  
     $department = stripcslashes($department); 
     $username = mysqli_real_escape_string($con, $username);  
	 $password = mysqli_real_escape_string($con, $password);  
     $department = mysqli_real_escape_string($con, $department);  
   
	 $sql = "select *from hod where Username = '$username' and Passwords = '$password' and Department='$department'";  
	 $result = mysqli_query($con, $sql);  
	 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	 $count = mysqli_num_rows($result);  
	   
	 if($department=='Electrical Engineering'){
       header("location:electricalhod.php");
       exit();
     }
     if($department=='Building And Civil Engineering'){
        header("location:buildinghod.php");
        exit();
      }
      if($department=='Hospitality And Institutional Management'){
        header("location:hospitalityhod.php");
        exit();
      }

      if($department=='Information Communication And Technology'){
        header("location:icthod.php");
        exit();
      }
      if($department=='Automotive Engineering'){
        header("location:automotivehod.php");
        exit();
      }
      if($department=='Agriculture And Agricultural Engineering'){
        header("location:agriculturehod.php");
        exit();
      }
      if($department=='Applied Science And Medical'){
        header("location:appliedsciencehod.php");
        exit();
      }
      if($department=='Business Studies'){
        header("location:businesshod.php");
        exit();
      }
      if($department=='Liberal Studies'){
        header("location:liberalhod.php");
        exit();
      }
	 ?>