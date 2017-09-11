<html>
	<body>
		<form action="#" method="GET">
		<input type="number" name="number"/>
		<input type="submit" value="ok" name="ok"/>
		</form>
	</body>
</html>

<?php
	$a=array(1,2,4,54,24,64,2,46,47,23,44);
	echo '<pre>';
	print_r($a);
	$x=$_GET['number'];
	if(isset($_GET['ok']))
	{
		for($b=0;$b<=10;$b++)
		{
			if($a[$b]==$x)
			{
				for($c=$b;$c<=10;$c++)
				{
					$a[$c]=$a[$c+1];
				}
			}
		}
		echo "<pre>";
		print_r($a);
	}
	
	
	// $a=array(8,81,74,55,22,81,76,55,9,10);
	// if(isset($_GET['ok']))
	// {
		// $x=$_GET['number'];
		// $count=0;
		// for($b=0;$b<=9;$b++)
		// {			
			// if($x==$a[$b])
			// {
				// $count=$count+1;
			// }
		// }
		// if($count>0)
		// {
			// echo "Your number is ".$x." found ".$count."times";
		// }
		// else
		// {
			// echo "Your number is ".$x." not found";
		// }
	// }
	
	
	
	// $a=array(81,82,76,74,78,57);
	// if(isset($_GET['ok']))
	// {
		// $x=$_GET['number'];
		// for($b=0;$b<=5;$b++)
		// {
			// if($x==$a[$b])
			// {
				// echo $x;
			// }
		// }
	// }
	
	
	// $a=array();
	// $a[0][0]=96;
	// $a[0][1]=94;
	// $a[1][0]=86;
	// $a[1][1]=72;
	// $a[2][0]=60;
	// $a[2][1]=35;
	// $a[3][0]=38;
	// $a[3][1]=43;
	// $a[4][0]=59;
	// $a[4][1]=71;
	// $a[5][0]=56;
	// $a[5][1]=57;
	// $a[6][0]=38;
	// $a[6][1]=39;
	// $a[7][0]=39;
	// $a[7][1]=30;
	// $a[8][0]=29;
	// $a[8][1]=48;
	// $a[9][0]=11;
	// $a[9][1]=8;
	
	// $c=0;
	// for($b=0;$b<=9;$b++)
	// {
		// for($d=0;$d<=1;$d++)
		// {
			// $c=$c+$a[$b][$d];
		// }
	// }
	
	// echo $c;
	
	// $a=array(1,2,33,44,41,45,46,46,5,75);
	// foreach($a as $yoshihiro)
	// {
		// echo $yoshihiro.'<br/>';
	// }
?>


			 <?php
				// $a=array(1,2,3,4,5,6,7,8,9,10);
				// $b=array("Raj","Yoshihiro","Yoshikazu","Takuya","Takeru","Abby","Yuya","Yuki","Hiroshi","Shotaro");
				// $c=array(11111,22222,33333,44444,55555,66666,77777,88888,99999,100000);
				// $d=array("Delhi","Gurgaon","Tokyo","Yokohama","Fukuoka","Paris","New York","London","Las vegas","Kanagawa");
				// $e=array("Japan","India","US","UK","the philippines","Netherland","China","Korea","Mexico","Spain");
			// ?>
<!-- <html>
	// <body>
		// <table>
			// <tr>
				// <td>id</td>
				// <td>name</td>
				// <td>phone</td>
				// <td>city</td>
				// <td>country</td>
			// </tr>-->
			 <?php
				// for($d=0;$d<=9;$d++)
				// {
					// echo '<tr>
							// <td>'.$a[$d].'</td>
							// <td>'.$b[$d].'</td>
							// <td>'.$c[$d].'</td>
							// <td>'.$d[$d].'</td>
							// <td>'.$e[$d].'</td>
						// </tr>';
				// }
			// ?>
	<!--	// </table>
	// </body>
// </html>-->



<?php
	$a=array(1,2,3,4,5,6,7,8,9,10);
	$b=array("Raj","Yoshihiro","Yoshikazu","Takuya","Takeru","Abby","Yuya","Yuki","Hiroshi","Shotaro");
	$c=array(11111,22222,33333,44444,55555,66666,77777,88888,99999,00000);
	$d=array("Delhi","Gurgaon","Tokyo","Yokohama","Fukuoka","Paris","New York","London","Las vegas","Kanagawa");
	$e=array("Japan","India","US","UK","the philippines","Netherland","China","Korea","Mexico","Spain");

	
	// $a=array(8,6,9,2,3,12,81,86,96,99);
	// $b=array(3,9,2,6,16,22,29,33,46,40);
	// $c=array();
	
	// for($d=0;$d<=9;$d++)
	// {
		// $c[$d]=$a[$d]+$b[$d];
	// }
	// echo '<pre>';
	// print_r($c);
	
	
	
	// $a=array(81,96,63,86,76,55,65,61,69,78,82);
	
	// echo '<pre>';
	// print_r($a);
	
	// for($b=0;$b<=9;$b++)
	// {
		// for($c=$b+1;$c<=10;$c++)
		// {
			// if($a[$b]<$a[$c])
			// {
				// $temp=$a[$c];
				// $a[$c]=$a[$b];
				// $a[$b]=$temp;
			// }
		// }
	// }
	// echo '<pre>';
	// print_r($a);
	
	
	// $d=0;
	// for($c=0;$c<=10;$c++)
	// {
		// $d=$d+$a[$c];
	// }
	// echo $d;
	
	
	// $c=18;
	// $d=6;
	// echo $c;
	// echo $d;
	// $temp=$c;
	// $c=$d;
	// $d=$temp;
	// echo $c;
	// echo $d;
	
	
	
	// for($b=10;$b>=0;$b--)
	// {
	
		// echo $a[$b].'<br/>';
	// }
	
	
	
	// $a=array();
		// $a[0]="Yoshihiro";
		// $a[1]="Raj";
		// $a[2]="Takuya";
		// $a[3]="Yuya";		
		// $a[4]="Hiroshi";		
		// $a[5]="Yuki";		
		// $a[6]="Yoshi";		
		// $a[7]="Shosuke";		
		// $a[8]="tarou";		
		// $a[9]="Kaito";		
		
		// // echo $a[0].'<br/>';
		// // echo $a[1].'<br/>';
		// // echo $a[2].'<br/>';
		// // echo $a[3].'<br/>';
		// // echo $a[4].'<br/>';
		// // echo $a[5].'<br/>';
		// // echo $a[6].'<br/>';
		// // echo $a[7].'<br/>';
		// // echo $a[8].'<br/>';
		// // echo $a[9].'<br/>';
		
		// echo'<pre>';
		// print_r($a);
?>