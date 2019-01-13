<?php
  session_start();
  $user = $_POST["user"];
  $event = $_POST["event"];
  $id = $_POST["id"];
  $credits = $_POST["credits"];
  $dbserver="eu-cdbr-west-02.cleardb.net";
  $dbuser="b7c754d2844753";
  $dbpwd="0d754f7c";
  $db="heroku_e46308dc60d3c3d";
  $conn = new mysqli($dbserver,$dbuser,$dbpwd,$db);
  if($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
  $sql = "insert into studdata(id,event,credits,user) values('$id','$event','$credits','$user')";
  if ($conn->query($sql) === TRUE) {
    echo "Entry added";
  }
  else {
    echo "Error";
  }
  $conn->close();
  session_unset();
  session_destroy();
?>