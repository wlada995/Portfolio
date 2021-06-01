<?php
header("Access-Control-Allow-Origin: *");
require_once("inc/connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="/Vlada/style/admin.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    
    <title>Document</title>
</head>
<body>
    
  <div class="nav  mb-5 container-fluid">
    <div class="col-lg-12  ">
      <div class="row">
      <div class="col-lg-6 align-self-center col-sm-6">
        <h1 class="text-white">Vladimir Milosevic</h1>
      </div>
    
      <div class="col-lg-6 align-self-center col-sm-6 d-flex justify-content-end">
        <button onclick="logOut()" class="btn btn-warning text-white my-3 logOut">Logout</button> 
      </div>
      </div>
    </div>
  </div>


  <div class="container">
  <div class="row">

<?php

$result = mysqli_query($conn,"SELECT * FROM message WHERE visible = 'true'");

while($row = mysqli_fetch_array($result))
{
  echo "
  <div class='col-lg-3 col-sm-3 col-sx-8 my-5'>
    <div class='card text-white bg-info' '>
      <div class='card-header'>Name: " . $row['name'] . "</div>
      <div class='card-header'>Email: " . $row['email'] . "</div>

        <div class='card-body'>
          <h5 class='card-title'>Message</h5>
          <p class='card-text'>" . $row['message'] . "</p>
          <a href='mailto:".$row['email']."' class='far fa-envelope text-white'>
              <button type='button' class='btn btn-warning text-white'>Reply</button>
          </a>
          <button type='button' onclick='hideMessage(event)' id='btnDelete' class='btn btnDelete btn-danger text-white' data-id='" . $row['id'] ."'>Delete</button>
        </div>

    </div>
  </div>
  ";

}


mysqli_close($conn);
?>
</div>
</div>

</body>
</html>
<script src="/Vlada/js/admin.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"
></script>