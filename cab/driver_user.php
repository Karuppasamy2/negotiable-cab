<?php 
session_start();
include "connection.php";
$un=$_POST['username'];
$pswd=$_POST['password'];
$sql="select * from cars where username='$un' and password='$pswd'";
$result=mysqli_query($conn,$sql);
$conn=mysqli_num_rows($result);
if($conn>0){
    header("location:driver/booking.php");
    $_SESSION["username"]=$un;
}
else{
   header("location:driver_login.php");
}

?>