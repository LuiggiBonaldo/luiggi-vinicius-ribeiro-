<!DOCTYPE html>
<html>
<head>
	<title>exercicio 3</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="#">
	<label for="n1">Escreva</label>
	<input type="numb" id="n1" name="n1" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n2" name="n2" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n3" name="n3" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n4" name="n4" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n5" name="n5" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n6" name="n6" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n7" name="n7" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n8" name="n8" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n9" name="n9" required=""/><br />
	<label for="n1">Escreva</label>
	<input type="numb" id="n10" name="n10" required=""/><br />
	<label for="n1">O multiplicando</label>
	<input type="numb" id="multp" name="multp" /><br />
<input type="submit" value="Enviar" name="submit" />
</form>
<?php
$nmr =array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],);
$r =  $_POST["multp"];
foreach ($nmr as $value) {
	$w=$value*$r;
 	echo "$value".'*'."$r".'='."$w"."</br>";
}
?>
</body>
</html>