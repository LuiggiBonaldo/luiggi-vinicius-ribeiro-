<!DOCTYPE html>
<html>
<head>
	<title>2php</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="#">
	<label for="n1">Escreva</label>
	<input type="numb" id="n1" name="n1" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n2" name="n2" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n3" name="n3" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n4" name="n4" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n5" name="n5" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n6" name="n6" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n7" name="n7" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n8" name="n8" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n9" name="n9" /><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n10" name="n10" /><br />
<input type="submit" value="Enviar" name="submit" />
</form>
<?php
$z =array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],);
echo 'Numeros Negativos :';
	echo "</br>";
	foreach ($z as $valor) {
	 	if ($valor<0) {
	 		echo "$valor</br>";
	 	}
}
echo 'Numeros Positivos :';
	echo "</br>";
	foreach ($z as $ti ) {
	 	if ($ti>0) {
	 		echo "$ti</br>";
	 	}
}
for ($i = 0; $i < count($z); $i++){
    if ($z[$i] % 2 == 0)
        echo "O Número é par: $z[$i]<br />";
    else
        echo "O Número é impar: $z[$i]<br />";
}
?>
</body>
</html>