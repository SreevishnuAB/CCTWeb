<?php
  session_start();
  ob_start();
  $user = $_POST['username'];
  $pwd = $_POST['password'];
  //$user='admin';
  //$pwd='admin';
  include("validateuser.php");
?>