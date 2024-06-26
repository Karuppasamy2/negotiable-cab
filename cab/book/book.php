<?php
include "connection.php";
$reg=$_POST['register_code'];
$car=$_POST['car'];
$seater=$_POST['seater'];
$driver=$_POST['driver'];
$address=$_POST['address'];
$sql="insert into cars (register_code,car,category,driver,address) values ('$reg','$car','$seater','$driver','$address')";
$result=mysqli_query($conn,$sql);