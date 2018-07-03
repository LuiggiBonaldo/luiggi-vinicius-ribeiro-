<html>
<head>
<title>Aula 5</title>
</head>
<body>

<form method="post" action="#">

<label for="a">escreva numero:</label>
<input type="text" id="a" name="a" /><br />

<label for="b">escreva numero:</label>
<input type="text" id="b" name="b" /><br />

<label for="c">escreva numero:</label>
<input type="text" id="c" name="c" /><br />

<label for="d">escreva numero:</label>
<input type="text" id="d" name="d" /><br />

<label for="e">escreva numero:</label>
<input type="text" id="e" name="e" /><br />

<label for="f">escreva numero:</label>
<input type="text" id="f" name="f" /><br />

<label for="g">escreva numero:</label>
<input type="text" id="g" name="g" /><br />

<label for="h">escreva numero:</label>
<input type="text" id="h" name="h" /><br />

<label for="i">escreva numero:</label>
<input type="text" id="i" name="i" /><br />

<label for="j">escreva numero:</label>
<input type="text" id="j" name="j" /><br />

<label for="aa">escreva numero:</label>
<input type="text" id="aa" name="aa" /><br />

<label for="bb">escreva numero: </label>
<input type="text" id="bb" name="bb" /><br />

<label for="cc">escreva numero: </label>
<input type="text" id="cc" name="cc" /><br />

<label for="dd">escreva numero: </label>
<input type="text" id="dd" name="dd" /><br />

<label for="ee">escreva numero:  </label>
<input type="text" id="ee" name="ee" /><br />

<label for="ff">escreva numero: </label>
<input type="text" id="ff" name="ff" /><br />

<label for="gg">escreva numero:</label>
<input type="text" id="gg" name="gg" /><br />

<label for="hh">escreva numero: </label>
<input type="text" id="hh" name="hh" /><br />

<label for="ii">escreva numero: </label>
<input type="text" id="ii" name="ii" /><br />

<label for="jj">escreva numero:</label>
<input type="text" id="jj" name="jj" /><br />

<input type="reset" value="Limpar" name="limpar" >
<input type="submit" value="Enviar" name="submit" />
</form>
<?php
$nota = array();

$nota[] = $_POST['a'];
$nota[] = $_POST['b'];
$nota[] = $_POST['c'];
$nota[] = $_POST['d'];
$nota[] = $_POST['e'];
$nota[] = $_POST['f'];
$nota[] = $_POST['g'];
$nota[] = $_POST['h'];
$nota[] = $_POST['i'];
$nota[] = $_POST['j'];

$nota2 = array();
$nmr2[] =$_POST['aa'];
$nmr2[] =$_POST['bb'];
$nmr2[] =$_POST['cc'];
$nmr2[] =$_POST['dd'];
$nmr2[] =$_POST['ee'];
$nmr2[] =$_POST['ff'];
$nmr2[] =$_POST['gg'];
$nmr2[] =$_POST['hh'];
$nmr2[] =$_POST['ii'];
$nmr2[] =$_POST['jj'];
for($x = 0; $x < count($nota)-1; $x++){
    echo $nota[$x]." x ".$nmr2[$x]." = ".$nota[$x]*$nmr2[$x]."<br>";
}
?>
</body>
</html>