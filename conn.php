<?php
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>