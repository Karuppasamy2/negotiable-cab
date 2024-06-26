<?php
include "connection.php";
session_start();
$user=$_SESSION["username"];
$from=$_POST['from'];
$to=$_POST['to'];
$distance = $_POST['distance'];
$hours = $_POST['hours'];
$minutes = $_POST['minutes'];
$money = $_POST['money'];
$driver=$_POST['driver'];
$status=$_POST['status'];
$sql="insert into booking (user,from1,to1,distance,hours,minutes,money,driver,status) values ('$user','$from','$to','$distance','$hours','$minutes','$money','$driver','$status')";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:booking_status.php");
}
else{
    echo"error";
}
?>