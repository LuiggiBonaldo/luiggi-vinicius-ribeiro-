<html>
    <head>
      <meta charset = "utf-8">
      <title>8php</title>
     </head>
    <?php
        $automovel= array("City","Hb20","Doblo","Celta","March","Corsa","Ranger","Toro","Ecosport","Tucson");
        $marca =array("Honda","Hyundai","Fiat","GM","Nissan","GM","Ford","Fiat","Ford","Hyundai");
		$cor = array("prata", "preto", "verde", "preto", "prata", "branco", "prata", "branco", "preto", "vinho");
		$portas = array("4", "4", "4", "2", "2", "2", "4", "4", "4", "4");
        $ano = array("2016", "2015", "2013", "2012", "2015", "2010", "2012", "2014", "2013", "2012");
		echo("Os modelos dos carros e os seus respectivos anos são:  <br><br>");
		for ($y=0;$y<10;$y++)
		{
            echo($automovel[$y]." - ".$ano[$y]);
		}
		    echo("<br><br>Os veículos da cor prata são:");
		for ($y=0;$y<1;$y++)
		{
            echo($automovel[0] .";". $automovel[4].";".$automovel[6]);
		}
		echo("<br><br>Todos os veículos, cor e quantidade de portas:  <br><br>");
		for ($y=0;$y<1;$y++)
		{
            echo($automovel[0].", ".$cor[0] . ", ".$portas[0]."<br>");
			echo($automovel[1] . ", ".$cor[1] . ", ".$portas[1] . "<br>");
			echo($automovel[2].", ".$cor[2] . ", ".$portas[2]."<br>");
			echo($automovel[3].", ".$cor[3].", ".$portas[3]."<br>");
			echo($automovel[4].", ".$cor[4].", ". $portas[4]."<br>");
			echo($automovel[5] .", " . $cor[5] .", " .$portas[5] ."<br>");
			echo($automovel[6] .", " . $cor[6] . ", " . $portas[6] . "<br>");
			echo($automovel[7] . ", " . $cor[7] . ", " . $portas[7] . "<br>");
			echo($automovel[8] .", " . $cor[8] . ", " . $portas[8] . "<br>");
			echo($automovel[9] . ", " . $cor[9] . ", " . $portas[9] . "<br>");
		}
		echo("Os veículos da Ford são:");
			for ($y=0;$y<1;$y++)
		{
            echo($automovel[6] . ";" . $automovel[8] . "<br>");
		}
		echo("Os veículos com ano igual ou maior a 2013 são:");
		for ($y=0;$y<1;$y++)
		{
 echo($automovel[0] .";" . $automovel[1] .";" . $automovel[2] . ";" . $automovel[4] . ";" . $automovel[7] . ";" . $automovel[8] .  ";");
		}
    ?>
</body>
</html>