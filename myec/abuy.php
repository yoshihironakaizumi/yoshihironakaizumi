	
	<?php
		echo'<form method="POST">';
			echo'<input type="hidden" value="'.$_POST['oname'].'" name="oname" id="onamea"/>';
			echo'<input type="hidden" value="'.$_POST['onumber'].'" name="onumber" id="onumbera"/>';
			echo'<input type="hidden" value="'.$_POST['oaddress'].'" name="oaddress" id="oaddressa">';
			echo'<input type="hidden" value="'.$_POST['oemail'].'" name="oemail" id="oemaila"/>';
		echo'</form>';
	?>
	
	<div id="abuy-main-center">
		
			<p style="margin-left:200px;">Delivery</p>
			<input type="radio" value="home" name="deliverytype" style="margin-left:200px;"/><span>Home</span>
			<input type="radio" value="office" name="deliverytype" style="margin-left:6px;"/><span>Office</span>
			<input type="radio" value="conviniencestore" name="deliverytype" style="margin-left:6px;"/><span>Convinience Store</span>
			<p style="margin-left:200px;">Payment</p>
			<input type="radio" value="card" name="paymenttype" class="paymenttype" style="margin-left:200px;"/><span>Card</span>
			<input type="radio" value="cashondelivery" name="paymenttype" class="paymenttype" style="margin-left:6px;"/><span>Cash on delivery</span>
			<input type="radio" value="banktransfer" name="paymenttype" class="paymenttype" style="margin-left:6px;"/><span>Bank transfer</span>
			<input type="radio" value="conviniencestore" name="paymenttype" class="paymenttype" style="margin-left:6px;"/><span>Convinience Store</span><br/>
			<input type="button"  value="Next" class="next1" id="next2" />
	</div>


	
