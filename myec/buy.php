<?php include('header.php');?>
	
	<div id="buymain">
		<div class="buy-main-side">
		</div>
		<div id="buy-main-center">
			<div id="buy-form">
				
				<span style="margin-left:180px;display:inline-block;margin-top:15px;">User Name</span><br/>
				<input type="text" name="oname" id="oname" value="<?php echo $_SESSION['uname'];?> " style="margin-left:180px;width:750px;height:30px;border-radius:5px;" required="required" /><br/>
				<span style="margin-left:180px;display:inline-block;margin-top:15px;">Phone Number</span><br/>
				<input type="number" name="phonenumber" id="onumber" placeholder="Phone Number" style="margin-left:180px;width:750px;height:30px;border-radius:5px;" required="required" /><br/>
				<span style="margin-left:180px;display:inline-block;margin-top:15px;">Address</span><br/>
				<input type="text" name="address" id="oaddress" placeholder="Address" style="margin-left:180px;width:750px;height:30px;border-radius:5px;" required="required" /><br/>
				<span style="margin-left:180px;display:inline-block;margin-top:15px;">Mail Address</span><br/>
				<input type="text" name="email" id="oemail" placeholder="Mail Address" style="margin-left:180px;width:750px;height:30px;border-radius:5px;" required="required" /><br/>
				<input type="submit"  value="Next" class="next1" id="next1"/>
			
				
			
			</div>
				
			<?php
			// if(isset($_POST['next']))
		// {
		// $oname=$_POST['oname'];
		// $ophonenumber=$_POST['phonenumber'];
		// $oaddress=$_POST['address'];
		// $oemail=$_POST['email'];
		// $deliverytype=$_POST['deliverytype'];
		// $paymenttype=$_POST['paymenttype'];
		// $gifttype=$_POST['gifttype'];
		
		// include('conn.php');
		
		// $query="insert into orders values('','".$_SESSION['uid']."','".$oname."','".$ophonenumber."','".$oaddress."','".$oemail."','".$deliverytype."','".$paymenttype."','".$gifttype."')";
		// $result=mysqli_query($con,$query);
		
		// ?><script>//window.location = "buy_check.php";</script><?php
		// }
		
			?>
		</div>
		<div class="buy-main-side">
		</div>
	</div>

<?php include('footer.php');?>