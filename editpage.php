<?php 
    session_start(); 
    ob_start();
    require 'connection.php';
    $nm=$_GET['a'];
  
    $metype= $_GET['mtype'];
    $EuserNo= $_SESSION['user_id'];
    $q="select * from carpo_table where Cr_ID='$nm'";
    $result=mysqli_query($conn,$q);
    if (!$result) {
        echo("Error description: " . mysqli_error($conn));
      }
   
   
    $row3 = mysqli_fetch_array($result);
    $Emeal=addslashes($row3['Fo_no']);
    $Euservalue=$row3['user_value'];
    $Econstvalue=$row3['Const_value'];
    $opt=$row3['op'];
    $Eresult=$row3['resualt'];
    
    $mulcol="";
    $divcol="";
    $addcol="";
    $mincol="";
    if($opt=="*"){
      $mulcol="#ffffff";
    }
    if($opt=="/"){
      $divcol="#ffffff";
    }
    if($opt=="+"){
      $addcol="#ffffff";
    }
    if($opt=="-"){
      $mincol="#ffffff";
    }

    
    
   
  ?>
  <html dir="rtl" >
    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel="stylesheet" type="text/css" href="CssClass.css">
        <link  rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    </header>
    <meta charset="utf-8">
    <body style="background-color:<?php echo'$col'?>" >
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
             
              <div class="form-group">
                
                <label >الوجبة</label>
                <select name='meal' class='form-control' onchange='SelcetChange(this.options[this.selectedIndex].value)'>
                     <!-- --> 
                     <option>
                     <?php
                       
                      $query1  = "select *  from food_table where food_name='$Emeal'";
                       $result1 =  mysqli_query($conn, $query1);  
                      $row1   = mysqli_fetch_array($result1);
                      if (!$result1) {
                        echo("Error description: " . mysqli_error($conn));
                     }                         
                      echo $row1['food_name'];
                      ?>
                    </option> 
                    <?php 
                      $query2  = "select * from food_table";
                      $result2 =  mysqli_query($conn, $query2);                
                
                      while($row2    = mysqli_fetch_array($result2)){
                      $op2=$row2['food_name'];
                      echo "<option>$op2</option>";
                  }                             
               //$option=array('hamza','ahmed','mohammed');
                // "<select name='meal'>";
               // foreach($option as $op){
                //  echo "<option value='$op'>$op</option>";
               // }                          
                ?>  
                </select>               
              </div>  
              <div class="row">               
                     <div class="col-sm-4">
                          <label >مقدار الكربو*</label>
                          <input type="text" id="uservalue" class="form-control" value="<?php  echo $Euservalue ?>" name="uservalue" required onkeyup="GetTotFun()">
                    </div>
                    <div class="col-sm-4">
                   <div style="margin-top:27px ;">  
                   <label >العملية</label>               
                    <a class="btn btn-info" id="mulid" style="background-color:<?php echo $mulcol?>"  onclick="MulFun()">* </a> 
                    <a class="btn btn-info" id="divid" style="background-color:<?php echo $divcol?>" onclick="DivFun()">/ </a> 
                    <a class="btn btn-info" id="addid" style="background-color:<?php echo $addcol?>" onclick="AddFun()">+ </a> 
                    <a class="btn btn-info" id="subid" style="background-color:<?php echo $mincol?>" onclick="SubFun()">- </a> 
                    <input type="text" id="optype" class="form-control" name="optyp" style="visibility:hidden ;"  value="<?php  echo $opt ?>" onloadstart="choosebutton()" >
                     </div>                   
                    </div>
                     <div class="col-sm-4" style="visibility:hidden ;">
                         <label>المعامل الثابت</label>
                         <input type="text"  id="constvalue" class="form-control" name="constvalue" value="<?php  echo $Econstvalue ?>" onkeyup="GetTotFun()" readonly >
                         <h2 id="p"></h2>
                    </div>                  
              </div>               
              <div class="form-group">
                <label>اجمالي الكربو</label>
                <input type="text" id="result" class="form-control" value="<?php  echo $Eresult ?>"  name="result" readonly> <!--placeholder="name@example.com"-->
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
  <footer >
    
  </footer>
  </div>
    <!-- ****************************    -->
       <!-- ****************************    -->
      <!--  java script  **************************************-->
      <script type="text/javascript">
        
        var modal = document.getElementById('myModal');
        var opfield= document.getElementById('optyp');
        var op='+';
        function choosebutton(){
        
          if(opfield.value=='*'){
            MulFun();
          }
          else if(opfield.value=='/'){
            DivFun();
          }
          else if(opfield.value=='+'){
            AddFun();
          }
          else if(opfield.value=='-'){
            SubFun();
          }
          

        }
        function MulFun() 
        {
         op='*'
         alert('*')
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
    $uservalue=addslashes($_POST['uservalue']);
    $constvalue=(int)$_POST['constvalue'];
    $result=addslashes($_POST['result']);
    $userNo= $_SESSION['user_id'];
    $optype= $_POST['optyp'];
    $mealtype=$_GET['mtype'];
    //تحدي ما اذا كان تم النقر على الوجبة وايضا تحديد نوع المقياس
  
    if(!empty($meal) && !empty($uservalue))
   {
           // echo $nm; 
           $qq="UPDATE carpo_table SET Fo_no='$meal' ,Const_value ='$constvalue'  ,user_value ='$uservalue'  ,resualt='$result',op='$optype'  WHERE  Cr_ID='$nm'";  
           $result=mysqli_query($conn,$qq);
           if($result){
            echo "<h6 style='text-align:right'>تم التعديل</h6>"; 
           }
           else{
            echo "<h3 style='text-align:right'>حصل خطأ.</h3>";
            echo("Error description: " . mysqli_error($conn));
           }                                
   
        }
        header("location:page4.php?mtype=$mealtype")   ;
        ob_end_flush();
        
   } 


?>

  