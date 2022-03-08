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
/*Creating variable that will hold form data and
checking if the method has been set to POST if it's true
 the values from the form is assigned to variables*/
 if(isset($_POST['submit'])){
    if(empty($_POST['Class']) || empty($_POST['mmodule']) || empty($_POST['percentage']) ||
    empty($_POST['examfee']) || empty($_POST['approved']) || empty($_POST['reason']) ||
    empty($_POST['hodname']) || empty($_POST['date'])|| empty($_POST['feebalance']) ||
    empty($_POST['examfeepaid']) || empty($_POST['examfeenotpaid']) || empty($_POST['accountantname']) ||
    empty($_POST['accountsperiod']) || empty($_POST['comments']) || empty($_POST['si']) ||
    empty($_POST['timeaccepted'])){

    
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
            $feebalance=$_POST['feebalance'];
            $examfeepaid=$_POST['examfeepaid'];
            $examfeenotpaid=$_POST['examfeenotpaid'];
            $accountantname=$_POST['accountantname'];
            $datechecked=$_POST['accountsperiod'];
            $index=$_POST['IndexNumber'];
            $photo=$_POST['photo'];
            $comments=$_POST['comments'];
            $sign=$_POST['si'];
            $datecheckedprincipal=$_POST['timeaccepted'];
            
           
/*
  
 $sql ="INSERT INTO tablestudent(First_Name,Middle_Name,Last_Name,ADM_No,Exam_Series,Mobile_Phone,Department,Module,
            Diploma,ID_No,Latest_Knec_Slip,Birth_Cert_No ,Class,Hod_Module,Percentage_Class_Attendance,Examination_Fee,Approved,
            Reason_If_Not_Approved,Hod_Name,Period_Checked_By_Hod,Fee_Balance,Exam_Fee_Paid,Exam_Fee_Not_Paid,Accountant_Name,Date_Checked_By_Accountant,
            Comment_By_Principal,signa,Date_Checked_By_Principal)
            VALUES('$firstname','$middlename','$lastname','$adm','$series','$phone','$department','$module','$diploma','$idcard','$knec','$birth'
            ,'$Class','$Hod_Module','$percentage','$examfee','$approved','$reason','$hodname','$periodchecked','$feebalance','$examfeepaid',
            '$examfeenotpaid','$accountantname','$datechecked','$comments','$sign','$datecheckedprincipal');"; 
   
*/

            //Entering values to the database

            $sql ="INSERT INTO tablestudent(First_Name,Middle_Name,Last_Name,ADM_No,Exam_Series,Mobile_Phone,Department,Module,
            Diploma,ID_No,Latest_Knec_Slip,Birth_Cert_No,Class,Hod_Module,Percentage_Class_Attendance,Examination_Fee,Approved,
            Reason_If_Not_Approved,Hod_Name,Period_Checked_By_Hod,Fee_Balance,Exam_Fee_Paid,
            Exam_Fee_Not_Paid,Accountant_Name,Date_Checked_By_Accountant,Photo_No,Index_No,
            Comment_By_Principal,signa,Date_Checked_By_Principal )
            VALUES('$firstname','$middlename','$lastname','$adm','$series',
            '$phone','$department','$module','$diploma','$idcard','$knec','$birth','$Class','$Hod_Module','$percentage','$examfee','$approved','$reason','$hodname','$periodchecked','$feebalance','$examfeepaid',
            '$examfeenotpaid','$accountantname','$datechecked','$index','$photo','$comments','$sign','$datecheckedprincipal');";
            
         
            
         //$results =mysqli_query($conn,$sql);  
                  
         
         //check whether Record has been entered successfully
            if($conn->query($sql)===TRUE){
               echo "Record has been entered successfully";
               header("location:dash1.php");
                  }else{
                  echo "Record has Not been entered successfully:".$conn->error;
               }
               }else{
                  header("location:dash1.php");
               }
            }  
       
$conn->close();
?>