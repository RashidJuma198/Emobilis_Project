
<?php
$con =mysqli_connect("localhost","root","","Kisiwa");
if(!$con){
    die("Connection Error");
}

$UserId = $_GET['GetID'];
$query ="SELECT * FROM tablestudent WHERE User_ID='".$UserId."';";
$results =mysqli_query($con,$query);


while($row = mysqli_fetch_assoc($results)){
   $userid =$row['User_ID'];
   $firstname=$row['First_Name'];
   $middlename=$row['Middle_Name'];
   $lastname=$row['Last_Name'];
   $admno=$row['ADM_No'];
   $examseries=$row['Exam_Series'];
   $phoneno=$row['Mobile_Phone'];
   $department=$row['Department'];
   $module=$row['Module'];
   
   $diploma=$row['Diploma'];
   $idno=$row['ID_No'];
   $knecslip=$row['Latest_Knec_Slip'];
   $birthcertificate=$row['Birth_Cert_No'];
   $class=$row['Class'];
   $hodmodule=$row['Hod_Module'];
   $classattendance=$row['Percentage_Class_Attendance'];
   $examfee=$row['Examination_Fee'];
   $approved=$row['Approved'];
   $reason=$row['Reason_If_Not_Approved'];
   $hodname=$row['Hod_Name'];
   $periodchecked=$row['Period_Checked_By_Hod']; 

   $feebalance=$row['Fee_Balance'];
   $examfeepaid=$row['Exam_Fee_Paid'];
   $examfeenotpaid=$row['Exam_Fee_Not_Paid'];
   $accountantname=$row['Accountant_Name'];
   $checkedbyaccountant=$row['Date_Checked_By_Accountant'];

   $commentss=$row['Comment_By_Principal'];
   $signature=$row['Signa'];
   $dateview=$row['Date_Checked_By_Principal'];
   $index=$row['Index_No'];
   $photo=$row['Photo_No'];
}
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="student.css">
  
    <title>Examination</title>
