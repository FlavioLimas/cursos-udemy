<?php 
$condicao = true;

while($condicao){
	$numero = rand(1,10); //função para pegar uma nuero randomico no intervalo
	if ($numero === 3) {
		echo"TRÊSsss!";
		$condicao = false; //terminando while setando a condição como false
	}
	echo $numero ." ";
}
 ?>