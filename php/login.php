<?php 
  ob_start();
  $user = $_POST['username'];
  $pwd = $_POST['password'];
  //$user='admin';
  //$pwd='admin';
  $resp = false;
  $dbserver="eu-cdbr-west-02.cleardb.net";
  $dbuser="b7c754d2844753";
  $dbpwd="0d754f7c";
  $db="heroku_e46308dc60d3c3d";
  $conn = new mysqli($dbserver,$dbuser,$dbpwd,$db);
  if($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
  $sql = "select * from users";
  $result = $conn->query($sql);
  if(password_verify($pwd,$result->fetch_assoc()["password"])){
    $resp=true;
  }
  ob_end_clean();
  echo $resp;
  $conn->close();
?>