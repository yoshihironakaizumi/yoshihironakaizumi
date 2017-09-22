<?php include('header.php');?>
	<div id="catmain">
		<div id="catmain-pro">
	<?php
		switch($_GET['cat'])
		{
		case 1 : $cat="# Foods";break;
		case 2 : $cat="# Clothes";break;
		case 3 : $cat="# Accessories";break;
		case 4 : $cat="# Sundries";break;
		case 5 : $cat="# Cosmetics";break;
		case 6 : $cat="# Others";break;
		}
		echo'<h1>'.$cat.'</h1>';
		echo'<hr/>';
		
		include('conn.php');
		$query="select * from item where icategory='".$cat."'";
		$result=mysqli_query($con,$query);
		
		
		echo'<ul>';
		while($row=mysqli_fetch_array($result))
		{
			echo'<li>';
				echo'<figure>';
					echo'<a href="product.php?id='.$row[0].'">';
					echo'<img src="'.$row[4].'" class="catimg">';
					echo'</a>';
					echo'<figcaption>'.$row[1].'</figcaption>';
				echo'</figure>';
				echo'<p>Rs '.$row[2].'</p><p class="cate">'.$row[3].'</p>';
			echo'</li>';
		}
		echo'</ul>';
?>
		</div>
		<div id="catmain-choice">
			<ul id="categories">
				<a href="category.php?cat=1"><li>Foods</li></a>
				<a href="category.php?cat=2"><li>Clothes</li></a>
				<a href="category.php?cat=3"><li>Accessories</li></a>
				<a href="category.php?cat=4"><li>Sundries</li></a>
				<a href="category.php?cat=5"><li>Cosmetics</li></a>
				<a href="category.php?cat=6"><li>Others</li></a>
			</ul>
		</div>
	</div>	
<?php include('footer.php');?>