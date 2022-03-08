<?php
include_once 'dashboard.php';

$con =mysqli_connect("localhost","root","","Kisiwa");
if(!$con){
    die("Connection Error");
}

$query ="SELECT *FROM tablestudent where Department ='Agriculture And Agricultural Engineering';";

$result =mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td,tr{
            border:2px solid  green;
            border-collapse:collapse;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Department</title>
    <link rel="stylesheet" a href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="student.css">
</head>
<body >
<br>
   
    <nav>
   
    <button><a href="dash1.php">ALL STUDENT'S</a> </button>
    <button><a href="dashagri.php">AGRICULTURE DEPT</a> </button>
    <button><a href="dashapplied.php">APPLIED SCIENCE DEPT </a> </button>
    <button><a href="dashauto.php">AUTOMOTIVE DEPT </a> </button>
    <button><a href="dashbusiness.php">BUSINESS DEPT </a> </button>
    <button><a href="dashbuild.php">BUILDING DEPT </a> </button>
    <button><a href="dashelect.php">ELECRICAL DEPT </a> </button>
    <button><a href="dashict.php">ICT DEPT </a> </button> 
    <button><a href="dashliberal.php">LIBERAL DEPT </a> </button>
    <button><a href="dashhospitality.php">HOSPITALITY DEPT </a> </button><br><br>
    <button><a href="newhod.php">NEW HOD</a> </button>
    <button  ><a href="dashnewuser.php">NEW USER</a></button>
    <button><a href="dashstudent.php">NEW STUDENT</a></button>
    <button><a href="login.html">LOG OUT</a> </button> 
    </nav>
  <br><br>
                    <table >
                        <tr>
                            <th>User_ID</th>
                            <th>First Name</th>
                            <th>Middle_Email</th>
                            <th>Last_Name</th>
                            <th>adm_No</th>
                            <th>Exam_Series</th>
                            <th>Examination Fee</th>
                           <th>Category</th>
                             <th>Department</th>
                            <th>HOD_Module</th>
                            <th>%Class_Attendance</th>
                            <th>Class</th>
                            <th>Fee_Balance</th>
                           
                            <th>Exam_Fee_Paid</th>
                            <th>Exam_Fee_Not_Paid</th>
                           <th>Comments</th>
                           <th>Approval_By_Principal</th>
                             <th>Date_Approved</th>
                            <th>Index_No</th>
                            <th>Photo</th>
                            
                            <th>Edit</th>
                           <th>Delete</th>
                            
                        </tr>
                        <?php
                           while($row=mysqli_fetch_assoc($result)){
                               $userid =$row["User_ID"];
                               $firstname=$row['First_Name'];
                               $middlename=$row['Middle_Name'];
                               $lastname=$row['Last_Name'];
                               $admno=$row['ADM_No'];
                               $examseries=$row['Exam_Series'];
                               $hodexamfee=$row['Examination_Fee'];
                               $module=$row['Module'];
                               $class=$row['Class'];
                               $hodmodule=$row['Hod_Module'];
                               $attendance=$row['Percentage_Class_Attendance'];
                               $department=$row['Department'];
                               $feebalance=$row['Fee_Balance'];
                               $examfeepaid=$row['Exam_Fee_Paid'];
                               $examfeenotpaid=$row['Exam_Fee_Not_Paid'];
                               $comments=$row['Comment_By_Principal'];
                               $sign=$row['Signa'];
                               $datecheck=$row['Date_Checked_By_Principal'];
                               $index=$row['Index_No'];
                               $photo=$row['Photo_No'];


                           
                               
        
                        ?>
                        <tr>
                            <td><?php echo $userid ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $lastname?></td>
                            <td><?php echo $admno ?></td>
                            <td><?php echo $examseries ?></td>
                            <td><?php echo $hodexamfee ?></td>
                            <td><?php echo $module ?></td>
                            <td><?php echo  $department ?></td>
                            <td><?php echo  $hodmodule ?></td>
                            <td><?php echo  $attendance ?></td>
                            <td><?php echo  $class ?></td>
                            <td><?php echo  $feebalance ?></td>
                            <td><?php echo  $examfeepaid ?></td>
                            <td><?php echo $examfeenotpaid ?></td>
                            <td><?php echo $comments ?></td>
                            <td><?php echo $sign ?></td>
                            <td><?php echo $datecheck ?></td>
                            <td><?php echo $index ?></td>
                            <td><?php echo $photo ?></td>
                            
                        
                            
                            <td><button><a href="dashedit.php?GetID=<?php echo $userid?>">Edit</button></td>
                             <td><button><a href="dashdelete.php?Del=<?php echo $userid?>">Delete</button></td>
                           </tr>
                        <?php
                           }
                        ?>
                    </table>
                   
                
     
    
</body>
</html>