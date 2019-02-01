<?php
  session_start();
  ob_start();
  $user = strtolower($_POST['username']);
  $pwd = $_POST['password'];
  //$user='admin';
  //$pwd='admin';
  include("validateuser.php");
?>