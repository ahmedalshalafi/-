<?php 
require 'connection.php';
$nm=$_GET['a'];
$mealtype=$_GET['mtype'];

       $query  = "delete from carpo_table where Cr_ID='$nm'";
       $result =  mysqli_query($conn, $query);    
      header("location:page4.php?mtype=$mealtype")            
        

?>