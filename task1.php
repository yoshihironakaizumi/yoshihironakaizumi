<html>
	<body>
		<form action="#" method="GET">
		task1
		<input type="text" name="month"/>
		<input type="submit" value="OK" name="ok"/></br>
		task2
		<input type="number" name="number"/>
		<input type="submit" value="OK" name="ok2"/></br>
		task3
		<input type="number" name="number2"/>
		<input type="number" name="number3"/>
		<input type="submit" value="OK" name="ok3"/></br>
		
		task4
		<input type="number" name="number4"/>
		<input type="number" name="number5"/>
		<input type="number" name="number6"/>
		<input type="submit" value="OK" name="ok4"/><br/>
		</form>
	</body>
</html>
<?php
	if(isset($_GET['ok'])){
		$a=$_GET['month'];
		if($a=="jan"){
			echo "January";
		}
		elseif($a=="feb"){
			echo "February";
		}
		elseif($a=="mar"){
			echo "March";
		}
		elseif($a=="apr"){
			echo "April";
		}
		elseif($a=="may"){
			echo "May";
		}
		elseif($a=="jun"){
			echo "June";
		}
		elseif($a=="jul"){
			echo "July";
		}
		elseif($a=="aug"){
			echo "August";
		}
		elseif($a=="sep"){
			echo "September";
		}
		elseif($a=="oct"){
			echo "October";
		}
		elseif($a=="nov"){
			echo "November";
		}
		elseif($a=="dec"){
			echo "December";
		}
		
	}
	if(isset($_GET['ok2'])){
		$b=$_GET['number'];
		switch($b){
			case 1:{echo "January";}break;
			case 2:{echo "February";}break;
			case 3:{echo "March";}break;
			case 4:{echo "April";}break;
			case 5:{echo "May";}break;
			case 6:{echo "June";}break;
			case 7:{echo "July";}break;
			case 8:{echo "August";}break;
			case 9:{echo "September";}break;
			case 10:{echo "October";}break;
			case 11:{echo "November";}break;
			case 12:{echo "December";}break;
			
		}
		
	}
		
	if(isset($_GET['ok3'])){
		$c=$_GET['number2'];
		$d=$_GET['number3'];
		if($c>$d){
			echo $c." is greater than ".$d;
		}
		if($c<$d){
			echo $d." is greater than ".$c;
		}
		
	}
	
	if(isset($_GET['ok4'])){	
		$e=$_GET['number4'];
		$f=$_GET['number5'];
		$g=$_GET['number6'];
		
		
		if($e>$f && $e>$g){
			echo $e.' is the greatest.';
		}
		elseif($f>$e && $f>$g){
			echo $f.' is the greatest.';
		}
		elseif($g>$e && $g>$f){
			echo $g.' is the greatest.';
		}
	}
		
	

?>