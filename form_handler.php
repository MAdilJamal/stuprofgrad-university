<?php

$con= mysqli_connect('localhost','root');

if(!$con){
    echo "Connection failed";
}

mysqli_select_db($con, 'stuprofgrad');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into comments(name, email, comment)
values('$name', '$email', '$message')";

mysqli_query($con, $query);

echo "Comment posted successfully! go <a href='blog.html'>back</a>";

exit();
?>