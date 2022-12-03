<?php
//return if the user id that interd not exit before
$id= $_GET['mm'];

require 'connection.php';
$sumresult = mysqli_query($conn, "SELECT Count(unid) as cc  from user where unid='$id'"); 
$sumrow = mysqli_fetch_array($sumresult); 
$sumsum = $sumrow['cc'];


if($sumsum>0)
{
    //$op=$row['Const_Value'];
    echo 1;
}
else{
echo 0;
}
  
?>
