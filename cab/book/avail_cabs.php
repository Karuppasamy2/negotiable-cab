<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking.css">
    <style>
        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="0">
        <tr style="background-color: yellow">
            <th>Car</th>
            <th>Category</th>
            <th>Driver</th>
            <th>Booking Info</th>
        </tr>
        <?php
        include "connection.php";

        // Query to fetch available cars
        $query = "SELECT * FROM cars";

        $data = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($data) > 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>";
                echo "<td>".$result['car']."</td>";
                echo "<td>".$result['category']."</td>";
                echo "<td>".$result['driver']."</td>";
                echo "<td>";
                
                // Check if the car is available or not for booking
                if ($result['status'] == 2) {
                    echo "Not Available";
                } else {
                    echo "<form action='location.php' method='get'>";
                    echo "<input type='hidden' name='driver' value='".$result['driver']."'>";
                    echo "<input type='hidden' name='car' value='".$result['car']."'>";
                    echo "<button type='submit' class='btn'>Book</button>";
                    echo "</form>";
                }

                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body> 
</html>
