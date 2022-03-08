<?php


$con =mysqli_connect("localhost","root","","Kisiwa");
if(!$con){
    die("Connection Error");
}

$query ="SELECT *FROM tablestudent WHERE Department='Business Studies'";

$result =mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table,th,td{
            border:1px solid white;
            border-collapse:collapse;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination Records</title>
    <link rel="stylesheet" a href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="student.css">
</head>
<body style="background-color:rgb(148, 243, 4)" >
<div class="Title">
         <p>STUDENT EXAMINATION INFORMATION<BR>EXAMINATION DEPARTMENT</p>
    </div>
    <br><br>
   
    <nav>
    <button><a href="viewexamination.php">ALL DEPARTMENT</a> </button>
    <button><a href="agricexam.php">AGRICULTURE DEPT</a> </button>
    <button><a href="appliedexam.php">APPLIED SCIENCE DEPT </a> </button>
    <button><a href="automotiveexam.php">AUTOMOTIVE DEPT </a> </button>
    <button><a href="bussinessexam.php">BUSINESS DEPT </a> </button>
    <button><a href="buildingexam.php">BUILDING DEPT </a> </button>
    <button><a href="electricalexam.php">ELECRICAL DEPT </a> </button>
    <button><a href="ictexam.php">ICT DEPT </a> </button> 
    <button><a href="liberalexam.php">LIBERAL DEPT </a> </button>
    <button><a href="hospitalityexam.php">HOSPITALITY DEPT </a> </button>
    <button><a href="login.html">LOG OUT</a> </button>
    </nav>
    <br><br>
    
        
                    <table >
                        <tr>
                            <!--<th>User_ID</th>-->
                            <th>First Name</th>
                            <th>Middle_Email</th>
                            <th>Last_Name</th>
                            <th>adm_No</th>
                            <th>Exam_Series</th>
                            <th>Module</th>
                            <th>Class</th>
                            <th>Department</th>
                            <th>H.O.D_APPROVAL</th>
                            <th>Examination_Fee</th>
                            <th>Fee_Balance</th>
                            <th>Exam_Fee_Paid</th>
                            <th>Exam_Fee_Not_Paid</th>
                            <th>Comments</th>
                            <th>Approval_By_Principal</th>
                            <th>Date_Approved</th>
                            <th>Index_No</th>
                            <th>Photo</th>
                            
                            <th>EDIT</th>
                            <th>PRINT</th>
                           <!--<th>Delete</th>-->
                            
                        </tr>
                        <?php
                           while($row=mysqli_fetch_assoc($result)){
                               $userid =$row["User_ID"];
                               $firstname=$row['First_Name'];
                               $middlename=$row['Middle_Name'];
                               $lastname=$row['Last_Name'];
                               $admno=$row['ADM_No'];
                               $examseries=$row['Exam_Series'];
                               $EXAMFEEE=$row['Examination_Fee'];
                               $module=$row['Module'];
                               $class=$row['Class'];
                               $department=$row['Department'];
                               $approval=$row['Approved'];
                               $feebalance=$row['Fee_Balance'];
                               $examfee=$row['Exam_Fee_Paid'];
                               $examfeenotpaid=$row['Exam_Fee_Not_Paid'];
                               $comments=$row['Comment_By_Principal'];
                               $sign=$row['Signa'];
                               $datecheck=$row['Date_Checked_By_Principal'];
                               $index=$row['Index_No'];
                               $photo=$row['Photo_No'];

                               
                               

                           
                               
        
                        ?>
                        <tr>
                            <!--<td><?php echo $userid ?></td>-->
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $lastname?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $admno ?></td>
                            <td><?php echo $examseries ?></td>
                            
                            <td><?php echo $module ?></td>
                            <td><?php echo $class ?></td>
                            <td><?php echo $department ?></td>
                            <td><?php echo $approval ?></td>
                            <td><?php echo $EXAMFEEE ?></td>
                            <td><?php echo $feebalance ?></td>
                            <td><?php echo $examfee ?></td>
                            <td><?php echo $examfeenotpaid ?></td>
                            <td><?php echo $comments ?></td>
                            <td><?php echo $sign ?></td>
                            <td><?php echo  $datecheck ?></td>
                            <td><?php echo  $index ?></td>
                            <td><?php echo  $photo ?></td>
                            
                        
                            
                             <td><a href="examinationedit.php?GetID= <?php echo $userid?>" ><button>Edit</button></td>
                             <td><a href="print.php?GetID= <?php echo $userid?>" ><button>PRINT</button></td>
                           <!-- <td><a href="delete.php?Del=<?php echo $userid?>">Delete</td>-->
                           </tr>
                        <?php
                           }
                        ?>
                    </table>
                   
                
            </div>
        </div>
    
</body>
</html>