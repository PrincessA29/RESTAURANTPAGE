<?php
require_once('config.php');

$error_message = '';

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = ($_POST['pass']);

    $stmt = $db->prepare("SELECT COUNT(*) AS count FROM accounts WHERE USER_EMAIL = ? OR USER_NAME = ?");
    $stmt->execute([$email, $username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0) {
        $error_message = 'Email or username already taken.';
    } else {
        $sql = "INSERT INTO accounts (FIRST_NAME, LAST_NAME, USER_NAME, USER_EMAIL, USER_PASS) VALUES (?, ?, ?, ?, ?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$fname, $lname, $username, $email, $pass]);

        if ($result) {
            header("Location: registersuccessful.php");
            exit;
        } else {
            $error_message = 'There were errors creating your account.';
        }
    }
}
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
            <h1>SIGN UP</h1>
            <form action="register.php" method="post">
                <input type="text" placeholder="First Name" name="fname" class="fname" required>
                <input type="text" placeholder="Last Name" name="lname" class="lname" required>
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" class="email" required>
                <input type="password" placeholder="Password" name="pass" required>
                <?php if (!empty($error_message)): ?>
                     <p style="color: white;"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <button class="registerbutton" type="submit" name="register">Create Account</a></button>
                <br><a href="login.php">Already have an account? Login</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
