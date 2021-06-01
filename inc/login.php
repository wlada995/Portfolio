<?php
header("Access-Control-Allow-Origin: *");
require_once("connect.php");

$name= $_POST["name"];
$pass= $_POST["pass"];

$sql="SELECT * FROM user WHERE username='".$name."' AND password = '".$pass."' AND account='admin'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $obj2 = new stdClass();
      $obj2->username=$row["username"];
      $obj2->pass=$row["password"];
      echo json_encode($obj2);
    }
  } else {

  }

$conn->close();
?>

