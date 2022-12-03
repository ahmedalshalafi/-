<?php 
session_start(); 
require 'connection.php';
  ?>
  <html dir="rtl" >
    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel="stylesheet" type="text/css" href="CssClass.css">
        <link  rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    </header>
    <meta charset="utf-8">
    <body style="background-color:#a6885b">
        <form  action="" method="post">
        <div id="myModal" dir="rtl">
        <div class="container" style="background-color:#ffffff;margin-right: 5px;">
          <div  style="max-width:100% ;">
          <form  action="carpo.php" method="post" id="myform" name="myform">
          <header >
           
             
           <div class="mlart alert alert-info ">
                                    <h6>&nbsp;   اضافة  الوجبات  </h6>
                                </div>      
          </header>
          <div style="background-color:#ffffff">                             
              <div class="row">               
                     <div class="col-sm-6">
                          <label >اسم الوجبة*</label>
                          <input type="text" id="mealname" class="form-control" name="mealname" required >
                    </div>
                     <div class="col-sm-6">
                         <label>المعامل الثابت</label>
                         <input type="text"  id="constmeal" class="form-control" name="constmeal"  required >
                         <h2 id="p"></h2>
                    </div>
              </div>                                                                                              
          </div>
          <footer  dir="rtl"  >
              <div class="p-2" > 
              
               <button class="btn btn-success"  id="submitsave"  name="submitsave">حفظ </button>                                         
               <a class="btn btn-danger"   href="MealPage.php">تراجع</a>                                                                                                                         
              </div>                                                        
          </footer>
          </form>  
        </div>
      </div>
        <div>
     <div>

     </form>
  </div>
  <footer>
    
  </footer>
  </div>

      <script type="text/javascript">
        var modal = document.getElementById('myModal');
        function SelcetChange(value) 
        {
          var x= new XMLHttpRequest();
          var m=value;//document.getElementById("constvalue").value;
          x.onreadystatechange=function(){

            if (x.readyState==4 & x.status==200){
              document.getElementById("constvalue").value=x.responseText;
           
           }
          };
          x.open("GET","carpo.php?mm="+m,true);
          x.send();
          GetTotFun();
        }
    </script>
  </body>
  
<?php
 

if (isset($_POST['submitsave']))
{ 
    $mealname=addslashes($_POST['mealname']);
    $constmeal=(int)$_POST['constmeal'];
    $userNo= $_SESSION['user_id'];
    //تحدي ما اذا كان تم النقر على الوجبة وايضا تحديد نوع المقياس
  
    if(!empty($mealname) && !empty($constmeal))
   {
              
            $sql = "INSERT INTO food_table (food_name,Const_Value)
              VALUES ('$mealname',$constmeal)";
              $statement = $conn->prepare($sql);
                 $state = $statement->execute();   
                 if($state){
                  echo "<h6 style='text-align:right'>تم الاضافة</h6>"; 

                 }
                 else{
                  echo "<h3 style='text-align:right'>حصل خطأ.</h3>";
                 }
                 
        }
        
   } 




//$mea2l=$_POST['meal'];
//echo "your name is :<br>".$mea2l ;

?>

  