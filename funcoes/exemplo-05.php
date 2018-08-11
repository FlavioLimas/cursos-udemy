<?php 
$a = 10;

function trocaValor(&$b){ // Passagem de parametro por referencia / Passagem de parametro por valor não tem o & ao lado da função
	$b += 50;
	return $b;

}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";

echo $a;

 ?>