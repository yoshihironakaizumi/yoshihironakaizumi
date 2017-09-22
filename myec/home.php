<?php 
	include('header.php');
?>
				<div class="main">
					<div class="main-side">
					</div>
					<div class="main-center">
						<div class="front-picture">
							<img src="img/frontpicture.jpg" id="front1">
							<img src="img/frontpicture2.jpg" id="front2">
						</div>
						<div class="change-picture">
							<div class="choices">
								<div class="buttons">
									<div id="buttonleft">
									</div>
								</div>
								<div class="buttons">
									<div  id="buttonright">
									</div>
								</div>
							</div>
						</div>
						<div class="kinds">
							<ul>
								<li id="all" class="icat" yoshihiro="all">ALL</li>
								<li id="foods" class="icat" yoshihiro="Foods">Foods</li>
								<li id="clothes" class="icat" yoshihiro="Clothes">Clothes</li>
								<li id="accessories" class="icat" yoshihiro="Accessories">Accessories</li>
								<li id="sundries" class="icat" yoshihiro="Sundries">Sundries</li>
								<li id="cosmetics" class="icat" yoshihiro="Cosmetics">Cosmetics</li>
								<li id="others" class="icat" yoshihiro="Others">Others</li>
							</ul>
						</div>
						<div class="products">
						<?php
							include('conn.php');
							
							$query="select * from item ";
							$result=mysqli_query($con,$query);
							
							$a=1;
							while($row=mysqli_fetch_array($result))
							{
								if($a%6==1)
								{
									echo '<div id="product-row">';
								}
								
								echo	'<div class="product-table">';
									
										
											echo	'<a  href="product.php?id='.$row[0].'">';
												echo	'<img src="'.$row[4].'" class="goods-picture"/>';
												echo	'<div class="proHover">';
													echo	'<p>'.$row[1].'</p>';
													echo	'<span>DETAIL</span>';
												echo	'</div>';
											echo 	'</a>';
										
									
									echo	'<table class="product-explanation">';
										echo	'<tr>';
											echo	'<td  colspan="2" class="product-td">'.$row[1].'</td>';
										echo	'</tr>';
										echo	'<tr>';
											echo	'<td class="product-td">'.$row[2].'</td>';
											echo	'<td><p class="product-Accessories">'.$row[3].'</p></td>';
										echo	'</tr>';
									echo	'</table>';
								echo	'</div>';

								if($a%6==0)
								{								
									echo	'</div>';
								}
									$a++;
							}
							?>
							</div>
						</div>
						<div class="under-products"></div>
					</div>
					<div class="main-side">
					</div>
				</div>
				<div style="clear:both"></div>
				
<?php include('footer.php'); ?>