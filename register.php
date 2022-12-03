<?php
require 'connection.php';
$message = '';
if(isset($_POST['submit'])){
    $carop = $_POST['carpop'];
    $pass =$_POST['password'];
  echo $pass;
  
        if($carop>0){
            $sql = "INSERT INTO user (name,date,email,password, unid,carpo_op)
            VALUES ('$_POST[name]','$_POST[date]','','$_POST[password]','$_POST[unid]',$carop)";
            $statement = $conn->prepare($sql);
            $state = $statement->execute();
            if (! $state) {
                $message ="Error description: " . mysqli_error($conn);
              }
            if($state){
                $message = 'تمت التسجيل بنجاح ';
            }
        } 
        else{
            $message='معامل الكربوهيدرات يجب ان يكون اكبر من الصفر';
        }   
}
?>
<html>
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="" >
        <h3> تسجيل مستخدم جديد</h3>
        <?php if(!empty($message)):?>
            <center>
        <div class="alert alert-success" style="color:red ;">
          <?php echo $message; ?>
   </div>
   </center>
   <?php endif ?>
        <label for="username" style="color: black;">اسم المستخدم الكامل</label>
        <input type="text"  name="name" required>
        <label for="username" style="color: black;">رمز تسجيل الدخول</label>
        <input type="text" name="unid" onfocusout="CheckUID(this)" required>
        <label style="color: black;">كلمة المرور</label>
        <input type="password" name="password" required>
        <label for="Date" style="color: black;">تاريخ الميلاد </label>
        <input type="date" name="date">
        <label for="email" style="color: black;">معامل الكربوهيدرات </label>
        <input type="number"   name="carpop"  oninput="check(this)" required>
        <p><input  type="submit" id="bt"  name="submit"value="تسجيل"></p>
        <a><input type="button" id="bt" onclick="window.location.href='login.php'"value="دخول"></p>
    </form>
</body>
<script>
    //to check if the carpo hodro operation in greater then 0
 function check(input) {
   if (input.value <= 0) {
     input.setCustomValidity('معامل الكربوهيدرات يجب ان يكون اكبر من صفر');
   } else {
     // input is fine -- reset the error message
     input.setCustomValidity('');
   }
 }
//to check if the unid that interd is not exit in database
 function CheckUID(value) 
        {           
          var x= new XMLHttpRequest();
          var m=value.value;//document.getElementById("constvalue").value;
          x.onreadystatechange=function(){
            if (x.readyState==4 & x.status==200){
             // document.getElementById("constvalue").value=x.responseText;
          
             if(x.responseText>=1){
               
                value.setCustomValidity('الرمز موجود مسبقا قم بأختيار رمزا اخر');                
             }
             else{
             
               value.setCustomValidity("");
             }                        
           }
          };
          //alert(m);
          x.open("GET","CheckUserID.php?mm="+m,true);
          x.send();
          //GetTotFun();
        }
</script>
</html>
</body>
</html>