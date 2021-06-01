<?php
header("Access-Control-Allow-Origin: *");
require_once("connect.php");


$id = $_POST['id'];

echo $id;

$sql = "UPDATE message SET visible = 'false' WHERE id =".$id;
$result = mysqli_query($conn, $sql);
$row = $result;

$conn->close();
?>