<?php 

$fileName = "usuarios.csv";
// Se o arquivo existir entra no if
if (file_exists($fileName)) {
	// vai abrir o arquivo e ler "read" ele
	$file = fopen($fileName, "r");

	// vai pegar a primeira linha escrira no arquivo e converter em string a partir do separador ","
	$headers = explode(",",fgets($file));

	//var_dump($headers);

	while ($row = fgets($file)) {
		var_dump($row);
	}
	fclose();
}


 ?>