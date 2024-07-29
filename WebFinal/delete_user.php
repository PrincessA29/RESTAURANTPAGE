<?php
$localhost = "localhost";
$username = "root";
$password = "";
$restaurant = "restaurant";

$conn = new mysqli($localhost, $username, $password, $restaurant);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_POST["USER_ID"];

$sql = "DELETE FROM tb_schedule WHERE USER_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->close();

$sql = "DELETE FROM feedback WHERE USER_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->close();


$sql = "DELETE FROM accounts WHERE USER_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->close();




$conn->close();
?>
