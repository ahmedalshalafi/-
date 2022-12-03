<?php 
session_start();
require 'connection.php';
if(isset($_POST['submit'])){
      $unid    = $_POST['unid'];
      $Password = $_POST['password'];
    
     if(!empty($unid) && !empty($Password)){
       $query  = "select * from user where unid = '$unid' AND password = '$Password'";
       $result =  mysqli_query($conn, $query);
       $row    = mysqli_fetch_assoc($result);
       if ((@$row['password'] == $Password)||(@$row['unid']==$unid)) {
                   $_SESSION['user_id']=$unid;
                       header("Location:index.html");
                   } else {
                       
                    $error = "الرجاء التاكد من كلمة المرور او رمز التسجيل";
                   }
            }
        } 
   ?>
<html lang="ar">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>التغذية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style11.css">
</head>
<body background=red>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <center>
    <h1 style="padding-top: 40px;">ألتغذية</h1>
    </center>
    <form method="post" action="" >
        <h3> تسجيل  الدخول</h3>
        <center style="color:red ;">
        <?php if(isset($error)){echo "<div class = 'alert alert-danger' style='color:red ;''>$error</div>";} ?>
    </center>
        <label for="username" style="color: black;">رمز تسجيل الدخول</label>
        <input type="text" name="unid" style="background-color: white;color: black;">
        <label for="password" style="color: black;">كلمة المرور</label>
        <input type="password" name="password" style="background-color: white;color: black;">
        <p><input type="submit"id="bt"  name="submit"value="دخول"></p>
<a><input type="button" id="bt" onclick="window.location.href='register.php'"value="تسجيل مستخدم جديد"></p>
    </form>
</body>
</html>
</body>
</html>