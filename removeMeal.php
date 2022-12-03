<?php 

require 'connection.php';
$nm=$_GET['a'];
       $query  = "delete from food_table where Food_Id='$nm'";
       $result =  mysqli_query($conn, $query);    
      header("location:MealPage.php")            
      

?>