<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>

   
        <?php
include "connection.php";
session_start();
$user1 = $_SESSION["username"];
echo "<a href='booking.php?logout=".$user1."' class='logout-link'>Log out</a>";
?>
<table border="1" cellpadding="0">
    <tr style="background-color: yellow">
        <th>Customer Name</th>
        <th>Contact</th>
        <th>Location</th>
        <th>Duration</th>
        <th>Cost</th>
        <th>Status</th>
    </tr>
    <?php
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query2 = "SELECT status FROM booking WHERE id='$id'";
        $data2 = mysqli_query($conn, $query2);
        $result2 = mysqli_fetch_assoc($data2);
        $current_status = $result2['status'];

        if ($current_status < 3) {
            $new_status = $current_status + 1;
            $update = mysqli_query($conn, "UPDATE `booking` SET `status`='$new_status' WHERE id='$id'");
        }
    }
    if(isset($_GET['cancel'])) {
        $id = $_GET['cancel'];
        $query2 = "SELECT status FROM booking WHERE id='$id'";
        $data2 = mysqli_query($conn, $query2);
        $result2 = mysqli_fetch_assoc($data2);
        $current_status = $result2['status'];
        $current_status=0;
        $update = mysqli_query($conn, "UPDATE `booking` SET `status`='$current_status' WHERE id='$id'");
        }
    
    if(isset($_GET['logout'])){
        session_destroy();
        header('Location: /new%20project/sample_login.html');
        exit();
    }
    
    $query = "SELECT * FROM booking WHERE driver='$user1'";
    $data = mysqli_query($conn, $query);
    
    
    while($result = mysqli_fetch_assoc($data)){
        $user = $result['user'];
        $query1 = "SELECT mobilenumber FROM sample_login WHERE username='$user'";
        $data1 = mysqli_query($conn, $query1);
        $result1 = mysqli_fetch_assoc($data1);
        echo "
        <tr>
            <td>".$result['user']."</td>
            <td>".$result1['mobilenumber']."</td>
            <td>from:".$result['from1']." to:".$result['to1']."</td>
            <td>".$result['hours']." hours ".$result['minutes']." minutes</td>
            <td>".$result['money']."</td>
            <td>";

       /* switch ($result['status']) {
            case 0:
                $stat = "cancelled";
                break;
            case 1:
                $stat="confirm";
                break;
            case 2:
                $stat = "pickedup";
                break;
            case 3:
                $stat = "dropped";
                break;
            default:
                $stat = "thank you";
        }

        
        if($result['status']==1){
            echo "<a href='booking.php?id=".$result['id']."' class='btn'>$stat</a>";
            echo"  ";
            echo "<a href='booking.php?cancel=".$result['id']."' class='bt'>cancel</a>";
            
        }
        else{
            echo "<a href='booking.php?id=".$result['id']."' class='btn'>$stat</a>";

        }
        if($result['status']==0){
            echo "cancelled";
            break;
        }*/
        
        $statusMap = ['cancelled', 'confirm', 'pickedup', 'dropped', 'thank you'];
        $stat = $statusMap[$result['status']] ?? 'unknown';

        // Display status links
        if($result['status'] == 1){
            echo "<a href='booking.php?id=".$result['id']."' class='btn'>$stat</a> ";
            
            echo "<a href='booking.php?cancel=".$result['id']."' class='bt'>cancel</a>";
        } elseif($result['status'] == 2){
            echo "<a href='booking.php?id=".$result['id']."' class='btn'>$stat</a>";
            $driver=$result['driver'];
            $update2 = mysqli_query($conn, "UPDATE `cars` SET `status`=2 WHERE driver='$driver'");
        }
        elseif($result['status'] == 3){
                echo "<a href='booking.php?id=".$result['id']."' class='btn'>$stat</a>";
                $driver=$result['driver'];
            $update2 = mysqli_query($conn, "UPDATE `cars` SET `status`=1 WHERE driver='$driver'");
        } elseif($result['status'] == 0){
            echo "cancelled";
            $driver=$result['driver'];
            $update2 = mysqli_query($conn, "UPDATE `cars` SET `status`=1 WHERE driver='$driver'");
        }
        echo "</td></tr>";
    }

    
    ?>
</table>
</body>
</html>