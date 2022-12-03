<?php 
session_start(); 
require 'connection.php';

?>
  
  <html dir="rtl">
    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel="stylesheet" type="text/css" href="CssClass.css">
        <link  rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    </header>
    <meta charset="utf-8">
    <body >
    
        <div>
        <header>
        <a href="addmeal.php" class="btn btn-primary" style="margin: 5;" >جديد</a>
        <a href="home.php" class="btn btn-primary" style="margin: 5;" >السابق</a>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="بـــــحــــث" title="search">

        <div class="left">
        </div>
        </header>
     <div>             
        <table class="table table-striped" id="myTable">
          <thead   style="background-color: #a6885b;">
          <th>الوجبه</th>
          <th>الثابت</th>
          <th>تعديل</th>
          <th>حذف</th>
          </thead>
          <tbody>       
  <?php 
       $query  = "select * from food_table ";
       $result =  mysqli_query($conn, $query);                
        while($r = mysqli_fetch_array($result)){    
  ?>
  <tr>
    <td> <?php echo $r['food_name']?> </td>
    <td> <?php  echo $r['Const_Value']?> </td>

    <td>  <a class="btn btn-primary" href="EditMeal.php?a=<?php echo $r['Food_Id']; ?>>">تعديل </td>
    <td> <a  class="btn btn-danger" href="removeMeal.php?a=<?php echo $r['Food_Id']; ?>" onclick="return confirm('هل انت متأكد من حذف السجل')">حذف </td>
  </tr>
  <?php }?>
  </tbody>
  </table>
  </div>
  <footer>
    
  </footer>
  </div>
    <!-- ****************************    -->
 
    <div id="myModal" class="modal" dir="rtl">
        <div class="container">
     
          <div class="modal-content"  style="max-width:60% ;">
          <form  action="carpo.php" method="post" >
          <header class="modal-header">
            <h2>حساب المزان</h2>

          </header>
          <div class="modal-body" >
      
           
              <div class="form-group">
                <label >الوجبة</label>
                <?php 
                require 'connection.php';
                $query  = "select * from food_table";
                $result =  mysqli_query($conn, $query);                
                
                  echo "<select name='meal' class='form-control'>";
                  while($row    = mysqli_fetch_array($result)){
                    $op=$row['food_name'];
                    echo "<option >$op</option>";
                  }
 
                  echo "</select>";
               
               //$option=array('hamza','ahmed','mohammed');
                // "<select name='meal'>";
               // foreach($option as $op){
                //  echo "<option value='$op'>$op</option>";
               // }
                
              
                ?>
              </div>  
              <div class="form-group">
                <label>مقدار الكربو</label>
                <input type="text" class="form-control" name="uservalue" >
              </div> 
              <div class="form-group">
                <label>المعامل الثابت</label>
                <input type="text" class="form-control" name="constvalue" >
              </div>   
              <div class="form-group">
                <label>اجمالي الكربو</label>
                <input type="text" class="form-control" name="result" > <!--placeholder="name@example.com"-->
              </div>  
              <input type="submit" name="submit" value="send">
                                
            
          </div>
          <footer class="modal-footer" dir="ltr" >
              <div class="p-2" >  
                <button class="btn btn-success"  name="sub">Save</button>        
                <button class="btn btn-danger"   onclick="CloseFun()">Close</button>     
                  
                                            
                   
                          
              </div>                                                        
          </footer>
          </form>  
      
       
        </div>
      </div>
       <!-- ****************************    -->

      
      <!--  java script  **************************************-->
      <script type="text/javascript">
        var modal = document.getElementById('myModal');
        
     
        function myFunction() {
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
      
      

        
    </script>
  </body>
  