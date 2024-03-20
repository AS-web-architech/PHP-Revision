<?php

include 'config.php';
if($_POST['type'] == ""){
    $sql='SELECT * from country';
    $query=mysqli_query($conn,$sql) or die('Query unsuccessful');
    $str="";
    
    while($row=mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['Country_id']}'>  {$row['Country_Name']}</option>";
    }    
}
else if($_POST['type'] == "stateData"){
    $sql="SELECT * from `state` where Country_id = {$_POST['id']}";
    $query=mysqli_query($conn,$sql) or die('Query unsuccessful');
    $str="";
    
    while($row=mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['State_id']}'>  {$row['State_Name']}</option>";
    }    
}

 echo $str;





?>