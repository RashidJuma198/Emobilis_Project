<?php


$con =mysqli_connect("localhost","root","","Kisiwa");
if(!$con){
    die("Connection Error");
}

$query ="SELECT *FROM tablestudent where Department ='Hospitality And Institutional Management' and Approved='APPROVED' ;";

$result =mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table,th,tr,td{
            border:2px solid green;
            border-collapse:collapse;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="stylesheet" a href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="student.css">
</head>
<body style="background-color:rgb(148, 243, 4)" >
<div class="Title">
         <p>STUDENT INFORMATION<BR>ACCOUNTS DEPARTMENT</p>
    </div>
    <br><br>
   
    <nav>
    <button><a href="viewaccounts.php">ALL STUDENT'S</a> </button>
    <button><a href="agric.php">AGRICULTURE DEPT</a> </button>
    <button><a href="app.php">APPLIED SCIENCE DEPT </a> </button>
    <button><a href="auto.php">AUTOMOTIVE DEPT </a> </button>
    <button><a href="buss.php">BUSINESS DEPT </a> </button>
    <button><a href="build.php">BUILDING DEPT </a> </button>
    <button><a href="elect.php">ELECRICAL DEPT </a> </button>
    <button><a href="ict.php">ICT DEPT </a> </button> 
    <button><a href="lib.php">LIBERAL DEPT </a> </button>
    <button><a href="hos.php">HOSPITALITY DEPT </a> </button>
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
                            
                            <th>Module</th>
                            <th>Class</th>
                            <th>Department</th>
                            <th>Examination_Fee</th>
                            <th>Fee_Balance</th>
                            <th>Exam_Fee_Paid</th>
                            <th>Exam_Fee_Not_Paid</th>

                            
                            
                           
                            <th>Edit</th>
                           <!-- <th>Delete</th>-->
                            
                        </tr>
                        <?php
                           while($row=mysqli_fetch_assoc($result)){
                               $userid =$row["User_ID"];
                               $firstname=$row['First_Name'];
                               $middlename=$row['Middle_Name'];
                               $lastname=$row['Last_Name'];
                               $admno=$row['ADM_No'];
                               $examseries=$row['Exam_Series'];
                               $phoneno=$row['Examination_Fee'];
                               $module=$row['Module'];
                               $class=$row['Class'];
                               $department=$row['Department'];
                               $feebalance=$row['Fee_Balance'];
                               $examfee=$row['Exam_Fee_Paid'];
                               $examfeenotpaid=$row['Exam_Fee_Not_Paid'];
                               
                               

                           
                               
        
                        ?>
                        <tr>
                            <td><?php echo $userid ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $lastname?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $admno ?></td>
                            <td><?php echo $examseries ?></td>
                           
                            <td><?php echo $module ?></td>
                            <td><?php echo $class ?></td>
                            <td><?php echo $department ?></td>
                            <td><?php echo $phoneno ?></td>
                            <td><?php echo $feebalance ?></td>
                            <td><?php echo $examfee ?></td>
                            <td><?php echo $examfeenotpaid ?></td>
                            
                        
                            
                             <td><a href="accountsedit.php?GetID=<?php echo $userid?>">Edit</td>
                            <!-- <td><a href="delete.php?Del=<?php echo $userid?>">Delete</td>-->
                           </tr>
                        <?php
                           }
                        ?>
                    </table>
                   
                
       
</body>
</html>