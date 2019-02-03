<?php
  include("dbconnect.php");
//  $_POST['table']="users";
  $query = "select * from ".$_GET['table'];
  $result = $conn->query($query);
  if($result->num_rows > 0){
    $f = fopen('php://output', 'w');
    $filename = $_GET['table']." - ". date('Y-m-d h:i:s A e') . ".csv";
    //output each row of the data, format line as csv and write to file pointer
    $row = $result->fetch_assoc();
    $col = array_keys($row);
    fputcsv($f, $col);
    fputcsv($f, $row);
    while($row = $result->fetch_assoc())
      fputcsv($f, $row);
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
  }
  exit;
?>
