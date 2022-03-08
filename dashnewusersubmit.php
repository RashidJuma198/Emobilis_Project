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
    $user=$_POST['user'];
    $depart=$_POST['department'];
    $fullname=$_POST['fullnames'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['password2'];

    if(!($password===$repassword)){
        echo "incorrect password";
        header("Location:dashnewuser.php?error=passworddontmatch");
        exit();
    }
    function InvalidEmail( $email){
        $result;
        if(!filter_var( $email,FILTER_VALIDATE_EMAIL)){
            $result=True; 
        }else{
            $result=FALSE;   
        }
        return  $result;
    }
    if(InvalidEmail($email)){
        header("location:signupform.php?error=InvalidEmail");
        exit();
    }


    function uidExist($con,$username,$email ){
        $sql =" SELECT*FROM passwords WHERE User_ID=? or Email=?;";
        $stmt=mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
         header("location:signupform.php?error=stmtfailed");
         exit();
        }
        mysqli_stmt_bind_param($stmt,"ss",$username,$email);
        mysqli_stmt_execute($stmt);
     
        $resultData=mysqli_stmt_get_result($stmt);
     
        if($row=mysqli_fetch_assoc($resultData)){
           return $row;
        }else{
            $result=false;
            return $result;
        }
     mysqli_stmt_close($stmt);
     }




    if(uidExist($conn,$email,$username)!==false){
        header("location:signupform.php?error=Usernametaken");
        exit();
    }

   # $hashpwd=password_hash($password,PASSWORD_DEFAULT);

    $sql="INSERT INTO users(Users,Department,Full_Names,Email,Username,Passwords)
    VALUES('$user','$depart','$fullname','$email','$username','$password');";
     
   $query=mysqli_query($conn,$sql);

   if($query==TRUE){
       header("Location:dash1.php");
   }else{
    header("Location:dash1.php").$conn->error;
   }
   
}
?>
