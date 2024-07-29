<?php
require_once('config.php');


?>


<!DOCTYPE html>
<html>
    <head>
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<a href="index1.php">
    <img src="images/steaklogo.png" class="logo" alt="logo">
    </a>   

<div class="nav">
    <ul>
    <li><button class="notactivepage"><a href="menu1.php"><b>Menu</b></a></button></li>
    <li><button class="notactivepage"><a href="#feed"><b>Feedback</b></a></button></li>
    <li><button class="activepage"><a href="login.php"><b>Login/Signup</b></a></button></li>
    </ul>
    </div>


<div class="container">
    <div style="display:block; width:100%" >
    <div style="width:50%; float: left; display: inline-block;" class="left">
    <img src="images/imagefood.jpg">


</div>
    <div style="width:50%; float: left; display: inline-block;" class="right">
    <br><br><br><br><br><br><br><br><br><h1>REGISTRATION SUCCESSFUL</h1>
    <form action="login.php" method="post">
    
    <button class="loginbutton" a href="login.php"> Go Back to Login</a></button>
    </div> 
</body>
</form>
</html>