<?php
  include("dbconnect.php");
  $sql = "select * from users";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Username</th><th>Date Added</th></tr>';
    while($row = $result->fetch_assoc())
      echo "<tr><td>". $row["username"]. "</td><td>" . $row["timestamp"] ."</td></tr>";
    echo "</table>";
  }
  else 
    echo "0 results";
  $conn->close();
?>