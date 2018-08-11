<?php 
	$nome = "Flavio";

	function teste(){
		// global cria uma referencia para a veriavel $nome que está fora do escopo dessa função
		global $nome;
		echo $nome;
	}

	function teste2(){
		$nome = "Lima";
		echo $nome . "agora no teste 2";
	}

	teste();
	teste2();
 ?>