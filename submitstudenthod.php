<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="Kisiwa";
//Connect To php
 
$conn =New mysqli($servername,$username,$password,$dbname);

//Checking if the connection has been established
if($conn->connect_error){
    die("Error While Connecting To Server :".$conn->connect_error);
}
/*Creating variable that will hold form data and
checking if the method has been set to POST if it's true
 the values from the form is assigned to variables*/
 
    $firstname =$_POST["fname"];
    $middlename =$_POST["mname"];
    $lastname =$_POST["lname"];
    $adm =$_POST["ADM"];
    $series =$_POST["series"];
    $phone =$_POST["phone"];
    $department=$_POST["department"];
    $class=$_POST["module"];
    $diploma=$_POST["diploma"];
   

    $idcard =($_FILES['Identification']['name']);
    $knec =($_FILES["knec"]['name']);
    $birth =($_FILES["birth"]['name']);

   


    //Entering values to the database

    $sql ="INSERT INTO studentdetails(firstName,middleName,lastName,
    admNo,examSeries,phoneNo,Department,Class,Module,Approve,IDcard,LatestKnecSlip,BirthCertificate)
    VALUES('$firstname','$middlename','$lastname','$adm',
    '$series','$phone','$department','$class','$diploma','$idcard','$knec','$birth');";

   
 
  //check whether Record has been entered successfully
  if($conn->query($sql)===TRUE){
    echo "Record has been entered successfully";
       }else{
       echo "Record has Not been entered successfully:".$conn->error;
     }
     if(isset($_POST['submit2'])){
        header("location:view.php");
     }

 
$conn->close();
?>