<?php
$con =mysqli_connect("localhost","root","","Kisiwa");
if(!$con){
    die("Connection Error");
}
if(isset($_GET['Del'])){
    $userID =$_GET['Del'];
    $query =" Delete from tablestudent where User_ID='".$userID."';";
    $result =mysqli_query($con,$query);

    if($result){
        header("location:dash1.php");
    }else{
        echo "Check your Query";
    }

}else{
    header("location:dash1.php");
}


?>