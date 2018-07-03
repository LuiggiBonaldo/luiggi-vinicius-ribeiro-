<!DOCTYPE html>
<html>
<head>
	<title>6php</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="#">
	<label for="n1">Escreve</label>
	<input type="numb" id="nmr1" name="nmr1" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr2" name="nmr2" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr3" name="nmr3" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr4" name="nmr4" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr5" name="nmr5" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr6" name="nmr6" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr7" name="nmr7" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr8" name="nmr8" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr9" name="nmr9" /><br />
	<label for="n1">Escreve:</label>
	<input type="numb" id="nmr10" name="nmr10" /><br />
<input type="submit" value="Enviar" name="submit" />
</form>
<?php
$z=array($_POST["nmr1"],$_POST["nmr2"],$_POST["nmr3"],$_POST["nmr4"],$_POST["nmr5"],$_POST["nmr6"],$_POST["nmr7"],$_POST["nmr8"],$_POST["nmr9"],$_POST["nmr10"],);
$y=array_reverse($z);
echo "</br>";
foreach ($y as $valor) {
 	echo "$valor <br>";
}
?>
</body>
</html>