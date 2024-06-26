<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;600&display=swap');
      </style>
</head>
<body>
    <nav class="nav">
        <!-- <div class="logo"><img src="ride.jpeg" alt="LOGO"></div>*/ -->

        <ul class="sidebar" >
            <li onclick=hidesidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#"><h1>HOME</h1></a></li>
            <li><a href="sample_login.html"><h1>AVAILABLE CABS</h1></a></li>
            <li><a href="sample_login.html"><h1>LOGIN</h1></a></li>
            <li><a href="sample_register.php"><h1>REGISTER</h1></a></li>
            <li><a href="#"><h1>DRIVER PANEL</h1></a></li>
            <li><a href="admin_login.php"><h1>ADMIN PANEL</h1></a></li>
        </ul>
        <ul>
            <li><a href="#"><h1>RideEase</h1></a></li>
            <li class="hideonmobile"><a href="#"><h1>HOME</h1></a></li>
            <li class="hideonmobile"><a href="sample_login.html"><h1>AVAILABLE CABS</h1></a></li>
            <li class="hideonmobile"><a href="sample_login.html"><h1>LOGIN</h1></a></li>
            <li class="hideonmobile"><a href="sample_register.php"><h1>REGISTER</h1></a></li>
            <li class="hideonmobile"><a href="#"><h1>DRIVER PANEL</h1></a></li>
            <li onclick=showsidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a> </li>
        </ul>
    </nav>

    <script>
        function showsidebar(){
            const sidebar=document.querySelector('.sidebar')
            sidebar.style.display='flex'
        }
        function hidesidebar(){
            const hide=document.querySelector('.sidebar')
            hide.style.display='none'
        }
    </script>
    
</body>
</html>
