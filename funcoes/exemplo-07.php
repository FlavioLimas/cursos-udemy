<?php 

	/**
	 * A notação que esta na area de recebimento de parametros permite receber a quantidade de valores passados como argumento da função idependente da quantidade.
	Se informado o pipo vc força o recebimento do parametro naquela determinado tipo, porem se vc não informar, ele adatará o tipo para conforme passado como parametro
	 */
	function soma(int ...$valores){

		return array_sum($valores);
	}
	
	echo soma(2,3);
	echo "<br>";
	echo soma(5,7);
	echo "<br>";
	echo soma(5.5,7.8);
	echo "<br>";


 ?>