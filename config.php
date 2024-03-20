<?php
$host="localhost";
$user="root";
$password="";
$database="test";
$port="3306";
$conn=mysqli_connect($host,$user,$password,$database,$port);
if($conn){
    echo 'connection established';
}else{
    echo 'OOps something went wrong';
}



?>