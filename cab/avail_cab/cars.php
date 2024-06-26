<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cars_css.css">
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <?php
        include "connection.php";
        session_start();
        $user1 = $_SESSION["username"];
        echo "<a href='cars.php?log=".$user1."' class='l'>Log out</a>";
        ?>
    <table border="1" cellpadding="0">
        <tr style="background-color: yellow">
            
            <th>register_code</th>
            <th>category</th>
            <th>driver</th>
            <th>address</th>
            <th>operations</th>
        </tr>
        <a href="new_driver.php" class="add"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg></a>
        <?php
       
        if(isset($_GET['log'])){
            session_destroy();
            header('Location:/new%20project/sample_login.html');
            exit();
        }
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $delete=mysqli_query($conn,"DELETE FROM `cars` WHERE `id`='$id'");
        }
        $query="SELECT * FROM cars";
        $data=mysqli_query($conn,$query);
        //$total=mysqli_num_rows($data);
        

        while($result=mysqli_fetch_assoc($data)){
            echo "
            <tr>
                
                <td>".$result['register_code']."</td>
                <td>".$result['category']."</td>
                <td>".$result['driver']."</td>
                <td>".$result['address']."</td>
                <td><a href='cars.php?id=".$result['id']."' class='btn'>Delete</a></td>
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>
