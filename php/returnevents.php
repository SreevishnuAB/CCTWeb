<?php
  include("dbconnect.php");
  $sql = "select event from events";
  $result = $conn->query($sql);
  ob_end_clean();
  if($result->num_rows > 0){
    $events = array();
    for($i = 0; $i < $result->num_rows;$i++)
      $events[$i] = $result->fetch_assoc()["event"];
  }
  echo json_encode($events);
  $conn->close();
?>