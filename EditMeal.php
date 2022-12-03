<?php 
    session_start(); 
    ob_start();
    require 'connection.php';
    $nm=$_GET['a'];
    $EuserNo= $_SESSION['user_id'];
    $q="select * from food_table where Food_Id='$nm'";
    $result=mysqli_query($conn,$q);
    if (!$result) {
        echo("Error description: " . mysqli_error($conn));
      }
    $row3 = mysqli_fetch_array($result);
    $food_name=$row3['food_name'];
    $Const_Value=$row3['Const_Value'];

    
    
   
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
                                    <h6>&nbsp;  شاشة تعديل  البيانات  </h6>
                                </div>      
          </header>
          <div style="background-color:#ffffff">   
            
              <div class="row">               
                     <div class="col-sm-6">
                          <label >الوجبة*</label>
                          <input type="text" id="fname" class="form-control" value="<?php  echo $food_name ?>" name="fname" required >
                    </div>
                     <div class="col-sm-6">
                         <label>المعامل الثابت</label>
                         <input type="text"  id="covalue" class="form-control" name="convalue" value="<?php  echo $Const_Value ?>"  required >
                         <h2 id="p"></h2>
                    </div>
              </div>                                                                                   
          </div>
          <footer  dir="rtl" >
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
    <!-- ****************************    -->
 
   
       <!-- ****************************    -->

      
      <!--  java script  **************************************-->
      <script type="text/javascript">
        var modal = document.getElementById('myModal');
        //var savebtn = document.getElementById('savebtn');
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
      
        function   GetTotFun()
        {
        
          var consvalue =document.getElementById("constvalue").value;  
          var uservalue =document.getElementById("uservalue").value;  
          if (consvalue!=null&&uservalue!=null){
            document.getElementById("result").value=Number(consvalue)+Number(uservalue);
          }
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
  
  <?php
 

if (isset($_POST['submitsave']))
{ 
    $fod_name=addslashes($_POST['fname']);
    $con_name=(int)$_POST['convalue'];
    $userNo= $_SESSION['user_id'];
    //تحدي ما اذا كان تم النقر على الوجبة وايضا تحديد نوع المقياس
  echo $nm;
    if(!empty($fod_name) && !empty($con_name))
   {
           // echo $nm; 
           $qq="UPDATE food_table SET food_name='$fod_name' ,Const_Value ='$con_name'    WHERE  Food_Id='$nm'";  
           $result=mysqli_query($conn,$qq);
           if($result){
            echo "<h6 style='text-align:right'>تم التعديل</h6>"; 
           }
           else{
            echo "<h3 style='text-align:right'>حصل خطأ.</h3>";
            echo("Error description: " . mysqli_error($conn));
           }           
           
          
   
        }
      header("location:MealPage.php")   ;
        ob_end_flush();
        
   } 


?>

  