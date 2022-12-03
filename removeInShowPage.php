<?php 
require 'connection.php';
$mealtype=$_GET['mtype'];
$nm=$_GET['a'];


       $query  = "delete from carpo_table where Cr_ID='$nm'";
       $result =  mysqli_query($conn, $query);    
      header("location:showPage.php?mtype=$mealtype")  ;          
        

?>