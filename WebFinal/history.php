<?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");

session_start();

$SessEmail = $_SESSION['user_email'];

$query = "SELECT * FROM accounts WHERE USER_EMAIL = '$SessEmail'";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['USER_ID'];
    $_SESSION['user_name'] = $row['USER_NAME'];
    $username = $row['USER_NAME'];
    $fname = $row['FIRST_NAME'];
    $lname = $row['LAST_NAME'];
    $usermail = $row['USER_EMAIL'];
}

$localhost = "localhost";
$username = "root";
$password = "";
$restaurant = "restaurant";

$conn = new mysqli($localhost, $username, $password, $restaurant);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tb_schedule WHERE USER_ID = '$user_id'";
$result = $conn->query($sql);




?>


<!DOCTYPE html>
<html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap');

    .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
           
        }
        
        .nav {
            margin-right: 20px;
        }

        .nav ul{
        text-align: center;
        align-items: center;
        display: flex;
        margin-top:     20px;
        margin-right: 20px;
}

.nav li{
    margin-left: 10px;
    display: flex;
    padding: auto;
    text-align: center;
    transition: .05s;
    margin-right: 10px;
    
}

.logout{
    font-size: 20px;
    border-radius: 25px;
    padding: 5px 35px;    
    transition: .08s;
    background-color: #201f1f;
    font-family: 'Alegreya Sans SC';
}

.logout:hover{
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



        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-image: url('images/background.png');
        }
        
        .container {
            width: 80%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            font-family: 'Alegreya Sans SC';
            margin-top: 10%;
        }
        
        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
            font-size: 20px;
        }
        
        table {   
            width: 90%;
        }

        th {
            background-color: #A62424;
            color: white;
            text-align: center;
        }
        
        tr:hover {
            background-color: #f9f9f9;
            
        }
        
        

        .title{
  float:left;
  width: 500px;
  font-size: 40px;
  margin-left: 40px;
  text-decoration: none;
  color: black;
  font-family: 'Alegreya Sans SC';
}

.title a{
  color:black;
  
}

span{
    color:#A62424;
}
    </style>

<head>
    <title>Admin Page</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
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
  font-size: 17px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.profile-icon {
  width: 50px;
  height: 50px;
  transition: 0.2s;
  filter: invert(14%) sepia(85%) saturate(6503%) hue-rotate(350deg) brightness(74%) contrast(109%);
}

.nav{
    margin-top:-40px;
    margin-right: 21px;
    font-family: 'Alegreya Sans SC';
}

.nav ul{
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: flex-end;
    
}

.nav li{
    margin-left: 10px;
    display: flex;
    padding: auto;
    text-align: center;
    transition: .05s;
    margin-right: 10px;
    
}

.nav button{
    font-size: 20px;
    border-radius: 25px;
    padding: 5px 35px;    
    transition: .08s;
    background-color: #201f1f;
    font-family: 'Alegreya Sans SC';
}

.nav button:hover{
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


    </style>
</head>
<body>
<div class="header">
<a href="index2.php">
    <img src="images/steaklogo.png" class="logo" alt="logo">
    </a>   

<div class="nav">
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
    </div>



<div class="container">
        <h1>HISTORY OF RESERVATIONS</h1>
        <?php echo "USERNAME: " . $_SESSION['user_name'] . "<br>"; ?>

        
        <table>
        <tr>
            <th>SCHEDULE</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>DINE WITH</th>
            <th>OCCASION</th>
    
        </tr>
        <?php
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["sched_id"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "<td>" . $row["dine_with"] . "</td>";
                echo "<td>" . $row["occasion"] . "</td>";
        
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No reservations found.</td></tr>";
        }
        $conn->close();
        ?>


    </table></div>
</body>
</html>
