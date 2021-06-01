<?php
header("Access-Control-Allow-Origin: *");
require_once("connect.php");


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$insertMessage = "INSERT INTO message (name , email, message, visible) VALUES ('$name', '$email', '$message' ,'true')"; 
$result = mysqli_query($conn, $insertMessage);

$conn->close();
?>