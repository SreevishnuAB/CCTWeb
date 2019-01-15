<?php
  error_reporting(E_ALL);
  $req_body = file_get_contents("php://input");
  $req_data = json_decode($req_body);
  $user = $req_data->user;
  $event = $req_data->event;
  $id = $req_data->id;
  $credits = $req_data->credits;
  $dbserver="eu-cdbr-west-02.cleardb.net";
  $dbuser="b7c754d2844753";
  $dbpwd="0d754f7c";
  $db="heroku_e46308dc60d3c3d";
  $conn = new mysqli($dbserver,$dbuser,$dbpwd,$db);
  if($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
  $sql = "insert into studdata(id,event,credits,user) values('$id','$event','$credits','$user')";
  $query->status=$user;
  if ($conn->query($sql) === TRUE) {
    $query->status = "Entry added";
  }
  else {
    $query->status =  "Error";
  }
  $conn->close();
  echo json_encode($query);
?>