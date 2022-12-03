<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";
    $conn = new mysqli($servername, $username, $password,$database);

    if ($conn->connect_error) {
        die("لايوجد اتصال " . $conn->connect_error);
      }
  


?>

