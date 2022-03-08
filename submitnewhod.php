<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="Kisiwa";
//Connect To php
 
$conn =mysqli_connect($servername,$username,$password,$dbname);

//Checking if the connection has been established
if($conn->connect_error){
    die("Error While Connecting To Server :".$conn->connect_error);
}

if(isset($_POST['save'])){
   
    $depart=$_POST['department'];
    $fullname=$_POST['fullnames'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['password2'];

    if(!($password===$repassword)){
        
        header("Location:newhod.php?error=passworddontmatch");
        exit();
    }
   

   # $hashpwd=password_hash($password,PASSWORD_DEFAULT);

    $sql="INSERT INTO hod(Department,Full_Names,Email,Username,Passwords)
    VALUES('$depart','$fullname','$email','$username','$password');";
     
   $query=mysqli_query($conn,$sql);

   if($query==TRUE){
       header("Location:dash1.php");
   }else{
    header("Location:newhod.php");
   }
   
}
?>
