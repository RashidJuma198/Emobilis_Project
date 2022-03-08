<?php

include_once 'connectsign.php';

if (isset($_POST['save'])) {
            $fullname= $_POST['fullnames'];
            $adm=$_POST['admnumber'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $repeatpassword=$_POST['repeatpassword'];
            $department=$_POST['department'];
            
            //$hashpwd=password_hash($password,PASSWORD_DEFAULT);
            $sql="INSERT INTO passwords(Full_Names,Admission_No,Email,Username,passwords,Department)
            VALUES('$fullname','$adm','$email','$username','$password','$department');";
            
            $query =mysqli_query($conn,$sql);

            if($query===TRUE){
                header("location:login.html");
                
                exit(); 
                 }else{
                header("location:signup.php?error=Record Not entered".$conn->error);
                
            }


         



           /* #require_once 'dbh.inc.php';
            require_once 'include/functions.inc.php';


            if(emptyInputSignup($fullname,$adm,$email,$username,$password,$repeatpassword)!==false){
                header("location:signupform.php?error=emptyinput");
                exit();
            }

            if(invalidUsername($username)!==false){
                header("location:signupform.php?error=invalidUsername");
                exit();
            }

            if(invalidEmail($email)!==false){
                header("location:signupform.php?error=invalidEmail");
                exit();
            }

            if(pwdMatch($password,$repeatpassword)!==false){
                header("location:signupform.php?error=passworddontmatch");
                exit();
            }

            if(Usernameexist($conn,$adm,$username)!==false){
                header("location:signupform.php?error=Usernametaken");
                exit();
            }

           createUser($conn,$fullname,$adm,$email,$username,$password);
            $hashpwd=password_hash($password,PASSWORD_DEFAULT);
            $sql ="insert into password(Full_Names,Admission_No,Email,Username,
            Password)values('$fullname','$adm','$email','$username','$hashpwd');";
        
            $result =mysqli_query($conn,$sql);
            header("location:signupform.php");
            exit();*/
            

 }
    


?>