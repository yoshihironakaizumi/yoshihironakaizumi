<html>
	<head>
		
	</head>
	<body>
		<form action="#" method="GET">
		No. of time<input type="number" name="number1"/>
		No. of row<input type="number" name="number2"/>
		No. of type<input type="number" name="number3"/>
		<input type="submit" value="ok" name="ok"/>
		</form>
	</body>
</html>


<?php
	// $a=1;
	// while($a<=5)
	// {
		// $c=1;
		// while($c<=5-$a)
		// {
			// echo "_";
			// $c++;
		// }
		// $b=1;
		// while($b<=$a)
		// {
			// echo "*";
			// $b++;
		// }
		// echo "<br/>";
		
		// $a++;
	// }



	// $a=1;
	// while($a<=5)
	// {
		// $b=1;
		// while($b<=$a)
		// {
			// echo "*";
			// $b++;
		// }
		// echo "<br/>";
		
		// $a++;
	// }

	$a=$_GET['number1'];
	$b=$_GET['number2'];
	$c=$_GET['number3'];
	if(isset($_GET['ok']))
	{
		for($m=1;$m<=$a;$m++)
		{
			switch($c)
			{
				case 1:
				{
					for($d=1;$d<=$b;$d++)
					{
						for($e=1;$e<=$b-$d;$e++)
						{
							echo "-";
						}
						for($f=1;$f<=$d;$f++)
						{
							echo "*";
						}
						echo "<br/>";
					}
				}break;
				case 2:
				{
					for($g=1;$g<=$b;$g++)
					{
						for($h=1;$h<=$g;$h++)
						{
							echo "*";
						}
						for($n=1;$n<=$b-$g;$n++)
						{
							echo "-";
						}
						echo "<br/>";
					}
				}break;
				case 3:
				{
					for($i=1;$i<=$b;$i++)
					{
						for($j=1;$j<=$i;$j++)
						{
							echo "-";
						}
						for($h=1;$h<=$b-$i;$h++)
						{
							echo "*";
						}
						echo "<br/>";
					}
				}break;
				case 4:
				{
					for($k=1;$k<=$b;$k++)
					{
						for($l=1;$l<=5-$k;$l++)
						{
							echo "*";
						}
						for($o=1;$o<=$k-1;$o++)
						{
							echo "-";
						}
						echo "<br/>";
					}
				}break;
			}
		}
	}
	
	
	
	
	
	// for($l=1;$l<=12;$l++)
	// {
		// switch($l)
		// {
			// case 1:{echo 'january  ';}
			// case 2:{echo 'february ';}
			// case 3:{echo 'march ';}
			// case 4:{echo 'april ';}
			// case 5:{echo 'may ';}
			// case 6:{echo 'june ';}
			// case 7:{echo 'july ';}
			// case 8:{echo 'august ';}
			// case 9:{echo 'september ';}
			// case 10:{echo 'october ';}
			// case 11:{echo 'november ';}
			// case 12:{echo 'december ';}
		// }
		// echo '</br> ';
	// }

	// $a=$_GET["number1"];
	// $b=$_GET["number2"];
	// if(isset($_GET['ok']))
	// {
		// for($c=1;$c<=$a;$c++)
		// {
			// for($d=1;$d<=$b;$d++)
			// {
				// for($e=1;$e<=$d;$e++)
				// {
					// echo "*";
				// }
				// echo "<br/>";
			// }
		// }
	// }

	// for($a=1;$a<=9;$a++)
	// {
		// if($a==1)
		// {
			// echo "*********";
		// }
		// elseif($a==9)
		// {
			// echo "*********";
		// }
		// elseif($a<=5)
		// {
			// for($b=1;$b<=6-$a;$b++)
			// {
				// echo '* ';
			// }
			// for($c=1;$c<=2*$a-3;$c++)
			// {
				// echo "_";
			// }
			// for($d=1;$d<=6-$a;$d++)
			// {
				// echo "*";
			// }
		// }
		// elseif($a>5)
		// {
			// for($e=1;$e<=$a-4;$e++)
			// {
				// echo "*";
			// }
			// for($f=1;$f<=17-2*$a;$f++)
			// {
				// echo "_";
			// }
			// for($g=1;$g<=$a-4;$g++)
			// {
				// echo "*";
			// }
		// }
		// echo '<br/> ';
	// }
	
	


	// for($a=1;$a<=9;$a++)
	// {
		// if($a<=5)
		// {
			// for($b=1;$b<=5-$a;$b++)
			// {
				// echo "*";
			// }
			// for($c=1;$c<=$a;$c++)
			// {
				// echo $c;
			// }
			// for($d=$a-1;$d>=1;$d--)
			// {
				// echo $d;
			// }
		// }
		// else
		// {
			// for($e=1;$e<=$a-5;$e++)
			// {
				// echo "*";
			// }
			// for($f=1;$f<=9-$a;$f++)
			// {
				// echo $f;
			// }
			// for($g=10-$a;$g>=1;$g--)
			// {
				// echo $g;
			// }
		// }
		// echo "<br/>";
	// }
	
	// for($a=1;$a<=5;$a++)
	// {		
			// if($a==1)
			// {
				// echo "*********";
			// }
			// else
			// {
				// for($b=1;$b<=6-$a;$b++)
				// {
					// echo "*";
				// }
				// for($c=1;$c<=2*$a-3;$c++)
				// {
					// echo "-";
				// }
				// for($d=1;$d<=6-$a;$d++)
				// {
				// echo "*";
				// }		
			// }
		// echo '<br/> ';
	// }
	


	// for($a=1;$a<=9;$a++)
	// {
		// if($a<=5)
		// {
			// for($b=1;$b<$a;$b++)
			// {
				// echo "&nbsp;&nbsp;";
			// }
			// for($c=5;$c>=$a;$c--)
			// {
				// echo "*";
			// }
			// echo "<br/>";
		// }
		// if($a>5)
		// {
			// for($d=1;$d<=9-$a;$d++)
			// {
				// echo "&nbsp;&nbsp;";
			// }
			// for($e=1;$e<=$a-4;$e++)
			// {
				// echo "*";
			// }
			// echo "<br/>";
		// }
	// }


	// for($a=1;$a<=9;$a++)
	// {
		// if($a<=5)
		// {
			// for($b=5;$b>=$a;$b--)
			// {
				// echo "*";
			// }
			// echo "<br/>";
		// }
		// if($a>5)
		// {
			// for($c=2;$c<=$a-3;$c++)
			// {
				// echo "*";
			// }
			// echo "<br/>";
		// }
	// }

	// for($a=1;$a<=5;$a++)
	// {
		// for($b=5;$b>$a;$b--)
		// {
			// echo '* ';
		// }
		// for($c=1;$c<=$a;$c++)
		// {	
			// echo $c;
		// }
		// for($d=$a-1;$d>=1;$d--)
		// {
			// echo $d;
		// }
		// echo '<br/> ';
	// }
	

	// for($a=1;$a<=5;$a++)
	// {
		// for($b=1;$b<$a;$b++)
		// {
			// echo '* ';
		// }
		// for($c=1;$c<=6-$a;$c++)
		// {
			// echo $c;
		// }
		// for($d=5;$d>$a;$d--)
		// {
			// echo $d-$a;
		// }
		// echo '<br/> ';
	// }

	// for($a=1;$a<=9;$a++)
	// {
		// if($a<=5)
		// {
			// for($c=1;$c<=5-$a;$c++)
			// {
				// echo "*";
			// }
			// for($b=1;$b<=$a;$b++)
			// {
				// echo $b;
			// }
			// echo '<br/> ';
		// }
		// else
		// {
			// for($d=1;$d<=$a-5;$d++)
			// {
				// echo "*";
			// }
			// for($e=1;$e<=10-$a;$e++)
			// {
				// echo $e;
			// }
			// echo '<br/> ';
		// }
	// }

	

	// for($a=5;$a>=1;$a--)
	// {
		// for($c=5;$c>$a;$c--)
		// {
			// echo "*";
		// }
		// for($b=1;$b<=$a;$b++)
		// {
			// echo $b;
		// }
		
			
		
		// echo '<br/> ';
	// }

	// for($a=1;$a<=5;$a++)
	// {
		// for($b=5;$b>$a;$b--)
		// {
			// echo "*";
		// }
		// for($c=1;$c<=$a;$c++)
		// {
			// echo $c;
		// }
			
		
		// echo '<br/> ';
	// }
	
	
	// for($a=1;$a<=9;$a++)
	// {	
		// if($a<=5)
		// {
			// for($b=1;$b<=$a;$b++)
			// {
				// echo $b;
			// }
			// echo '<br/> ';
		// }
		// else
		// {
			// for($c=1;$c<=10-$a;$c++)
			// {
				// echo $c;
			// }
			// echo '<br/> ';
		// }
	// }

		// for($a=5;$a>=1;$a--)
	// {
		// for($b=$a;$b>=1;$b--)
		// {
			// echo $b;
		// }
		// echo '<br/> ';
	// }

	
	
	// for($a=5;$a>=1;$a--)
	// {
		// for($b=1;$b<=$a;$b++)
		// {
			// echo $b;
		// }
		// echo '<br/> ';
	// }


	// for($a=1;$a<=5;$a++)
	// {
		// for($b=1;$b<=$a;$b++)
		// {
			// echo $b;
		// }
		// echo '<br/> ';
	// }

	// $c='A ';
	// for($d=1;$d<=4;$d++)
	// {
		// for($e='A ';$e<='D ';$e++)
		// {
			// echo $e;
		// }
		// echo '<br/> ';
	// };
	
	// echo '<br/> ';
	
	// for($f='A ';$f<='E ';$f++)
	// {
		// for($g=1;$g<=5;$g++)
		// {
			// echo $f;
		// }
		
		// echo '<br/> ';
	// }
	
	// echo '<br/> ';
	
	// for($a=1;$a<=6;$a++)
	// {
		// for($b=1;$b<=4;$b++)
		// {
			// echo $c++;
		// }
		// echo '<br/> ';
	// };
	
	
	
	


	// for($b=1;$b<=5;$b++){
	// for($a=1;$a<=5;$a++)
	// {
		// echo $b;
	// };
	// echo '<br/> ';
	// };

	
