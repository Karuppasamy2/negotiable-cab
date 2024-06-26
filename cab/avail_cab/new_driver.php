<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new_driver.css">
</head>
<body>
    <div class="login-container">
        <h4>Driver Entry</h4>
        <form action="new_driver_db_con.php" method="post">
            <label>Register Code</label>
            <input type="number" name="register_code"/>
            <label>password</label>
            <input type="text" name="password"/>
            <label>Car Model</label>
            <input type="text" name="car"/>
            
            <label>Seat</label>
            <div class="inter">
            <select name="seater" id="seater">
                <option value="">Select Seater</option>
                <option value="2 seater">2 Seater</option>
                <option value="5 seater">5 Seater</option>
                <option value="7 seater">7 Seater</option>
            </select>
</div>
            <label>Driver Name</label>
            <input type="text" name="driver"/>
            <label>Address</label>
            <input type="text" name="address"/>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
