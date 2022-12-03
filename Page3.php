<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <header>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" type="text/css" href="CssClass.css">
        <link  rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    </header>
    <meta charset="utf-8">
    <body style="background-color: #a6885b;">
	<a href="home.php" class="btn btn-primary" style="margin: 5;">السابق</a>  
	   <div class="cards">         
	                   
			  <div class="card" style="background-color: skyblue;text-align: center; color: indigo;  font-weight: bold;">
				 سناك
				  <a  href="showPage.php?mtype=<?php echo $r='100403'; ?>" style="padding:0px ;margin-left:20px ;">
								<img   class="card__thumb" style="height:25px ;width: 25px;" src="img/eye_32.png" alt="استعراض" />                                                 
							  </a>
				  <a class="card" >
					 
					  <img src="img/snacks.jpg" class="card__image" alt="" />
					  <div class="card__overlay">
						<div class="card__header">
						  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
						 
						
							  <a  href="page4.php?mtype=<?php echo $r='100401'; ?>" style="padding:0px ;margin:0px ;">
								  <img class="card__thumb" src="img/miz.png" alt="ميزان"  id="image"/>                                                                         
							  <a  href="page4.php?mtype=<?php echo $r='100402'; ?>" style="padding:0px ;margin:0px ;">
								  <img class="card__thumb" src="img/spoon.png" alt="ملعقة"  />                                                    
							  </a> 
							  <a  href="page4.php?mtype=<?php echo $r='100403'; ?>" style="padding:0px ;margin:0px ;">
								<img   class="card__thumb" src="img/cup.png" alt="كوب" />                                                 
							  </a>
							 
						 <!--<div class="card__header-text">
							<h3 class="card__title">Jessica Parker</h3>            
							<span class="card__status">1 hour ago</span>
						  </div>--> 
						</div>
						<p class="card__description">   امكانية حساب الكربوهيدرات لوجبة سناك عن طريق الميزان او عن طريق الملعقة او عن طريق الكوب مع امكانية استعراض البيانات من الزر اعلاه   </p>
					  </div>
					</a>    
			  </div>            
			 
			  <div class="card" style="background-color: skyblue;text-align: center; color: indigo;  font-weight: bold;">
				 عشاء
				  <a  href="showPage.php?mtype=<?php echo $r='100303'; ?>" style="padding:0px ;margin-left:20px ;">
								<img   class="card__thumb" style="height:25px ;width: 25px;" src="img/eye_32.png" alt="استعراض" />                                                 
							  </a>
				  <a  class="card">                    
					  <img src="img/dinner.jpg" class="card__image" alt="" />
					  <div class="card__overlay">        
						<div class="card__header">
						  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
						  <a  href="page4.php?mtype=<?php echo $r='100301'; ?>" style="padding:0px ;margin:0px ;">
							  <img class="card__thumb" src="img/miz.png" alt="ميزان"  id="image"/>                                                                         
							  <a  href="page4.php?mtype=<?php echo $r='100302'; ?>" style="padding:0px ;margin:0px ;">
							  <img class="card__thumb" src="img/spoon.png" alt="ملعقة"  />                                                    
							</a> 
							<a  href="page4.php?mtype=<?php echo $r='100303'; ?>" style="padding:0px ;margin:0px ;">
							   <img   class="card__thumb" src="img/cup.png" alt="كوب" />                                                 
							</a>
						 <!--<div class="card__header-text">
							<h3 class="card__title">kim Cattrall</h3>
							<span class="card__status">3 hours ago</span>
						  </div>--> 
						</div>
						<p class="card__description">   امكانية حساب الكربوهيدرات لوجبة العشاء عن طريق الميزان او عن طريق الملعقة او عن طريق الكوب مع امكانية استعراض البيانات من الزر اعلاه   </p>
					  </div>
					</a>
			  </div>          
			 
			  <div class="card" style="background-color: skyblue;text-align: center; color: indigo;  font-weight: bold;">
				 الغداء
				  <a  href="showPage.php?mtype=<?php echo $r='100203'; ?>" style="padding:0px ;margin-left:20px ;">
								<img   class="card__thumb" style="height:25px ;width: 25px;" src="img/eye_32.png" alt="استعراض" />                                                 
							  </a>
				  <a  class="card">
			  
					  <img src="img/lunch.jpg" class="card__image" alt="" />
					  <div class="card__overlay">
						<div class="card__header">
						  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
						  <a  href="page4.php?mtype=<?php echo $r='100201'; ?>" style="padding:0px ;margin:0px ;">
							  <img class="card__thumb" src="img/miz.png" alt="ميزان"  id="image"/>                                                                         
							  <a  href="page4.php?mtype=<?php echo $r='100202'; ?>" style="padding:0px ;margin:0px ;">
							  <img class="card__thumb" src="img/spoon.png" alt="ملعقة"  />                                                    
							</a> 
							<a  href="page4.php?mtype=<?php echo $r='100203'; ?>" style="padding:0px ;margin:0px ;">
							   <img   class="card__thumb" src="img/cup.png" alt="كوب" />                                                 
							</a>
						  <!--<div class="card__header-text">
							<h3 class="card__title">Jessica Parker</h3>
							<span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>            
							<span class="card__status">1 hour ago</span>
						  </div> -->
						</div>
						<p class="card__description">   امكانية حساب الكربوهيدرات لوجبة الغداء عن طريق الميزان او عن طريق الملعقة او عن طريق الكوب مع امكانية استعراض البيانات من الزر اعلاه   </p>
					  </div>
					</a>
			  </div>
  
			  <div class="card" style="background-color: skyblue;text-align: center; color: indigo;  font-weight: bold;">
				 فطور
				  <a  href="showPage.php?mtype=<?php echo $r='100103'; ?>" style="padding:0px ;margin-left:20px ;">
								<img   class="card__thumb" style="height:25px ;width: 25px;" src="img/eye_32.png" alt="استعراض" />                                                 
							  </a>
				  <a class="card">              
					  <img src="img/breakfast-board.jpg" class="card__image" alt="" />
					  <div class="card__overlay">
						  <div class="card__header">
							<svg class="card__arc" xmlns="http://www.w3.org/2000/svg" ><path  /></svg>                                         
							<a  href="page4.php?mtype=<?php echo $r='100101'; ?>" style="padding:0px ;margin:0px ;">
							  <img class="card__thumb" src="img/miz.png" alt="ميزان"  id="image"/>                                                                         
							  <a  href="page4.php?mtype=<?php echo $r='100102'; ?>" style="padding:0px ;margin:0px ;">
							  <img class="card__thumb" src="img/spoon.png" alt="ملعقة"  />                                                    
							</a> 
							<a  href="page4.php?mtype=<?php echo $r='100103'; ?>" style="padding:0px ;margin:0px ;">
							   <img   class="card__thumb" src="img/cup.png" alt="كوب" />                                                 
							</a>                       
												  
						   <!-- <div class="card__header-text">
							  <h3 class="card__title">kim Cattrall ha</h3>
							  <span class="card__status">3 hours ago</span>
							</div> -->          
						  </div>
						  <p class="card__description">   امكانية حساب الكربوهيدرات لوجبة فطور عن طريق الميزان او عن طريق الملعقة او عن طريق الكوب مع امكانية استعراض البيانات من الزر اعلاه   </p>
						</div>
						
					  </a></div>

       </div>
		<!--  java script  **************************************-->
		<script type="text/javascript">
		  var modal = document.getElementById('myModal');
		  function show() {
   
			modal.style.display = "block";
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
	
	  </script> </body>
   
</html>
