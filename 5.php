<!DOCTYPE html>
<html>
<head>
	<title>5PHP</title>
	<meta charset="utf-8">
</head>
<body>
<form method="post" action="#">
  <label for="n1">Escreve:</label>
  <input type="numb" id="n1" name="n1" /><br />
  <input type="submit" name="Enviar"></input>
</form>
<?php
	$t =  $_POST["n1"];
   $b = array(
      '1' => 'Janeiro',
      '2' => 'Fevereiro',
      '3' => 'Março',
      '4' => 'Abril',
      '5' => 'Maio',
      '6' => 'Junho',
      '7' => 'Julho',
      '8' => 'Agosto',
      '9' => 'Setembro',
      '10' => 'Outubro',
      '11' => 'Novembro',
      '12' => 'Dezembro',
   );
switch ($t) {
    case "1":
        echo "$b[1]";
        break;
    case "2":
        echo "$b[2]";
        break;
    case "3":
        echo "$b[3]";
        break;
    case "4":
        echo "$b[4]";
        break;
    case "5":
        echo "$b[5]";
        break;
    case "6":
        echo "$b[6]";
        break;
    case "7":
        echo "$b[7]";
        break;
    case "8":
        echo "$b[8]";
        break;
    case "9":
        echo "$b[9]";
        break;
    case "10":
        echo "$b[10]";
        break;
    case "11":
        echo "$b[11]";
        break;
    case "12":
        echo "$b[12]";
        break;
    default:
        echo "Não tem isso nao bro";
}
?>
</body>
</html>