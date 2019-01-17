<?php
  $auth->status = 'false';
  $dbserver="eu-cdbr-west-02.cleardb.net";
  $dbuser="b7c754d2844753";
  $dbpwd="0d754f7c";
  $db="heroku_e46308dc60d3c3d";
  $conn = new mysqli($dbserver,$dbuser,$dbpwd,$db);
  if($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
  $sql = "select * from users where username='$user'";
  $result = $conn->query($sql);
  if(password_verify($pwd,$result->fetch_assoc()["password"])){
    $auth->status = 'true';
  }
  if($auth->status == 'true' && $user == 'admin')
    $_SESSION["admin"] = 'true';
  else if($auth->status == 'true')
    $_SESSION["verified"] = 'true';
  else{
    session_unset();
    session_destroy();
  }
  ob_end_clean();
  echo json_encode($auth);
  $conn->close();
?>