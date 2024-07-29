<?php
$conn = mysqli_connect("localhost","root","","restaurant");
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

?>

<!DOCTYPE html> 
<html>
    <head><title>Scheduling Services</title></head>
<style> 
@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap');
*{
    padding:0;
    margin: 0;
}

body{
    background-image:url("schedbg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
}

.bar{
    background-color:#D11313;
    align-items: center;
    text-align: center;
    padding:auto;
    display: block;
    color:white;
    font-family: 'Alegreya Sans SC';
    margin-bottom:1.5%;
}

.bar ul {
    position: absolute;
    top: 3%;
    right: 20px;
    display: flex;
    align-items: center;

}

.bar li{
    margin-left: 10px;
    display: flex;
    padding: auto;
    text-align: center;
    transition: .05s;
    margin-right: 10px;
    
    
}

.bar button{
    font-size: 20px;
    border-radius: 25px;
    padding: 5px 35px;    
    transition: .08s;
    background-color: #201f1f;
    font-family: 'Alegreya Sans SC';
}

.bar button:hover{
    font-size: 20px;
    border-radius: 25px;
    transform: scale(1.1);
    cursor: pointer;
    background-color: #c30010;
}

.bar a{
    text-decoration: none;
    color: white;
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
  margin-top: 50px; 
  z-index: 9999;
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
  font-size: 17px;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown img{

  width: 50px;
  height: 50px;
  transition: 0.2s;
}

.profile-icon {
  width: 50px;
  height: 50px;
  transition: 0.2s;
}

.profile-icon:hover{
transform: scale(1.1);
}


img{
    float: left;
    height: 100px;
    width: 100px;
    
}

.container{ 
    background-color: #F2D9B4;
    width: 90%;
    height: 600px;
    margin: 0 auto;
    border:solid 8px #A62424;
    display:block;
    text-align: center;

}

.container h1{ 
    font-family: 'Alegreya Sans SC';
    margin-top: 15%;
    font-size: 50px;
    
    transition: .5s;
}
.container h1:hover{
    letter-spacing: 0px;
    font-size: 55px;
    cursor:default;
}

.container button{ 
    border-radius: 30px;
    padding: 15px 40px;
    margin-top:2%;
   
    transition: .5s;
    color:white;
    background-color: black;
    cursor: pointer;
}

.container button:hover{
    background-color:#ad1010ee;
    border: solid 2px #A62424;
    transform: scale(1.1);
}
</style>


    <body> 
        <a href="index2.php"><img src="logo.png"></a>
        <div class="bar">
            <br>
            <h1>Schedule</h1>
            <h3>"Plan Ahead and Save the Date With Family"</h3>
            <br>
    <ul>
    <li><button><a href="menu2.php" class="scheduling"><b>Menu</b></a></button></li>
    <li><button><a href="feedback.php" class="feedback"><b>Feedback</b></a></button></li>
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
        <div class="container">
            <h1>Schdule is Available</h1>
           <a href="index2.php"><button>Thank you!</button></a>
        </div> 
    </body>
</html>