<?php
  $username = $_POST['name'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $resp = "User could not be added";
  include("dbconnect.php");
  $sql = "insert into users(username,password) values('$username','$password')";
  if($conn->query($sql) === TRUE)
    $resp = "User added";
  echo $resp;
  $conn->close();
?>