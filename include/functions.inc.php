<?php

function emptyInputSignup($fullname,$adm,$email,$username,$password,$repeatpassword){
    $result;
    if(empty($fullname) || empty($adm) || empty($username) || empty($password) || empty($repeatpassword)){
        $result=True; 
    }else{
        $result=False;   
    }
    return  $result;
}
function InvalidUsername( $username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
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
function Usernameexist($conn,$username,$email){
   $sql =" SELECT*FROM password WHERE User_ID=? or Email=? ;";
   $stmt=mysqli_stmt_init($conn);

   if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location:JUMA/signupform.php?error=stmtfailed");
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

function createUser($fullname,$adm,$email,$username,$password){
    #$hashpwd=password_hash($password,PASSWORD_DEFAULT);
    $sql= "insert into password(Full_Names,Admission_No,Username,Email,Password) 
    values('$fullname','$adm','$email',
    '$username','$hashpwd');";
    return $sql;
    

 } 
 
