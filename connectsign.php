<?php

$conn =mysqli_connect("localhost","root","","Kisiwa");
if(!$conn){
    die("Connection Error:".mysqli_connect_error());
}