<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      //save to database
    	$user_id = random_num(20);
    	$query = "insert into users(user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con,$query);
        
        header("Location: login.php");
        die;
    }else
    {
    	echo "please enter valid information";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="loginstyle.css">
</head>
<body>
	 <div class="title"><h2>ICONIC HOTEL ONLINE ROOM RESERVATION SYSTEM</h2>
        <h3><marquee>WELLCOME TO ICONIC HOTEL ONLINE ROOM RESERVATION SYSTEM
         A SPACIOUS COMFORTABLE ZONE WITH MODERN ENTERNAINMENT FACILITIES!!</marquee><h3>
    </DIv><br><br>


	<div id="box">
		
      <form method="post">
      	<div style="font-size: 20px;margin: 10px;color: white">Signup</div>

      	<input id="text" type="text" name="user_name" placeholder="user_name"><br><br>
      	<input id="text" type="password" name="password" placeholder="password"><br><br>
      	<input id="button" type="submit" value="Signup"><br><br>
      	<a href="login.php">Click to Login</a><br><br>
      </form>


	</div>

</body>
</html>