		<?php
		echo'<form method="POST">';
			echo'<input type="hidden" value="'.$_POST['onamea'].'" id="onameb"/>';
			echo'<input type="hidden" value="'.$_POST['onumbera'].'" id="onumberb"/>';
			echo'<input type="hidden" value="'.$_POST['oaddressa'].'" id="oaddressb"/>';
			echo'<input type="hidden" value="'.$_POST['oemaila'].'" id="oemailb"/>';
			echo'<input type="hidden" value="'.$_POST['delivery'].'" id="deliveryb"/>';
			echo'<input type="hidden" value="'.$_POST['payment'].'" id="paymentb"/>';
		echo'</form>';
		
	?>
	
	<div id="abuy2-main-center">
		
			<p style="margin-left:200px;margin-top:50px;padding:0px;margin-bottom:0px;">Gift</p>
			<input type="radio" value="wrapping" name="gifttype" id="wrap" style="margin-left:200px;padding:0px;"/><span>Gift Wrapping</span>
			<input type="radio" value="nowrapping" name="gifttype" id="nowrap" style="margin-left:20px;"/><span>No Wrapping</span><br/>
			<!--<a href="buy_check.php">-->
				<input type="button"  value="Next" class="next1" id="next3"/>
			<!--</a>-->
	
	</div>
	

	
					