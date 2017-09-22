<?php include('header.php');
	
	if(isset($_SESSION['uid']))
	{
		?><div class="product-main">
				<div class="product-main-side">
			
				</div>
				<div class="product-main-center">
					<div class="product">
						<div class="product-picture">
						<?php 
						$id=$_GET['id'];
						
						include('conn.php');
						
						$query="select * from item where iid='$id'";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_array($result);
				
						echo '<img src="'.$row[4].'" class="picture-of-product"/>';
						
						echo '</div>';
						echo '<div class="product-product-explanation">';
						echo '<form action="#" method="POST">';
						echo	'<table class="detail">';
							echo	'<tr>';
								echo	'<td><p class="product-name">'.$row[1].'</p></td>';
								echo	'<td><p class="product-kinds">'.$row[3].'</p></td>';
							echo	'</tr>';
							echo	'<tr>';
								echo	'<td colspan="2"><span>Rs</span><span class="price">'.$row[2].'</span></td>';
							echo	'</tr>';
							echo	'<tr>';
								echo	'<td><p class="quantity">Quantity:';
								echo	'<select style="width:33px;height:17px;" id="quantity" name="quantity">';
										echo	'<option>1</option>';
										echo	'<option>2</option>';
										echo	'<option>3</option>';
										echo	'<option>4</option>';
										echo	'<option>5</option>';
										echo	'<option>6</option>';
								echo	'</select></p>';
								echo	'</td>';
								echo	'<td class="quantity">Sub total:<span id="subprice">'.$row[2].'</span></td>';
							echo	'</tr>';
							echo	'<tr>';
								echo	'<td colspan="2"><a href="cart.php?id='.$row[0].'"><input type="submit" value="Add to Cart" class="add-to-cart" name="gotocart"></a></td>';
							echo	'</tr>';
							echo	'<tr>';
								echo	'<td><input type="hidden" value="'.$row[0].'" name="pid"/></td>';
							echo	'</tr>';
							echo	'<tr>';
								echo	'<td><input type="hidden" value="'.$row[2].'" name="pprice" /></td>';
								echo	'<td><input type="hidden" value="'.$row[4].'" name="pimg"/></td>';
							echo	'</tr>';
							echo '</form>';
						echo	'</table>';
						
						if(isset($_POST['gotocart']))
						{
							include('conn.php');
							
							$uid=$_SESSION['uid'];
							$pid=$_POST['pid'];
							$pprice=$_POST['pprice'];
							$quantity=$_POST['quantity'];
							$stotal=$pprice*$quantity;
							$pimg=$_POST['pimg'];
							
							$query3="select * from cart where uid='".$uid."' and pid='".$pid."'";
							$result3=mysqli_query($con,$query3);
							$count3=mysqli_num_rows($result3);
							if($count3>0)
							{
								?><script>alert("This item is already in cart.");</script><?php
							}
							else
							{
							$query="insert into cart values('','$uid','$pid','$pprice','$quantity','$stotal','$pimg')";
							$result=mysqli_query($con,$query);
							
							?><script>window.location = "cart.php";</script><?php 
							}
						}
						
						
						
							?>
						</div>
					</div>
					<div class="under-product">
						<div class="recommendation">
							<p class="text-recommendation">Recommendation</p>
							<div class="recommends">
								
								<?php
									$query2="select * from item where icategory='$row[3]'";
									$result2=mysqli_query($con,$query2);
									while($row2=mysqli_fetch_array($result2))
									{
									echo '<div class="choice">';
									echo'<img src="'.$row2[4].'" class="recommend-detail"/>';
									echo'<table style="float:left;">';
										echo'<tr>';
											echo'<td colspan="2"><p style="font-size:15px;margin-left:8px">'.$row2[1].'</p></td>';
										echo'</tr>';
										echo'<tr>';
											echo'<td><p style="font-size:10px;margin-left:8px;">Rs '.$row2[2].'</p></td>';
											echo'<td><p class="series">'.$row2[3].'</p></td>';
									echo'</table>';
									echo'</div>';
									}
								
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="main-side">
				</div>
			</div>
<?php
		
	}
	else
	{
		?><script>$(document).ready(function(){ window.location = "home.php"; alert("login first ");return flase;});</script><?php
	}

 ?>

	
<?php include('footer.php')?>