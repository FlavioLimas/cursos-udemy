<?php

 // Tipos basicos
	$nome = "Hode";
	$site = "www.hcode.com.br";
	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;

// Tipos compostos

	$frutas = array("abacaxi", "laranja","manga");

	echo $frutas[2] . '<br>';

	$nascimento = new DateTime();
	// var_dump($nascimento);

	// Tipos especiais

	$arquivo = fopen("exemplo-03.php", "r");
	var_dump($arquivo) . '<br>';

	$nulo = null;
	$vazio = "";
?>