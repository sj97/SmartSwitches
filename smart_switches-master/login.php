<link rel="stylesheet" type="text/css" href="style.css" />
<div class="container">
<h2>SmartSwitch:  Login</h2>
<body style="background-image:url(bgimage.jpg)">
    
    <div class="regisFrm">
        <form action="onetwo.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>
</div>