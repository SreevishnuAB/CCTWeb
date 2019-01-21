<?php
  include("dbconnect.php");
  $sql = "select * from events";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Event</th><th>Date Held</th><th>Date Added</th></tr>';
    while($row = $result->fetch_assoc())
      echo "<tr><td>". $row["event"]. "</td><td>" . $row["date"] ."</td><td>" . $row["timestamp"] ."</td></tr>";
    echo "</table>";
  }
  else 
    echo "0 results";
  $conn->close();
?>