<?php
  $event = $_POST['event'];
  $date = $_POST['date'];
  $resp = "Event could not be added";
  include("dbconnect.php");
  $sql = "insert into events(event,date) values('$event','$date')";
  if($conn->query($sql) === TRUE)
    $resp = "Event added";
  echo $resp;
  $conn->close();
?>