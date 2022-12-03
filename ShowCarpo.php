<?php 

session_start(); 
require 'connection.php';
$userNo= $_SESSION['user_id'];
?>

<html dir="rtl">
<head>
<header>
        <link  rel="stylesheet" type="text/css" href="CssClass.css">
        <link  rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    </header>
</head>
<body>
<a href="home.php" class="btn btn-primary" style="margin: 5;">السابق</a>         
     <iframe  class="table table-striped" style="height:90%;margin: 0px;padding: 0px;" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=CF72D685C20D9549%21110&authkey=%21AGZmsNOhhQeDEn0&em=2&wdAllowInteractivity=False&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True&wdInConfigurator=True&wdInConfigurator=True&edesNext=true&edrtees6=false&resen=false">
            
            </iframe>             

</body>
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
        function myFunctionS() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInputS");
              //Convert the string to uppercase letters
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableS");
     
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
        function myFunctionC() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInputC");
              //Convert the string to uppercase letters
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableC");
     
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
</html>