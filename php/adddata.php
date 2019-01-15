<?php
  $req_body = file_get_contents("php://input");
  $req_data = json_decode($req_body);
  $user = $req_body["user"];
  $event = $req_body["event"];
  $id = $req_body["id"];
  $credits = $req_body["credits"];
  $dbserver="eu-cdbr-west-02.cleardb.net";
  $dbuser="b7c754d2844753";
  $dbpwd="0d754f7c";
  $db="heroku_e46308dc60d3c3d";
  $conn = new mysqli($dbserver,$dbuser,$dbpwd,$db);
  if($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
  $sql = "insert into studdata(id,event,credits,user) values('$id','$event','$credits','$user')";
  $query->status="";
  if ($conn->query($sql) === TRUE) {
    $query->status = "Entry added";
  }
  else {
    $query->status =  "Error";
  }
  $conn->close();
  echo json_encode($query);
?>