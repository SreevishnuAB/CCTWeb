<?php
session_start();
if(!isset($_SESSION["admin"])){
  header("Location: ../errors/unauthaccess.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Admin</title>
  </head>
  <body>
    Welcome
  </body>
</html>