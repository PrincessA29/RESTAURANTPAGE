<?php 
$conn = mysqli_connect("localhost", "root", "", "restaurant");

session_start();


$SessEmail = $_SESSION['user_email'];

$query = "SELECT * FROM accounts where USER_EMAIL = '$SessEmail'";
$result = mysqli_query($conn, $query);

if($row=mysqli_fetch_assoc($result)){
    $username=$row['USER_NAME'];
    $fname = $row['FIRST_NAME'];
    $lname = $row['LAST_NAME'];
    $usermail= $row['USER_EMAIL'];  
}else{
    echo "<script>alert('You Have to Log In before going to this page.');;
    window.location.href='index1.php' </script>";
}

if(isset($_POST['submit'])){
    $query = "SELECT USER_ID FROM accounts WHERE USER_NAME = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $uid = $row['USER_ID'];
    
    $msg = $_POST['messages'];
    $query = "INSERT INTO feedback VALUES ('$username', '$uid', '$msg')";
    mysqli_query($conn,$query);
    echo "<script> alert('Thank You for Your Feedback');;
    window.location.href='index2.php' </script>";

}else{ 
    echo "<script> alert('Your User name is incorrect!') </script>";
}
}

?> 
<!DOCTYPE html>
<html>
<head> 
	<title>Feedback1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="refresh" content="">
	<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
	
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap');
body, html{
color: black;
margin: 0;
padding: 0;
font-family: 'koulen', copperplate 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
background-image: url('background.png');
background-size: cover;
background-attachment: fixed;
}

.writing{
width: 580px;
height: 600px;
background-color: rgba(195, 0, 16, 1);
border-radius: 10px;
margin:auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
color: white;
}

.content h1{
	font-family: 'Alegreya Sans SC';
	text-align: center;
	color:white;
	font-size: 30px;
	letter-spacing: 1px;
	margin-top: 1px;
}


ul{
font-family: 'Alegreya Sans SC';
width: auto;
float: right;
margin-top: -5px;
}

li{
display: inline-block;
padding: 15px 30px;
}

li button{
	background-color:#DE0A26;
}

a{
text-align: center;
color: #ffffff;
text-decoration: none;
font-family: 'koulen', copperplate 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
font-size: 1.2vw;
}

.logo{
width: 100px;
height: 100px;
margin-right: auto;
margin-left:30px;
}


.nav{
	
    margin-right: 21px;
    font-family: 'Alegreya Sans SC';
}

.nav ul{
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.nav li{
    margin-left: 10px;
    display: flex;
    padding: 2px;
    text-align: center;
    transition: .05s;
    margin-right: 10px;
    
}

.notactivepage{
    font-size: 20px;
    border-radius: 25px;
    padding: 5px 35px;    
    transition: .08s;
    background-color: #201f1f;
    font-family: 'Alegreya Sans SC';
}

.activepage{
    font-size: 20px;
    border-radius: 25px;
    padding: 5px 45px;
    cursor: pointer;
    background-color: #c30010;
    font-family: 'Alegreya Sans SC';
}

.notactivepage:hover{
    font-size: 20px;
    border-radius: 25px;
    transform: scale(1.1);

    cursor: pointer;
    background-color: #c30010;
}

.nav a{
    text-decoration: none;
    color: white;
}

.logo {
    width: 140px;
    height: 140px;
    margin-left: 27px;
    float: left;
}


.forms{ 
    margin-top:-10%;

}
.forms h2{
	font-family: 'Alegreya Sans SC';
	letter-spacing: 1px;
	text-align: center;
	color:white;
}

input[type=text]{
font-family: 'Alegreya Sans SC';
outline: 0;
background: #f2f2f2;
width: 95%;
border: 0;
margin: 15px;
padding: 10px 30px;
border-radius: 20px;
box-sizing: border-box;
font-size: 14px;
border: 2px solid;
margin-top:-5%;
}

textarea{
  background: #f2f2f2;
  margin-left:20px;
  margin-right:20px;
  margin-top:-2%;
  width: 92%;
  border:solid 2px;
  resize: none;
  border-radius: 15px;
  font-family: 'Alegreya Sans SC';
  font-size:16px;
}

input[type=submit]{
	border:solid;
	padding: 10px 30px;
	display:flex;
	float:right;
    border-radius: 40px;
    border: none;
	margin-right: 20px;
    width:30;
    background: #201f1f;
    color: white;
    font-family: 'Alegreya Sans SC';
    letter-spacing: 2px;
	transition: 0.2s;
	margin-top: 10px;
}

input[type=submit]:hover{
	cursor: pointer;
	transform: scale(1.1);

}

.dropbtn {
  font-size: 20px;
  border-radius: 25px;
  padding: 5px;
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-top: 5px; 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0; 
  white-space: nowrap; 
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  background-color: #201f1f;
  transition: 0.2s;
}

.dropdown-content a:hover {
  background-color: #c30010;
  font-size: 25px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.profile-icon {
  width: 50px;
  height: 50px;
  transition: 0.2s;

}

.profile-icon:hover{
    filter: invert(14%) sepia(85%) saturate(6503%) hue-rotate(350deg) brightness(74%) contrast(109%);
    transform: scale(1.1);

}


</style>


<div class="container"> 
	<a href="index2.php">
    <img src="images/steaklogo.png" class="logo" alt="logo">
    </a>   

	<div class="nav">
    <ul>
    <li><button class="notactivepage"><a href="menu2.php"><b>Menu</b></a></button></li>
    <li><button class="activepage"><a href="feedback.php"><b>Feedback</b></a></button></li>
    <li><div class="dropdown">
    <a class="profile-link" href="#">    
    <img src="profile-icon.png" alt="Profile" class="profile-icon">
        </a>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="history.php">History</a>
          <a href="logout.php">Logout</a></div></div>
    </ul>
    </div>
	</div>
	<br><br><br><br><br><br>

	<div class="writing">
	<br>
	<div class="content">
	<h1>Let Us Know What You Think</h1>
	</div>
	<br><br><br><br><br>
	<div class="forms">
	<form class="" action="" method="post" autocomplete="off" >

		<h2>Messages:</h2>
		<textarea name="messages"  rows="15" cols="50" placeholder="Put your suggestions here..." > </textarea>
		
		<input type="submit" name="submit">
	</div>
	</form>
	</div>

</body>