</head>
<body style="background-color:rgb(148, 243, 4)">

    <div class="Title">
         <p>KISIWA TECHNICAL TRAINING INSTITUTE 
         <BR>UPDATE EXAMINATION CREDENTIAL'S</p>
    </div>
    <div class="studentname" >
        <form action="updateexamination.php?ID=<?php echo $userid?>" method="POST" enctype="multipart/form-data">
        <fieldset>
                <legend>Student Information.</legend>
            <label for="fname" class="fname" >First Name:</label>
            <input type="text" id="fname"  name="fname"  readonly class="ffname" value="<?php echo $firstname?>">
            <label for="Mname" class="Mname" >Middle Name:</label>
            <input type="text" id="Mname"  name="mname"   readonly class="mmname" value="<?php echo $middlename?>">
            <label for="Lname" class="Lname" >Last Name:</label>
            <input type="text" id="Lname"  name="lname"  readonly class="llname" value="<?php echo $lastname?>"><br><br>
 
            <label for="ADM" class="ADM" >ADM No:</label>
            <input type="text" id="ADM"  name="ADM" readonly  class="ADM" value="<?php echo $admno?>" ><br><br>
            <label for="series" class="series" >Exam Series:</label>
            <input type="date" id="series"  name="series" readonly class="series" value="<?php echo $examseries?>">
           <label for="Phone" class="Phone" >Mobile Phone :</label>
            <input type="number" id="Phone"  name="phone"  readonly class="phone" 
            value="<?php echo $phoneno?>" ><br><br>
            
       </fieldset><br><br>
            
       <!--  <fieldset>
            <legend>Department</legend>
              <input type="text" value="<?php echo $department?>">
                    <select name="department" id="department" value="<?php echo $department?>">
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Building And Civil Engineering">Building And Civil Engineering</option>
                        <option value="Hospitality And Institutional Management">Hospitality And Institutional Management</option>
                        <option value="Information Communication And Technology">Information Communication And Technology</option>
                        <option value="Automotive Engineering">Automotive Engineering</option>
                        <option value="Agriculture And Agricultural Engineering">Agriculture And Agricultural Engineering</option>
                        <option value="Applied Science And Medical">Applied Science And Medical</option>
                        <option value="Business Studies">Business Studies</option>
                    </select>
                    </fieldset>

   
      <fieldset>
            <legend>Module</legend>
            <input type="text" value="<?php echo $module?>">
            <select name="module" id="module"  value="<?php echo $module?>" >
            <option value="ARTISAN">ARTISAN</option>
            <option value="CERTIFICATE">CERTIFICATE</option>
            <option value="DIPLOMA">DIPLOMA</option>
            <option value="REGULAR">REGULAR</option>
            </select>
            <input type="text" value="<?php echo $diploma?>">
          <select name="diploma" id="diploma"  value="<?php echo $diploma?>" >
           <option value="MOD_I">MOD_I</option>
           <option value="MOD_II">MOD_II</option>
           <option value="MOD_III">MOD_III</option>
       </select> 
    </fieldset>-->

    <fieldset class="credentials">
        <label for="idno">ID_No:</label>
        <input type="text" name="idno" id="idno" readonly  value="<?php echo $idno?>" >
        <label for="latesKnecslip">Latest Knec Index No:</label>
        <input type="text" name="latestKnecslip" id="latesKnecslip" readonly value="<?php echo $knecslip?>" >
        <label for="birthcertno">Birth Certificate NO:</label>
        <input type="text" name="birthcertno" id="birthcertno" readonly value="<?php echo $birthcertificate?>" > 
    </fieldset><br><br>
    <fieldset class="hod">     
        <legend>Head Of Department</legend>
        <label for="Class">Class:</label>
        <input type="text" name="Class" id="Class" readonly  value="<?php echo $class?>" >
        <label for="mmodule">Module:</label>
        <input type="text" name="mmodule" id="mmodule" readonly   value="<?php echo $hodmodule?>">
        <label for="percentage">Percentage Class Attendance:</label>
        <input type="number" name="percentage" id="percentage" readonly  value="<?php echo $classattendance?>"><br><br>
        <label for="examfee">Examination Fee:</label>
        <input type="number" name="examfee" id="examfee" readonly  value="<?php echo $examfee?>">
        
       <!-- <select name="approved" id="approved" class="approved" readonly  value="<?php echo $approved?>">
            <option value="APPROVED" >APPROVED</option>
            <option value="NOT APPROVED" >NOT APPROVED</option>
        </select>-->
        <label for="reason">Reason (If Not Approved):</label>
        <input type="text" name="reason"  id="reason"  readonly  value="<?php echo $reason?>"><br><br>
        <label for="hodname">H.O.D Name:</label>
        <input type="text" name="hodname" id="hodname"  readonly  value="<?php echo $hodname?>">
        <label for="period">Date Checked:</label>
        <input type="date" name="date" id="date" readonly   value="<?php echo $periodchecked?>">

   </fieldset><br><br>
  <fieldset class="hod">     
    <legend>Accounts Department</legend>
    <label for="feebalance">Fee Balance:</label>
    <input type="number" name="feebalance" id="feebalance" readonly  value="<?php echo $feebalance?>">
    <label for="examfeepaid">Exam Fee Paid:</label>
    <input type="number" name="examfeepaid" id="examfeepaid" readonly value="<?php echo $examfeepaid?>">
    <label for="examfeenotpaid">Exam Fee Not Paid:</label>
    <input type="number" name="examfeenotpaid" id="examfeenotpaid" readonly value="<?php echo $examfeenotpaid?>"><br><br>
    <label for="accountantname">Accountant Name:</label>
    <input type="text" name="accountantname" id="accountantname" readonly value="<?php echo $accountantname?>">
    <label for="accountsperiod">Date Checked:</label>
    <input type="date" name="accountsperiod" id="accountsperiod" readonly  value="<?php echo $checkedbyaccountant?>">
    
 </fieldset><br><br>

 <fieldset class="principal">     
        <legend>Principal</legend>
        <label for="comments">Comments:</label>
        <input type="text" name="comments" id="comments" readonly  value="<?php echo $commentss?>" >
        <label for="si">Signature:</label>
        <input type="text" name="si" id="si" readonly  value="<?php echo $signature?>">
        <label for="timeaccepted">Date Checked:</label>
        <input type="date" name="timeaccepted" id="timeaccepted" readonly  value="<?php echo $dateview?>" >

        </fieldset><br><br>
        
        <fieldset class="principal">     
            <legend>Examination Office</legend>
            <label for="IndexNumber">Index_Number:</label>
            <input type="text" name="IndexNumber" id="IndexNumber"  required value="<?php echo $index?>" >
            <label for="Photo">Photo_Number:</label>
            <input type="text" name="photo" id="photo" required value="<?php echo $photo?>" >
            </fieldset><br><br>
   <fieldset class="submission">
    <legend>Submission</legend>
    <button type="submit" id="submit" name="update" style="color:black" >UPDATE</button><br>
  
   </fieldset>
</form>           
</body>
</html>