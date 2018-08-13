<?php 

	/**
	 * soma(int ...$valores):string Na declaração da função quer dizer que terá um retorno do tipo string, mesno que o tipo for outro ele converterá
	 */
	function soma(int ...$valores):string{

		return array_sum($valores);
	}
	
	echo var_dump(soma(2,3));
	echo "<br>";
	echo soma(5,7);
	echo "<br>";
	echo soma(5.5,7.8);
	echo "<br>";


 ?>