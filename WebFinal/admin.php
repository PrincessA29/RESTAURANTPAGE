<?php
$localhost = "localhost";
$username = "root";
$password = "";
$restaurant = "restaurant";

$conn = new mysqli($localhost, $username, $password, $restaurant);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM tb_schedule";
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
    padding: 5px 45px;
    cursor: pointer;
    background-color: #c30010;
    transform: scale(1.1);
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
        
        
        .remove {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .remove:hover {
            transform: scale(1.1);
            background-color: #d32f2f;
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
    </style>
</head>
<body>
<div class="header">
<div class="title">Let's <span>Steak</span> a Break | <span>Admin</span></div> 
<div class="nav">
    <ul>
    <li><button class="activepage"><a href="admin.php"><b>List of Reservations</b></a></button></li>
    <li><button class="notactivepage"><a href="adminUsers.php"><b>List of Users</b></a></button></li>
    <li><button class="notactivepage"><a href="logout.php"><b>Logout</b></a></button></li>
    </ul>
    </div>
    </div>



<div class="container">
        <h1>LIST OF RESERVATIONS</h1>
        
        <table>
        <tr>
            <th>SCHEDULE</th>
            <th>USERNAME</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>DINE WITH</th>
            <th>OCCASION</th>
            <th>REJECT</th>
        </tr>
        <?php

        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["sched_id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "<td>" . $row["dine_with"] . "</td>";
                echo "<td>" . $row["occasion"] . "</td>";
                echo "<td><button class='remove' onclick=\"removeRow(" . $row["sched_id"] . ")\">Reject</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No reservations found.</td></tr>";
        }
        $conn->close();
        ?>


    </table></div>

    <script>
        function removeRow(schedId) {
        var confirmed = confirm("Are you sure you want to reject this reservation?");
        if (confirmed) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "reject_schedule.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    window.location.reload();
                }
            };
            xhr.send("sched_id=" + schedId);
        }
    }
    </script>
</body>
</html>
