<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["verified"])){
  header("Location: ../errors/unauthaccess.html");
  exit();
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/addUser.js"></script>
    <script src="../js/addEvent.js"></script>
    <script src="../js/logout.js"></script>
    <title>CCT - User: <?php echo strtoupper($_SESSION['user'])?></title>
  </head>
  <body>
    <div class="container">
      <div class="header-container"><h1 id="admin-header"> CCT - User: <?php echo strtoupper($_SESSION["user"])?></h1><button id="lo-button" class="logout">Logout</button></div>
        <?php
          if(isset($_SESSION["admin"]) == 'true' && $_SESSION["admin"] == 'true')
            include("tabs.php");
          else{
            include("displaytable.php");
            include("displayevents.php");
          }
          ?>
    </div>
  </body>
</html>