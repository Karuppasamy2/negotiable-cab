<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cars_css.css">
</head>
<body>
    <table border="1" cellpadding="0">
        <tr style="background-color: yellow">
            <th>id</th>
            <th>register_code</th>
            <th>category</th>
            <th>driver</th>
            <th>address</th>
        </tr>

        <?php
        include "connection.php";
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $delete=mysqli_query($conn,"DELETE FROM `cars` WHERE `id`='$id'");
        }
        $query="SELECT * FROM cars";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);

        while($result=mysqli_fetch_assoc($data)){
            echo "
            <tr>
                <td>".$result['id']."</td>
                <td>".$result['register_code']."</td>
                <td>".$result['category']."</td>
                <td>".$result['driver']."</td>
                <td>".$result['address']."</td>
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>
