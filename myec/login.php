<?php session_start();
	if(isset($_POST['loginsubmit']))
	{
		$uname = $_POST['uname'];
		$upass = $_POST['upass'];
		
		include('conn.php');
		$query="select * from uinfo where uname='".$uname."' and upassword='".$upass."'";
		$result=mysqli_query($con,$query);
		$count=mysqli_num_rows($result);
		$rr=mysqli_fetch_array($result);
		
		// print_r($rr);
		 //echo $rr[1];
		
		if($count>0)
		{
			$_SESSION['uid']=$rr[0];
			$_SESSION['uname']=$rr[1];
			$_SESSION['uimg']=$rr[6];
			
			?><script>window.location = "home.php";</script><?php
		}
		else
		{
				
		}
		// if(isset([$_SESSION['uid']]))
		// {
			// echo "RRRRR";
		// }
		// else{
			// echo "RRRRR";
		// }
	}
?>