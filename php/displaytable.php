<?php
  $dbserver="eu-cdbr-west-02.cleardb.net";
  $dbuser="b7c754d2844753";
  $dbpwd="0d754f7c";
  $db="heroku_e46308dc60d3c3d";
  $conn = new mysqli($dbserver,$dbuser,$dbpwd,$db);
  if($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
  $sql = "select * from studdata";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Event: ". $row["event"]. " - Credits: " . $row["credits"] . " - User: " . $row["user"] . " - Date: " . $row["timestamp"] ."<br>";
    }
  }
  else {
    echo "0 results";
  }
  $conn->close();
?>