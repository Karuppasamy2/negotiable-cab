<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="sample_login.js"></script>
</head>
<body>
<?php 
session_start();
include "connection.php";
$user=$_POST['user'];
$un=$_POST['username'];
$pswd=$_POST['password'];
$sql="select * from $user where username='$un' and password='$pswd'";
$result=mysqli_query($conn,$sql);
$conn=mysqli_num_rows($result);
if($conn>0){
    $_SESSION["username"]=$un;
    if($user=='sample_login'){
        header("location:index1.php");
    exit;
    }
    elseif($user=='cars'){
        header("location:driver/booking.php");
        exit;
    }
    else{
        header("location:avail_cab/cars.php");
        exit;
    }
}
else{
   header("location:sample_login.html");
   exit;
}

?>
</body>
</html>