<!DOCTYPE html>
<html>
<head>
	<title>Mencari Nilai Terbesar</title>
</head>
<body>
<p>Nilai Terbesar Adalah</p>
Variabel A : <input type="text" name="a"><br>
Variabel B : <input type="text" name="b"><br>
Variabel C : <input type="text" name="c"><br>
<br>

<?php
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];

	echo "<br>";
	echo "Variabel A = ".$a."<br>";
	echo "Variabel B = ".$b."<br>";
	echo "Variabel C = ".$c."<br>";

	if($a > $b && $a>$c){
		echo "Variabel terbesar adalah Variabel ".$a;
	}elseif ($b > $a && $b>$c) {
		echo "Variabel terbesar adalah Variabel ".$b;
	}elseif ($c > $b && $c > $a) {
		echo "Variabel terbesar adalah Variabel ".$c;
	}

?>
</body>
</html>