// $b = 'A ';
	// for($a=1;$a<=26;$a++)
	// {
		// echo $b++.'</br> ';
	// }

	// for($a=1;$a<=27;$a++)
	// {
		// switch($a)
		// {
			// case 1:{echo "A"}
			// case 2:{echo "B"}
			// case 3:{echo "C"}
			// case 4:{echo "D"}
			// case 5:{echo "E"}
			// case 6:{echo "F"}
			// case 7:{echo "G"}
			// case 8:{echo "H"}
			// case 9:{echo "I"}
			// case 10:{echo "J"}
			// case 11:{echo "K"}
			// case 12:{echo "L"}
			// case 13:{echo "M"}
			// case 14:{echo "N"}
			// case 15:{echo "O"}
			// case 16:{echo "P"}
			// case 17:{echo "Q"}
			// case 18:{echo "R"}
			// case 19:{echo "S"}
			// case 20:{echo "T"}
			// case 21:{echo "U"}
			// case 22:{echo "V"}
			// case 23:{echo "W"}
			// case 24:{echo "X"}
			// case 25:{echo "Y"}
			// case 26:{echo "Z"}
		// }
	// }
	// $a=$_GET['number1'];
	// $b=$_GET['number2'];
	// if(isset($_GET['ok']))
	// {
		
		// for($c=$a;$c>=$b;$c--)
		// {
			// if($c%2 != 0)
			// {
				// echo $c.'</br> ';
			// }
			
		// }
		
		
	// }


	// for($a=20;$a>=1;$a--){
		// echo $a.'<br/> ';
	// }
	
	
	
	
	
	// $b=$_GET['number'];
	// for($a=1;$a<=10;$a++){
		// echo $a*$b;
	// }
	// if(isset($_GET['ok'])){
		
		
		// $a=$_GET['number'];
		// $c=$_GET['number'];
		// for($b=1;$b<=10;$b++){
			// echo $a.'<br/> ';
			// $a=$a+$c;
		// }
	// }
	
	// for($a=2;$a<=20;$a++){
		// if($a%2==0){
			// echo $a;
		// }
	// }
	
	
	
	// for($a=1;$a<=10;$a++){
		// echo "yoshihiro";
	// }
	// echo '<br/> ';
	// for($b=1;$b<=10;$b++){
		// echo $b.'<br/> ';
	// }
	
?>