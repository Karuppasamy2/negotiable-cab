<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Confirmation</title>
    <link rel="stylesheet" href="sample_login.css">

</head>
<body>
    <div class="login-container">
        <h4>Register</h4>
        <form action="user_form.php" method="post">
            <label>Username</label>
            <input type="text" name="username" required>
            <label>mobile number</label>
            <input type="tel" id="phone" name="mobilenumber" placeholder="1234567890" pattern="[0-9]{10}" required>
            <label>Password</label>
            <input type="password" id="password" name="password" required>
            <label>Confirm Password</label>
            <input type="password" id="confirmpassword" name="confirmpassword" required>
            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        // Get references to password and confirm password fields
        var password = document.getElementById("password");
        var confirmpassword = document.getElementById("confirmpassword");

        // Function to validate password and confirm password
        function validatePassword() {
            console.log("Validating password...");
            console.log("Password: " + password.value);
            console.log("Confirm Password: " + confirmpassword.value);
            
            if(password.value !== confirmpassword.value) {
                console.log("Passwords don't match!");
                confirmpassword.setCustomValidity("Passwords Don't Match");
            } else {
                console.log("Passwords match.");
                confirmpassword.setCustomValidity('');
            }
        }

        // Bind the validatePassword function to onchange and onkeyup events
        password.addEventListener('input', validatePassword);
        confirmpassword.addEventListener('input', validatePassword);
    </script>
</body>
</html>
<!-- KPWN6crOmO5jKoqzdjmT~NCFExWFexXy-Bmtbcd5_BA~Ai4ZwcheN_Jb_8heJIxc3f5MgbQd1mRQSUFZCicM8TxndlK_-zn7rK3KK9fDJVen -->