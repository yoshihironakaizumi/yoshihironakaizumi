<?php include('header.php');?>
<div style="width:100%;height:auto;">
	<table rules="rows" style="width:500px;height:100px;margin-left:200px;border-bottom:2px solid black;border-top:2px solid black;">
		<tr>
			<th></th>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
		<?php
		
		include('conn.php');
		$query="select * from cart where uid=".$_SESSION['uid']."";
		$result=mysqli_query($con,$query);
	
		while($row=mysqli_fetch_array($result))
		{
			$query2="select * from item where iid=".$row[2]."";
			$result2=mysqli_query($con,$query2);
			$row2=mysqli_fetch_array($result2);
			
			echo'<tr>';
				echo'<td><img src="'.$row[6].'" style="width:50px;height:50px;"/></td>';
				echo'<td><p style="margin-left:60px;">'.$row2[1].'</p></td>';
				echo'<td><p style="margin-left:30px;">'.$row[3].'</p></td>';
				echo'<td><p style="margin-left:50px;">'.$row[4].'</p></td>';
			echo'</tr>';
			
		}
		echo'</table>';
		$count=mysqli_num_rows($result);
		$query3="select sum(stotal) from cart where uid='".$_SESSION['uid']."'";
		$result3=mysqli_query($con,$query3);
		$row3=mysqli_fetch_array($result3);
		echo'<p style="margin-left:500px;"> Subtotal('.$count.' items):Rs '.$row3[0].'</p>';
	
		
		$query4="select * from orders where oid=".$_SESSION['oid']."";
		$result4=mysqli_query($con,$query4);
		$row4=mysqli_fetch_array($result4);
			echo'<span style="font-weight:bolder;margin-left:200px;">Name</span><br/>';
			echo'<span style="margin-left:200px;">'.$row4[2].'</span><br/>';
			echo'<span  style="font-weight:bolder;margin-left:200px;">Phonenumber</span><br/>';
			echo'<span  style="margin-left:200px;">'.$row4[3].'</span ><br/>';
			echo'<span  style="font-weight:bolder;margin-left:200px;">Address</span ><br/>';
			echo'<span  style="margin-left:200px;">'.$row4[4].'</span ><br/>';
			echo'<span  style="font-weight:bolder;margin-left:200px;">Mail Address</span ><br/>';
			echo'<span  style="margin-left:200px;">'.$row4[5].'</span ><br/>';
			echo'<span  style="font-weight:bolder;margin-left:200px;">Delivery</span ><br/>';
			echo'<span  style="margin-left:200px;">'.$row4[6].'</span ><br/>';
			echo'<span  style="font-weight:bolder;margin-left:200px;">Payment</span ><br/>';
			echo'<span  style="margin-left:200px;">'.$row4[7].'</span ><br/>';
			echo'<span  style="font-weight:bolder;margin-left:200px;">Gift</span ><br/>';
			echo'<span  style="margin-left:200px;">'.$row4[8].'</span ><br/>';
			
		?>
		<a href="buy_thankyou.php">
		<input type="submit" name="next" value="Next" class="next1"/>
		</a>

</div>
<?php include('footer.php');?>