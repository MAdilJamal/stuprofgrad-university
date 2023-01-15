<?php

$con= mysqli_connect('localhost','root','','stuprofgrad');

if(!$con){
    echo "Connection failed";
}

$adm_no = $_POST['adm_no'];
$dob = $_POST['dob'];

$sql = "select *from student where adm_no = '$adm_no' and dob = '$dob'"; 

$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    header("Location: studentDashboard.html"); 
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     
?>
