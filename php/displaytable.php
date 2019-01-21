<?php
  include("dbconnect.php");
  $sql = "select * from studdata";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Student ID</th><th>Event</th><th>Credits</th><th>User</th><th>Date Added</th></tr>';
    while($row = $result->fetch_assoc())
        echo "<tr><td>". $row["id"]. "</td><td>". $row["event"]. "</td><td>" . $row["credits"] . "</td><td>" . $row["user"] . "</td><td>" . $row["timestamp"] ."</td></tr>";
    echo "</table>";
  }
  else 
    echo "0 results";
  $conn->close();
?>