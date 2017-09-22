<?php session_start();
	$onameb=$_POST['onameb'];
	$onumberb=$_POST['onumberb'];
	$oaddressb=$_POST['oaddressb'];
	$oemailb=$_POST['oemailb'];
	$deliveryb=$_POST['deliveryb'];
	$paymentb=$_POST['paymentb'];
	$gift=$_POST['gift'];
	$_SESSION['uid'];
	
	include('conn.php');
		
	$query="insert into orders values('','".$_SESSION['uid']."','".$onameb."','".$onumberb."','".$oaddressb."','".$oemailb."','".$deliveryb."','".$paymentb."','".$gift."')";
	$result=mysqli_query($con,$query);
	
	$query2="select last_insert_id() from orders";
	$result2=mysqli_query($con,$query2);
	$row=mysqli_fetch_array($result2);
	//print_r($row);
	$_SESSION['oid']=$row[0];
	
	
		
	?><script>window.location = "buy_check.php";</script><?php
?>