<?php session_start();?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/home.css"/>
		<script src="javascript/jquery-3.2.1.js"></script>
		<script>
		$(document).ready(function(){
			$('#buttonright').click(function(){
				$('#front2').show();
				$('#front1').hide();
			});
			$('#buttonleft').click(function(){
				$('#front1').show();
				$('#front2').hide();
			});
			
			$('.login').click(function(){
				$('#modalwrapperLogin').fadeIn(500);
			});
			
			$('#loginClose').click(function(){
				$('#modalwrapperLogin').fadeOut(500);
			});
			
			$('.register').click(function(){
				$('#modalwrapperRegister').fadeIn(500);
			});
			
			$('#registerClose').click(function(){
				$('#modalwrapperRegister').fadeOut(500);
			});
			
			$('#newAccount').click(function(){
				$('#modalwrapperLogin').fadeOut(500);
				$('#modalwrapperRegister').fadeIn(500);
			});
			
			$('.item').click(function(){
				$('#modalItem').fadeIn(500);
			});
			
			$('#modalItemClose').click(function(){
				$('#modalItem').fadeOut(500);
			});
			
			// $('.goods-picture').hover(function(){
				// $('.proHover').stop().fadeIn('fast');
			// },function(){
				// $('.proHover').stop().fadeOut();
			
			// });
			
			$('#quantity').change(function(){
				var quentity = $(this).val();
				var price = $('.price').text();
				$('#subprice').text(quentity*price);
				
			});
			
			$('.icat').click(function(){
				var yoshcat = $(this).attr('yoshihiro');
				$.ajax({
					type : "POST",
					url : 'acat.php',
					data :{yoshcat:yoshcat},
					dataType : 'text',
					success:function(response)
					{
						$('.products').html(response);
					}
				});
			});
			
			$('#next1').click(function(){
				var oname = $('#oname').val();
				var onumber = $('#onumber').val();
				var oaddress = $('#oaddress').val();
				var oemail = $('#oemail').val();
				
				$.ajax({
					type:"POST",
					url:'abuy.php',
					data:{oname:oname,onumber:onumber,oaddress:oaddress,oemail:oemail},
					dataType:'text',
					success:function(response){
						$('#buy-form').html(response);
					}
				});
			});
			
			$(document).on('click','#next2',function(){
				var delivery = $('[name=deliverytype]:checked').val();
				var payment = $('[name=paymenttype]:checked').val();
				var onamea = $('#onamea').val();
				var onumbera = $('#onumbera').val();
				var oaddressa = $('#oaddressa').val();
				var oemaila = $('#oemaila').val();
				//alert(onamea);
				$.ajax({
					type:"POST",
					url:'abuy2.php',
					data:{delivery:delivery,payment:payment,onamea:onamea,onumbera:onumbera,oaddressa:oaddressa,oemaila:oemaila},
					dataType:"text",
					success:function(response){
						$('#buy-form').html(response);
					}
				});
			});
			
			$(document).on('click','#next3',function(){
				var deliveryb = $('#deliveryb').val();
				var paymentb = $('#paymentb').val();
				var onameb = $('#onameb').val();
				var onumberb = $('#onumberb').val();
				var oaddressb = $('#oaddressb').val();
				var oemailb = $('#oemailb').val();
				var gift = $('[name=gifttype],checked').val();
				//alert("Hi");
				$.ajax({
					type:"POST",
					url:'delivery.php',
					data:{deliveryb:deliveryb,paymentb:paymentb,onameb:onameb,onumberb:onumberb,oaddressb:oaddressb,oemailb:oemailb,gift:gift},
					dataType:"text",
					success:function(response){
						$('#buy-form').html(response);
					}
				});
			});
			
			
			
			
			
			
		});
		</script>
		
	</head>
	<body>
			<div class="flame">
				<div class="header">
					<div id="modalwrapperLogin">
						<div id="loginContents">
						
							<div><p>LOGIN</p></div>
							<form action="login.php" method="POST">
								<span id="username">User Name</span><br/>
								<input type="text" placeholder="User Name" id="name1" name="uname" required/><br/>
								<span id="pass">Password</span><br/>
								<input type="password" placeholder="Password" id="password" name="upass" required/><br/>
								<input type="submit" value="submit" id="submit" name="loginsubmit" style="background-color:green;"/><br/>
								<span id="or">or</span><br/>	
								<input type="submit" value="Facebook" id="submit" style="background-color:blue;"/><br/>
								<span id="notMember">not member?</span><br/>
								<input type="submit" value="Create Your Account" id="newAccount"/>
								<input type="button" value="close" id="loginClose"/>
							</form>
							
						</div>
					</div>
					<div id="modalwrapperRegister">
						<div id="registerContents">
							<div><h5>REGISTER</h5></div>
							<form action="register.php" method="POST" enctype="multipart/form-data">
								<table>
									<tr>
										<td><span>User Name</span></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="2"><input type="text" id="name2" name="rname" required/></td>
									</tr>
									<tr>
										<td><span>Password</span></td>
										<td><span>Confirm Password</span></td>
									</tr>
									<tr>
										<td><input type="password" class="password2" name="rpass" required/></td>
										<td><input type="password" class="password2" required/></td>
									</tr>
									<tr>
										<td><p id="mail">Mail Address</p></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="2"><input type="email" id="email" name="remail" required/></td>
									</tr>
									<tr>
										<td><span>Gender</span></td>
										<td><span>Date of Birth</span></td>
									</tr>
									<tr>
										<td><input type="radio" class="genderButton" value="male" name="rgender"required/><span class="gender">Male</span>
										    <input type="radio"  class="genderButton" value="female" name="rgender" required/><span class="gender">Female</span></td>
										<td><input type="text" placeholder="ex.1983/01/04" id="dob" name="rdob" required/></td>
									</tr>
									<tr>
										<td><span>Image</span></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="2"><input type="file" value="Choose an img" class="upload" name="rimg" required/></td>
									</tr>
								</table>
								<input type="submit" value="Submit" id="submit2" name="rsubmit"><br/>
							</form>
							
							<span id="or2">or</span><br/>
							<input type="button" value="Facebook" id="facebook2"/><br/>
							<input type="button" value="Close" id="registerClose"/><br/>
						</div>
					</div>
					<div id="modalItem">
						<ul>
							<li class="lispace"></li>
							<a href="category.php?cat=1"><li><span>Foods</span></li></a>
							<a href="category.php?cat=2"><li><span>Clothes</span></li></a>
							<a href="category.php?cat=3"><li><span>Accessories</span></li></a>
							<a href="category.php?cat=4"><li><span>Sundries</span></li></a>
							<a href="category.php?cat=5"><li><span>Cosmetics</span></li></a>
							<a href="category.php?cat=6"><li><span>Other</span></li></a>
							<li id="modalItemClose"><span>Close</span></li>
							<li class="lispace"></li>
						</ul>
					</div>
					<div class="blank">
					</div>
					<a  href="home.php">
						<div class="home">
							<img src="img/home.png" />
							<p style="color:black;">HOME</p>
						</div>
					</a>
					<div class="item">
						<img src="img/search.png"/>
						<p>ITEM</p>
					</div>
					<div class="misao">
						<img src="img/misao.jpg" align="top" style="margin-left:330px;float:left;"/>
						<p id="uname">
						
					<?php
					if(isset($_SESSION['uname']))
					{
						echo '<span  >Hello!<br/>'.$_SESSION['uname'].'</span>';
						echo	'</p>';
						echo '<img src="'.$_SESSION['uimg'].'" id="uimage"/>';
						
					}
						
					echo	'</div>';
					if(isset($_SESSION['uid']))
					{
						echo'<a href="logout.php">';
						echo'<div class="loginset">';
							echo'<img src="img/logout.png"/>';
							echo'<p>LOG OUT</p>';
						echo'</div>';
						echo'</a>';
					}
					else
					{
						echo'<div class="login">';
							echo'<img src="img/login.gif"/>';
							echo'<p>LOG IN</p>';
						echo'</div>';
						echo'<div class="register">';
						echo'<img src="img/info.png"/>';
						echo'<p>REGISTER</p>';
					echo'</div>';
					}
			
					if(isset($_SESSION['uid'])){
						include('conn.php');
						$query="select * from cart where uid='".$_SESSION['uid']."'";
						$result=mysqli_query($con,$query);
						$count=mysqli_num_rows($result);
						
					echo'<a href="cart.php">';
					echo'<div class="cart">';
						echo '<div id="cartitem"><p>'.$count.'</p></div>';
						echo'<img src="img/cart.jpg"/>';
						echo'<p>CART</p>';
					echo'</div>';
					echo'</a>';
					}
					else
					{
					echo'<div class="cart">';
						echo'<img src="img/cart.jpg"/>';
						echo'<p>CART</p>';
					echo'</div>';

					?><script>$(document).ready(function(){
							$('.cart').click(function(){
								alert('login first');
							});
						});</script><?php
					}
					?>
					
					<div class="blank">
					</div>
					
				</div>