<?php 
	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Flavio Lima',
		'idade' => 32
	));
	array_push($pessoas, array( // adiciona uma pessoa ao array
		'nome' => 'João',
		'idade' => 25
	));

	echo json_encode($pessoas); // encoda o objeto para o formato json 
 ?>