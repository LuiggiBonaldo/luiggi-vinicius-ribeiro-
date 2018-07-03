<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>7php</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	$caras=array(
		array("pedro","Sao Paulo","39","f"),
		array("junior","Santos","66","m"),
		array("luiggi","itanhaem","16","m"),
		array("Marcos","PG","70","m"),
		array("o tal dela","cleber","02","f"),
		array("halison","bauru","1000","f"),
		array("Clark","Estrema","35","m"),
		array("xuxa","EUA","10","f"),
	);

	for($i=0;$i<sizeof($caras);$i++){
		echo "<br>";
		echo "Nome: ".$caras[$i][0] ." , Idade: ".$caras[$i][2];
	}
		echo "<br> <br> <b> Moradores de santos:</b>";	
 		for($i=0;$i<sizeof($caras);$i++) {

			if ($caras[$i][1]=="Santos") {
		
			echo "<br>Nome: ".$caras[$i][0];
	 	}
}
		echo "<br> <br> <b> Maiores de 18:</b>";	
 		for($i=0;$i<sizeof($caras);$i++) {
			if ($caras[$i][2]>=18) {
			echo "<br>Nome: ".$caras[$i][0];
	 	}
}
		echo "<br> <br> <b> Quantidade de homens:</b>";	
		$r=0;
 		for($i=0;$i<sizeof($caras);$i++) {

			if ($caras[$i][3]=="m") {
		 $r++ ;
		}
}
		echo "Quant. total: ".$r;
?>
</body>
</html>