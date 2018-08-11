<?php 
	$nome = "flavio lima";
	$nome = strtoupper($nome);
	echo $nome . "<br>";
	$nome = strtolower($nome);
	echo $nome . "<br>";

	// A função abaixo converte a primeira letra da palavra em maiuscula
	$nome = ucwords($nome);
	echo $nome . "<br>";
	// A função abaixo converte a primeira letra de cada palavra em maiuscula
	$nome = ucfirst($nome);
	echo $nome . "<br>";


 ?>