<?php
$mel= $_GET['mm'];
require 'connection.php';
$query  = "select * from food_table where food_name= '$mel'";
$result =  mysqli_query($conn, $query);   
$row    = mysqli_fetch_assoc($result);
  
  if (!empty($row)) {
    $op=$row['Const_Value'];
    echo $op;
   }
  




?>

