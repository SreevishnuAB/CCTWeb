<?php
  include("dbconnect.php");
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