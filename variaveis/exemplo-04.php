<?php 
// Variaveis pré definidas ou arrays super globais
	// $nome = (int)$_GET["a"];
	// var_dump($nome);

	$ip = $_SERVER["REMOTE_ADDR"]; /*Pega informações do ambiente como nesse exemplo o IP do server*/
	$scriptName = $_SERVER["SCRIPT_NAME"]; /*Pega informações do ambiente como nesse exemplo o nome do scrip que esta sendo executado no server*/

	echo $ip . '<br>';
	echo $scriptName;
 ?>