<?php 
  ob_start();
  $user = $_POST['username'];
  $pwd = $_POST['password'];
  $resp = false;
  $a="localhost";
  $b="root";
  $c="";
  $d="cct";
  $conn = new mysqli($a,$b,$c,$d);
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