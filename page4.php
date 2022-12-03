<?php 
session_start(); 

require 'connection.php';
$m_type=$_GET['mtype'];
$userNo= $_SESSION['user_id'];
require 'ReturnMealType.php';
?>
  <html dir="rtl">
    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" type="text/css" href="CssClass.css">
        <link  rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    </header>
    <meta charset="utf-8">
    <body> 
<div>
    </div>
     <!--//////////////////////////////// mizan///////////////////////////////////////////// -->  
    <div >
    <div    style="margin-left:0px ;margin-right: 0px;">
        <h5   style="background-color: #a6885b; border-bottom: 1px solid black; text-align: center; color: aliceblue;"> </h5>
        <header>
        <a href="addpage.php?mtype=<?php echo $r=$m_type;?>" class="btn btn-primary" style="margin: 5;" >جديد</a>
        <a href="page3.php" class="btn btn-primary" style="margin: 5;" >السابق</a>   
      <input type="text" id="myInput" onkeyup="myFunctionM()" placeholder="بـــــحــــث" title="search">
        </header>
     <div>             
        <table class="table table-striped" id="myTable" name="myTable" >
          <thead   style="background-color: #a6885b;">
          <th>الوجبه</th>
          <th>الثابت</th>
          <th>القيمة</th>
          <th>النتيجة</th>
          <th>تعديل</th>
          <th>حذف</th>
          </thead>
          <tbody>       
  <?php
       $query  = "select * from carpo_table where Meal_type='$meal_type' AND userlogin='$userNo' AND Ms_type='$musr_type'";
       $result =  mysqli_query($conn, $query); 
       if($result) {             
        while($r = mysqli_fetch_array($result)){    
  ?>
  <tr>
    <td> <?php echo $r['Fo_no']   ?> </td>
    <td> <?php  echo $r['Const_value'] ?> </td>
    <td> <?php echo $r['user_value']   ?> </td>
    <td> <?php  echo $r['resualt']   ?> </td>
    <td>  <a class="btn btn-primary" href="editpage.php?a=<?php echo $r['Cr_ID']; ?>&mtype=<?php echo $m_type; ?>">تعديل </td>
   <td> <a  class="btn btn-danger" href="remove.php?a=<?php echo $r['Cr_ID']; ?>&mtype=<?php echo $m_type; ?>" onclick="return confirm('هل انت متأكد من حذف السجل')">حذف </td>
  </tr>
  <?php }}?>
  </tbody>
  </table>
  <div style="background-color: #ceb796;"> 
  <div class="row" style="margin-right: 0.5px;border-bottom: 1px solid white;">
      <p class="col-4" style="background-color: #a6885b; size: 10px; padding: 0px;margin-bottom: 0;; text-align: center; color: aliceblue;" >
         اجمالي القيمة  
      </p>
      <label class="col-4" >
      <?php
         //to get the summtion
         $sumresult = mysqli_query($conn, "SELECT SUM(user_value) AS value_sum from carpo_table where Meal_type='$meal_type' AND userlogin='$userNo' AND Ms_type='$musr_type'"); 
         $sumrow = mysqli_fetch_assoc($sumresult); 
         $sumsum = $sumrow['value_sum'];
         echo  $sumsum;
       //////////////////////////////
        
        ?>
      </label>
    </div> 
    <div class="row" style="margin-right: 0.5px;border-bottom: 1px solid white;">
      <p class="col-4" style="background-color: #a6885b; size: 10px; padding: 0px;margin-bottom: 0;; text-align: center; color: aliceblue;" >
         اجمالي النتيجة  
      </p>
      <label class="col-4" id="sumresult">
        <?php
         //to get the summtion
         $sumresult = mysqli_query($conn, "SELECT SUM(resualt) AS value_sum from carpo_table where Meal_type='$meal_type' AND userlogin='$userNo' AND Ms_type='$musr_type'"); 
         $sumrow = mysqli_fetch_assoc($sumresult); 
         $sumsum = $sumrow['value_sum'];
         echo  $sumsum;
       //////////////////////////////
        
        ?>

      </label>
    </div> 
    <div class="row" style="margin-right: 0.5px;border-bottom: 1px solid white;">
      <p class="col-4" style="background-color: #a6885b; size: 10px; padding: 0px;margin-bottom: 0;; text-align: center; color: aliceblue;" >
          مقدار جرعة الانسولين  
      </p>
      <label class="col-4" id="sumresult">
        <?php
         //to get the summtion
         $sumresult = mysqli_query($conn, "SELECT SUM(resualt) AS value_sum from carpo_table where Meal_type='$meal_type' AND userlogin='$userNo' AND Ms_type='$musr_type'"); 
         $sumrow = mysqli_fetch_array($sumresult); 
         $sumsum = $sumrow['value_sum'];
        
         $sumuserres= mysqli_query($conn, "SELECT carpo_op    from user where unid='$userNo'"); 
         if (!$sumuserres) {
          echo("Error description: " . mysqli_error($conn));
        }
         while($sumuser = mysqli_fetch_array($sumuserres)) {
          
         $usercarpo = $sumuser['carpo_op'];
         }
      
         echo  $sumsum /$usercarpo;
       //////////////////////////////
        
        ?>

      </label>
    </div> 
  </div>
  </div>
  <footer>
    
  </footer>
  </div>
    </div>
</div>
      <!--  java script  **************************************-->
      <script type="text/javascript">
        var modal = document.getElementById('myModal');
        
        function show() {
            modal.style.display = "block";
        
        }
        function myFunctionM() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
              //Convert the string to uppercase letters
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
     
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                //take the HTML content of the  <td> element start from (index 0) in a list:
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
          }
        }
       
        function CloseFun() 
        {
          modal.style.display = "none";         
        }
        function Close() 
        {
          
          modal.style.display = "none";
        }
        function SaveFun() 
        {
 
          alert("save done");

       
        }
        
        function mizanvent() 
        {
          modal.style.display = "block";
            //alert("hello hamza");
        }
        function spoonvent() 
        {
 
          modal.style.display = "block";
        }
        function spoonvent1() 
        {
 
          modal.style.display = "block";
        }
      
        // Get the modal


// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];
function cupevent() 
        {
          modal.style.display = "block";
          
        }
// When the user clicks on the button, open the modal 
//btn.onclick = function() {
   // modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
    //modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
        
    </script>
  </body>
  