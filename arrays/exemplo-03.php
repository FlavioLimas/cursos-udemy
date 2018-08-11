<?php 
	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Flavio Lima',
		'idade' => 32
	));
	array_push($pessoas, array(
		'nome' => 'João não, no meu caminhão ninguem me diz não',
		'idade' => 25
	));

	print_r($pessoas[1]['nome']);
 ?>