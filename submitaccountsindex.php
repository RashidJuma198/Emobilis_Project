<?php
include('connection.php');  
 $username = $_POST['user'];  
 $password = $_POST['pass'];  
   
	 //to prevent from mysqli injection  
	 $username = stripcslashes($username);  
	 $password = stripcslashes($password);  
	 $username = mysqli_real_escape_string($con, $username);  
	 $password = mysqli_real_escape_string($con, $password);  
   
	 $sql = "select *from users where Username = '$username' and Passwords = '$password'";  
	 $result = mysqli_query($con, $sql);  
	 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	 $count = mysqli_num_rows($result);  
	   
	 if($count == 1){  
		
		 header("Location:viewaccounts.php"); 
	 }  
	 else{ 
		header("Location:accountsindex.php");

		
	 }     
	 ?>