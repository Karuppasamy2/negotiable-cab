<?php
include "connection.php";
$un=$_POST['username'];
$mo=$_POST['mobilenumber'];
$password=$_POST['password'];
$co=$_POST['confirmpassword'];
$sql="insert into sample_login (username,mobilenumber,password,confirm) values ('$un','$mo','$password','$co')";
$result=mysqli_query($conn,$sql);
$result=mysqli_query($conn,$sql);
if($result){
    header("location:sample_login.html");
}
else{
    echo"error";
}
?>