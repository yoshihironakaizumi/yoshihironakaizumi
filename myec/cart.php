<?php include('header.php');?>
	<div id="cart-main">
		<div class="cart-main-side">
		</div>
		<div id="cart-main-center">
			<?php
				include('conn.php');
				$query="select * from cart where uid='".$_SESSION['uid']."'";
				$result=mysqli_query($con,$query);
				
				
				
				while($row=mysqli_fetch_array($result))
				{
					$query2="select * from item where iid='".$row['2']."'";
					$result2=mysqli_query($con,$query2);
					$row2=mysqli_fetch_array($result2);
					
				echo'<div id="addproduct">';
					echo'<div style="width:3.7%;height:100%;float:left">';
					echo'</div>';
					echo'<div style="width:5.5%;height:100%;float:left;">';
						echo'<img src="'.$row[6].'" style="width:100%;height:100%"/>';
					echo'</div>';
					echo'<div style="width:18%;height:100%;float:left;">';
						echo'<p style="font-size:14px;font-weight:bolder;margin-left:10px;margin-top:20px;">'.$row2[1].'</p>';
					echo'</div>';
					echo'<div style="width:41.1%;height:100%;float:left;">';
						echo"<p style='font-size:14px;'>Item Quantity:".$row[4].";Price:Rs ".$row[3].";<br/>Item Total:Rs ".$row[5]."</p>";
					echo'</div>';
				echo'<form actio="#" method="POST">';
				echo'<select name="changequantity" style="width:50px;height:30px;margin-left:20px;margin-top:15px;">';
					echo'<option>1</option>';
					echo'<option>2</option>';
					echo'<option>3</option>';
					echo'<option>4</option>';
					echo'<option>5</option>';
					echo'<option>6</option>';
					echo'<option>7</option>';
					echo'<option>8</option>';
					echo'<option>9</option>';
					echo'<option>10</option>';
				echo'</select>';
				echo'<input type="submit" value="change" name="change" id="changeProduct"	>';
				echo'<input type="submit" value="delete" name="delete" id="deleteProduct" >';
				echo'<input type="hidden" name="cid" value="'.$row[0].'">';
				echo'<input type="hidden" name="pprice" value="'.$row[3].'">';
					echo'</form>';
					echo'</div>';
				
				}
				
				if(isset($_POST['change']))
				{
					$query3="update cart set quantity=".$_POST['changequantity']." where cid='".$_POST['cid']."'";
					$result3=mysqli_query($con,$query3);
					$stotal=$_POST['changequantity'] * $_POST['pprice'];
					$query5="update cart set stotal=".$stotal." where cid='".$_POST['cid']."'";
					$result5=mysqli_query($con,$query5);
					?><script>window.location = "cart.php";</script><?php
				}
				
				if(isset($_POST['delete']))
				{
					$query4="delete from cart where cid='".$_POST['cid']."'";
					$result4=mysqli_query($con,$query4);
					?><script>window.location = "cart.php";</script><?php
				}
			
			$query6="select * from cart where uid='".$_SESSION['uid']."'";
			$result6=mysqli_query($con,$query6);
			$count6=mysqli_num_rows($result6);
			
			$query7="select sum(stotal) from cart where uid='".$_SESSION['uid']."'";
			$result7=mysqli_query($con,$query7);
			$rr=mysqli_fetch_array($result7);
			
			
			echo'<div id="cartsubtotal">';
				echo'<h3>Subtotal('.$count6.' items):RS '.$rr[0].'</h3>';
				echo'<form action="#" method="POST">';
				echo'<input type="submit" value="Proceed to cheakout" name="cheakout"/>';
				echo'</form>';
				if(isset($_POST['cheakout']))
				{
					if($count==0)
					{
						?><script>$(document).ready(function(){
							alert("No item!");
						});</script><?php
					}
					else
					{
						?><script>window.location = 'buy.php';</script><?php
					}
				}
				?>
			</div>
			
		</div>

		<div class="cart-main-side">
		</div>
			
	</div>

<?php include('footer.php');?>