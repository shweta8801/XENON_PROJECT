<?php

$servername="localhost";
$username="root";
$password="";
$database_name="car_selling_web_project";

$config  = mysqli_connect($servername,$username,$password,$database_name);

if($config ){
    // echo"ok";
 }
else{echo "Failed";}
