<?php
$con =mysqli_connect("localhost","root","","Kisiwa");
if(!$con){
    die("Connection Error");
}
 
if(isset($_POST['update3'])){
   $userid =$_GET['ID'];
   $firstname =$_POST["fname"];
   $middlename =$_POST["mname"];
   $lastname =$_POST["lname"];
   $adm =$_POST["ADM"];
   $series =$_POST["series"];
   $phone =$_POST["phone"];
   $department=$_POST["department"];
   $module=$_POST["module"];
   $diploma=$_POST["diploma"];
   $idcard =$_POST['idno'];
   $knec =$_POST['latestKnecslip'];
   $birth =$_POST['birthcertno'];
   $Class=$_POST['Class'];
   $Hod_Module=$_POST['mmodule'];
   $percentage=$_POST['percentage'];
   $examfee=$_POST['examfee'];
   $approved=$_POST['approved'];
   $reason=$_POST['reason'];
   $hodname=$_POST['hodname'];
   $periodchecked=$_POST['date'];

 /*  $feebalance=$_POST['feebalance'];
   $examfeepaid=$_POST['examfeepaid'];
   $examfeenotpaid=$_POST['examfeenotpaid'];
   $accountntname=$_POST['accountantname'];
   $datecheckbyaccounts=$_POST['accountsperiod'];
   */
    
   
  /*,Fee_Balance='".$feebalance."' ,Exam_Fee_Paid='".$examfeepaid."',Exam_Fee_Not_Paid='".$examfeenotpaid."'
  ,Accountant_Name='".$accountntname."',Date_Checked_By_Accountant='".$datecheckbyaccounts."'*/

   $query = "UPDATE tablestudent SET First_Name='".$firstname."'
   ,Middle_Name='".$middlename."',Last_Name='".$lastname."'
   ,ADM_No='".$adm."',Exam_Series='".$series."'
   ,Mobile_Phone='".$phone."',Department='".$department."',Module='".$module."',Diploma='".$diploma."'
   ,ID_No='".$idcard."'
   ,Latest_Knec_Slip='".$knec."' ,Birth_Cert_No='".$birth."',Class='".$Class."',Hod_Module='".$Hod_Module."'
   ,Percentage_Class_Attendance='".$percentage."' ,Examination_Fee='".$examfee."',Approved='".$approved."'
   ,Reason_If_Not_Approved='".$reason."',Hod_Name='".$hodname."',Period_Checked_By_Hod='".$periodchecked."'
 
    WHERE User_ID='".$userid."';";
                              
   $result =mysqli_query($con,$query);
   if($result){
       header("location:icthod.php");
   }else{
       echo "Check your Query".connect_error();
   }


}else{
    header("location:icthod.php");
}

?>