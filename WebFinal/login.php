<?php

session_start();

if(isset($_SESSION['userlogin'])) {
    $useremail = $_SESSION['userlogin'];
    header("Location: index2.php");
    exit();
}

$error_message = "";
if (isset($_SESSION['login_error'])) {
    $error_message = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
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
    <div style="display:block; width:100%">
        <div style="width:50%; float: left; display: inline-block;" class="left">
            <img src="images/imagefood.jpg">
        </div>
        <div style="width:50%; float: left; display: inline-block;" class="right">
            <h1>LOGIN</h1>
            <form action="loginconfig.php" method="post" id="loginform">
                <input type="text" name="email" placeholder="EMAIL">
                <input type="password" name="pass" placeholder="PASSWORD">
                <?php if (!empty($error_message)): ?>
                    <p style="color: white;"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <button class="loginbutton" type="submit">Login</button>
                <br><br><br><br><br><br><br><br><br><br>
                <a href="register.php">Don't have an account? Sign Up</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
