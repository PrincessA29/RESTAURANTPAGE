<?php

$db = new mysqli("localhost", "root", "", "restaurant");

if ($db->connect_error) {
    die("Error connecting to database: " . $db->connect_error);
}

$email = $_POST["email"];
$password = $_POST["pass"];
$user = ["email"];

$sql = "SELECT * FROM accounts WHERE USER_EMAIL = '$email' AND USER_PASS = '$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    session_start();
    $_SESSION['user_email'] = $email;

    if($email == 'admin@gmail.com' && $password == 'admin'){
        header("Location:admin.php");
    }else{

        if(mysqli_fetch_assoc($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
                printr($row);
            }
        }
        session_start();
        header("Location: index2.php");
    } 
    exit();

} else {
    session_start();
    $_SESSION["login_error"] = "Invalid email or password";
    header("Location: login.php");
    exit();
}

?>
