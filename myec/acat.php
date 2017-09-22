<?php
	$yoshcat = $_POST['yoshcat'];
	//$yoshcat = rtrim($_POST['yoshcat'],"s");
	

	include('conn.php');
	$query = '';
	if($yoshcat == 'all')
	{
		$query="select * from item ";
	}
	else
	{
		$query="select * from item where icategory ='# ".$yoshcat."'";
	}
	 
	$result=mysqli_query($con,$query);
	
	$a=1;
	while($row=mysqli_fetch_array($result))
	{
		//print_r($row);
		if($a%6==1)
		{
			echo '<div id="product-row">';
		}
		
		echo	'<div class="product-table">';
					echo	'<a  href="product.php?id='.$row[0].'">';
						echo	'<img src="'.$row[4].'" class="goods-picture"/>';
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