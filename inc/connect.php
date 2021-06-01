
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "vladimir";

$conn = mysqli_connect($host, $username, $password, $dbname);

if( !$conn ){
    die("Connect was not successful" . mysqli_connect_error());
}
?>