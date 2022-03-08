<?php
/*
function emptyInputSignup($name,$adm, $username, $email, $password, $repeatpassword){
    $result;
    if(empty($name) || empty($adm) || empty($username) || empty($email) || empty($password) || empty($repeatpassword)){
        $result=True; 
    }else{
        $result=False;   
    }
    return  $result;
}
function InvalidUid( $username){
    $result;
    if(preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result=True; 
    }else{
        $result=False;   
    }
    return  $result;
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
function pwdMatch($password,$repeatpassword ){
    $result;
    if($password !==$repeatpassword){
        $result=True; 
    }else{
        $result=FALSE;   
    }
    return  $result;
}
function uidExist($con,$username,$email ){
   $sql =" SELECT*FROM login WHERE User_ID=? or Email=?;";
   $stmt=mysqli_stm_init($con);
   if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location:../ras/signup.php?error=stmtfailed");
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

function createUser($con,$name,$adm, $username, $email, $password){
    $sql =" insert into login(Full_Names,Adm_No,Username,Email,Password) values(?,?,?,?,?);";
    $stmt=mysqli_stm_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("Location:../ras/signup.php?error=stmtfailed");
     exit();
     $hashpwd=password_hash($password,PASSWORD_DEFAULT);
    }
    mysqli_stmt_bind_param($stmt,"sssss",'$name','$adm','$username','$email','$hashpwd');
    mysqli_stmt_execute($stmt);
 
    $resultData=mysqli_stmt_get_result($stmt);
 
    mysqli_stmt_close($stmt);
    header("Location:../ras/signup.php?error=none");
    exit();

 } 
 
*/