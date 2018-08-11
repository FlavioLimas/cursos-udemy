<?php  
	$json = '[{"nome": "Flavio Lima","idade": 32},{"nome": "João","idade": 25}]'; // pode ser uma URL com arquivo json

	$data = json_decode($json, true); // Decodifica um arquivo no formato json e o parametro true seria para não ser tranformado em um objeto

	var_dump($data);

?>