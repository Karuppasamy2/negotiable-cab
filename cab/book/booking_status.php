<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>
<?php
        include "connection.php";
        session_start();
        $user1 = $_SESSION["username"];
        echo "<a href='booking_status.php?log=".$user1."' class='l'>Log out</a>";
 ?>
    <table border="1" cellpadding="0">
        <tr style="background-color: yellow">
            <th>customer name</th>
            <th>driver name</th>
        
            <th>location</th>
            <th>duration</th>
            <th>cost</th>
            <th>status</th>
        </tr>
        <?php
        if(isset($_GET['log'])){
            session_destroy();
            header('Location:/new%20project/sample_login.html');
            exit();
        }
        
        $query = "SELECT * FROM booking where user='$user1'";
        $data = mysqli_query($conn, $query);
        
        while($result = mysqli_fetch_assoc($data)){
            echo "
            <tr>
                <td>".$result['user']."</td>
                <td>".$result['driver']."</td>
                <td>from:".$result['from1']." to:".$result['to1']."</td>
                <td>".$result['hours']." hours ".$result['minutes']." minutes</td>
                <td>".$result['money']."</td>

                <td>";
                if($result['status']==0){
                    $stat="cancelled";
                }
                elseif ($result['status'] == 1) {
                    $stat = "pending";
                } elseif ($result['status'] == 2) {
                    $stat = "picked up";
                } elseif($result['status']==3){
                    $stat = "dropped";
                }
                else{
                   $stat="dropped";
                }
                echo $stat;
            
            echo "</td></tr>";
        }
        ?>
    </table>
</body>
</html>
            