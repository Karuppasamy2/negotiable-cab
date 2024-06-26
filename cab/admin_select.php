<?php 
session_start();
include "connection.php";
$un=$_POST['username'];
$pswd=$_POST['password'];
$sql="select * from admin where id='$un' and password='$pswd'";
$result=mysqli_query($conn,$sql);
$conn=mysqli_num_rows($result);
if($conn>0){
    header("location:avail_cab/cars.php");
    $_SESSION["username"]=$un;
}
else{
   header("location:admin_login.php");
}
?>