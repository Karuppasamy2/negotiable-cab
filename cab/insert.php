<?php
include "connection.php";
$un=$_POST['username'];
$pwd=$_POST['password'];
$email=$_POST['email'];
$sql="insert into sample_login (username,password,email) values ('$un','$pwd','$email')";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:sample_login.html");
}
else{
    echo"error";
}
?>