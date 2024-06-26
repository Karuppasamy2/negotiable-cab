<?php
include "connection.php";
$reg=$_POST['register_code'];
$car=$_POST['car'];
$user=$_POST['driver'];
$password=$_POST['password'];
$seater=$_POST['seater'];
$driver=$_POST['driver'];
$address=$_POST['address'];
$sql="insert into cars (register_code,car,category,driver,address,username,password) values ('$reg','$car','$seater','$driver','$address','$driver','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:cars.php");
}
else{
    echo"error";
}
?>