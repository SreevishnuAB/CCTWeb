<?php
  ob_start();
  $req_body = file_get_contents("php://input");
  $req_data = json_decode($req_body);
  $user = strtolower($req_data->username);
  $pwd = $req_data->password;
  include("validateuser.php");
?>