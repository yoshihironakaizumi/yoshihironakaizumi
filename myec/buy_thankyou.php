<?php include('header.php');?>
<div id="thankyou">
	<h1 style="margin-left:400px;margin-top:100px;">Your order is compleated!!<br/>Thank you!!</h1>
	<a href="home.php">
		<form action="#" method="POST">
			<input type="submit" name="delete" value="ok" style="margin-left:600px;margin-top:0px;width:60px;height:40px;color:white;background-color:green;border-radius:10px;border:none;"/>
		</form>
	</a>
</div>
<?php
	if(isset($_POST['delete']))
	{
		include('conn.php');
		$query="delete from orders where uid='".$_SESSION['uid']."'";
		$result=mysqli_query($con,$query);
		$query2="delete from cart where uid='".$_SESSION['uid']."'";
		$result2=mysqli_query($con,$query2);
		
		?><script>window.location = "home.php";</script><?php
	}
?>
<?php include('footer.php');?>