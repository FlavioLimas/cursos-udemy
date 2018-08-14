<?php 

/**
 * Gerando um dateTime a partir da Classe DateTime()
 metodo add() = permite somar uma data se o caso fosse para diminuir seria utilizado o metodo sub 
 http://php.net/manual/pt_BR/dateinterval.construct.php
 http://php.net/manual/pt_BR/datetime.add.php add()
 http://php.net/manual/pt_BR/datetime.sub.php sub()
 */

$dt = new DateTime();
$teste = new DateTime(date("Y-m-d H:i:s",strtotime("2018-08-14")), new DateTimeZone('America/Sao_Paulo'));
$dtSub = new DateTime();
$periodo = new DateInterval("P15D");
$periodoSub = new DateInterval("PT5H"); // Corrigindo o fuso horario 


echo "<br>";
echo $dt->format("d-m-Y H:i:s");

$dt->add($periodo);
$dtSub->sub($periodoSub);

echo "<br>";
echo $dt->format("d-m-Y H:i:s");
echo "<br><br>";
echo $dtSub->format("d-m-Y H:i:s");
echo "<br><br>";
var_dump($teste);
echo "<br><br>";

// Horario de verão
$dtSub->setTime(
	$dtSub->format("H")-1,
	$dtSub->format("i"),
	$dtSub->format("s")
);
echo $dtSub->format('Y-m-d H:i:s') . "\n";

 ?>