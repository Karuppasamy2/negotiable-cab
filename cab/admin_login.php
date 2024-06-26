<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sample_login.css">
</head>
<body>
    <div class="login-container">
        <h4>Login</h4>
        <form action="admin_select.php" method="post">
            <label>user_id</label><input type="text" name="username"/>
            <label>password</label>
            <input type="password" name="password"/>
            <button type="submit">Login</button>
            <div class="a">
            <a href="sample_register.php">register</a>
            </div>
        </form>
    </div>
</body>
</html>