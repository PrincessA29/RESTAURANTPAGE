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
$date = $_POST['date'];
$time = $_POST['time'];
$num_people = $_POST['num_people'];
$occasion = $_POST['occasion'];

$query = "SELECT COUNT(*) AS count FROM tb_schedule WHERE date = ? AND time = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ss', $date, $time);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $count);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

if ($count > 0) {
    echo "<script>alert('The selected time is already booked. Please choose a different time.');;
    window.location.href='scheduling.php' </script>";
}else{  
   

$query = "SELECT USER_ID FROM accounts WHERE USER_NAME = '$username'";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $uid = $row['USER_ID'];

    $query = "INSERT INTO tb_schedule VALUES('', '$uid', '$username', '$date', '$time', '$num_people', '$occasion')";
	mysqli_query($conn, $query);


    
    echo "<script> alert('Thank you for your Response! Have a nice day!');; window.location.href='scheduling1.php'</script>"; 
}
}
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
}

.container .right{ 
    float:right;
    width: 50%;
    text-align: center;
    font-family: 'Alegreya Sans SC';
}

.container .right img {
    display: center;
    width: 100%;
    height:600px;
    object-fit: cover;
    border-radius: 0px 0px 0px 0px;
}

.container .left{
    float:left;
    width: 50%;
    text-align: center;
    font-family: 'Alegreya Sans SC';
    align-items: center;
    justify-content: center;
}

.container form{ 
    margin-top:10%;
}

.container .left h1{
    margin-top: 5%;
    letter-spacing: 5px;
    font-size: 40px;
}

input[type=text]{
    display: flex;
    width: 23%;
    margin-left: 20%;
    margin-bottom: 5%;
    margin-top: 5%;
    border-radius: 30px;
    border: solid 2px #A62424;
    padding: 15px 130px;
    font-family: 'Alegreya Sans SC';
    font-size: 15px;
    transition: .5s;
    text-align:center;
}

input[type=text]:hover{
    border: solid 2px #d41e1edc;
}


input[type=date]{
    font-family: 'Alegreya Sans SC';
    margin-bottom: 10px;
    padding: 15px 160px;
    border: solid 2px #A62424;
    border-radius: 30px;
    margin-left: 0%;
    font-size: 15px;
    text-align:center;
}

input[type=time]{
    font-family: 'Alegreya Sans SC';
    margin-bottom: 10px;
    padding: 15px 170px;
    border: solid 2px #A62424;
    border-radius: 30px;
    margin-left: 0%;
    margin-top:2%;
    font-size: 15px;
}

input[type=submit]{
    float:right;
    border-radius: 30px;
    padding: 15px 40px;
    margin-top:-8%;
    margin-right: 2%;
    transition: .5s;
}

input[type=submit]:hover{
    background-color: transparent;
    border: solid 2px #A62424;
    padding: 15px 50px;
    color: red;
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
    <img src="profile-icon.png" alt="Profile" class="profile-icon.png">
        </a>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="history.php">History</a>
          <a href="logout.php">Logout</a></div></div>
    </ul>
    </div>
    
        <div class="container">

            <div class="left">
                <h1>Booking Information</h1>
                <br>
            <form  onSubmit= "return confirm('Do you really want this date to be your schedule?')" class="" method="post" value="" autocomplete="off"> 
                
                <input type="date" name=date required>
                <input type="time" name=time required
                        min="10:00" max="21:00" required>
                <input type="text" name=num_people placeholder="Number of People:">
                <input type="text" name=occasion placeholder="Type of Occasion if any:">
            </div>

            <div class="right">
            <img src="img3.jpg">
            <input type="submit" name="submit">
            </form>
            </div>
        </div>
    </body>
</html>