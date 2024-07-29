<?php
$localhost = "localhost";
$username = "root";
$password = "";
$restaurant = "restaurant";

$conn = new mysqli($localhost, $username, $password, $restaurant);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$schedId = $_POST["sched_id"];


$sql = "DELETE FROM tb_schedule WHERE sched_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $schedId);
$stmt->execute();
$stmt->close();

$conn->close();
?>
