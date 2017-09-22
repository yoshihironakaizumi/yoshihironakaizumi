<?php
	

	$servername="localhost";
	$username="root";
	$password="";

	$con=mysqli_connect($servername,$username,$password);
	$db=mysqli_select_db($con,"myec");
?>