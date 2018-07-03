<!DOCTYPE html>
<html>
<head>
	<title>1php</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$aluno = array("luiggi", "ripister", "holy","vinicius", "tite");
$notas = array(7,10,9,6,7,5);
$media=($notas[0]+$notas[1]+$notas[2]+$notas[3]+$notas[4])/5; 
foreach ($aluno as $value) {
    echo "$value <br>";
}
echo 'Notas:';

foreach ($notas as $value) {
 	echo "$value <br>";
}
echo 'a média é  '."$media";

echo 'maior nota é   ';
echo max($notas);
?>
</body>
</html>