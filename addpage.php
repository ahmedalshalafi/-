<?php 
session_start(); 

$metype= $_GET['mtype'];
$m_type=$_GET['mtype'];
require 'ReturnMealType.php';
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
                                    <h6>&nbsp;  شاشة اضافة  البيانات  </h6>
                                </div>      
          </header>
          <div style="background-color:#ffffff">   
             
              <div class="form-group">
                
                <label >الوجبة</label>
                <?php 
                require 'connection.php';
                $query  = "select * from food_table";
                $result =  mysqli_query($conn, $query);                
                
                  echo "<select name='meal' required class='form-control' onchange='SelcetChange(this.options[this.selectedIndex].value)'> <option> </option>";
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
       <div class="row">               
                     <div class="col-sm-4">
                          <label >مقدار الكربو*</label>
                          <input type="text" id="uservalue" class="form-control" name="uservalue" required onkeyup="GetTotFun()">
                    </div>
                    <div class="col-sm-4">
                   <div style="margin-top:27px ;">  
                   <label >العملية</label>               
                    <a class="btn btn-info" id="mulid"  onclick="MulFun()">* </a> 
                    <a class="btn btn-info" id="divid" onclick="DivFun()">/ </a> 
                    <a class="btn btn-info" id="addid" onclick="AddFun()">+ </a> 
                    <a class="btn btn-info" id="subid" onclick="SubFun()">- </a> 
                    <input type="text" id="optype" class="form-control" name="optyp" style="visibility:hidden ;" >
                      </div>                   
                    </div>
                     <div class="col-sm-4" style="visibility:hidden ;">
                         <label>المعامل الثابت</label>
                         <input type="text"  id="constvalue" class="form-control" name="constvalue"  onkeyup="GetTotFun()" readonly >
                         <h2 id="p"></h2>
                    </div>
              </div>                <label>اجمالي الكربو</label>
                <input type="text" id="result" class="form-control"  name="result" readonly> <!--placeholder="name@example.com"-->
              </div>                                                                      
          </div>
          <footer  dir="rtl"  >
              <div class="p-2" > 
              
               <button class="btn btn-success"  id="submitsave"  name="submitsave">حفظ </button>                                         
               <a class="btn btn-danger"   href="page4.php?mtype=<?php echo $r=$metype; ?>">تراجع</a>                                                                                                                         
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

        var op='+';
        function MulFun() 
        {
         op='*'
        document.getElementById('optype').value=op;
         document.getElementById('mulid').style.backgroundColor='#ffffff';
         document.getElementById('divid').style.backgroundColor='';
         document.getElementById('addid').style.backgroundColor='';
         document.getElementById('subid').style.backgroundColor='';
         GetTotFun();
       
        }
        function DivFun() 
        {
         op='/'
         document.getElementById('optype').value=op;
         document.getElementById('mulid').style.backgroundColor='';
         document.getElementById('divid').style.backgroundColor='#ffffff';
         document.getElementById('addid').style.backgroundColor='';
         document.getElementById('subid').style.backgroundColor='';
         GetTotFun();
       
        }
        function AddFun() 
        {
         op='+'
         document.getElementById('optype').value=op;
         document.getElementById('mulid').style.backgroundColor='';
         document.getElementById('divid').style.backgroundColor='';
         document.getElementById('addid').style.backgroundColor='#ffffff';
         document.getElementById('subid').style.backgroundColor='';
         GetTotFun();
       
        }
        function SubFun() 
        {
         op='-'
         document.getElementById('optype').value=op;
         document.getElementById('mulid').style.backgroundColor='';
         document.getElementById('divid').style.backgroundColor='';
         document.getElementById('addid').style.backgroundColor='';
         document.getElementById('subid').style.backgroundColor='#ffffff';
         GetTotFun();
       
        }
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
            if(op=='*'){
              document.getElementById("result").value=Number(consvalue)*Number(uservalue);
            }
            else  if(op=='/'){
              document.getElementById("result").value=Number(consvalue)/Number(uservalue);
            }
            else  if(op=='+'){
              document.getElementById("result").value=Number(consvalue)+Number(uservalue);
            }
            else  if(op=='-'){
              document.getElementById("result").value=Number(consvalue)-Number(uservalue);
            }
           
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
    $meal=addslashes($_POST['meal']);
    $uservalue=$_POST['uservalue'];
    $constvalue=(int)$_POST['constvalue'];
    $result=$_POST['result'];
    $userNo= $_SESSION['user_id'];
    $optype= $_POST['optyp'];
    $mstype=$musr_type;
   // echo $musr_type;
    //تحدي ما اذا كان تم النقر على الوجبة وايضا تحديد نوع المقياس
   
    if(!empty($meal) && !empty($uservalue))
   {
              
            $sql = "INSERT INTO carpo_table (userlogin, Fo_no,Ms_type, Meal_type,Const_value,user_value,resualt,op)
              VALUES ($userNo,'$meal','$mstype','$meal_type' , $constvalue,$uservalue,$result,'$optype')";
              $statement = $conn->prepare($sql);
                 $state = $statement->execute();   
                 if($state){
                  echo "<h6 style='text-align:right'>تم الاضافة</h6>"; 

                 }
                 else{
                  echo "<h3 style='text-align:right'>حصل خطأ.</h3>";
                 }
                 
                 //header("location:editpage.php") ;
        }
        
   } 
   if (isset($_POST['savebtn']))
        {        
          // echo "dddddddddd";              
                 //header("location:page4.php") ;
        }



//$mea2l=$_POST['meal'];
//echo "your name is :<br>".$mea2l ;

?>

  