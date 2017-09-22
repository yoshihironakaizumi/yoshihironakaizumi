<?php
	if(isset($_POST['rsubmit']))
	{
		$rname=$_POST['rname'];
		$rpass=$_POST['rpass'];
		$remail=$_POST['remail'];
		$rgender=$_POST['rgender'];
		$rdob=$_POST['rdob'];
		$rimg=$_FILES['rimg'];
		$picname=$rimg['name'];
		$tmp_name=$rimg['tmp_name'];
		$myloc="img/".$picname;
		move_uploaded_file($tmp_name,$myloc);
		
		include('conn.php');
		echo $query="insert into uinfo values('','".$rname."', '".$rpass."', '".$remail."', '".$rgender."', '".$rdob."', '".$myloc."')";
		$result=mysqli_query($con,$query);
		
		if($result)
		{
			?><script>window.location = "home.php";</script><?php   
		}
		else
		{
			?><script>$(document).ready(function(){alert("Try Again");return flase;});</script><?php	
		}
	}
?>