<?php 

$fileName = "usuarios.csv";
// Se o arquivo existir entra no if
if (file_exists($fileName)) {
	// vai abrir o arquivo e ler "read" ele
	$file = fopen($fileName, "r");

	// vai pegar a primeira linha escrira no arquivo e converter em string a partir do separador ","
	$headers = explode(",",fgets($file));

	//var_dump($headers);
	$data = array();
	while ($row = fgets($file)) {
		$rowData = explode(",",$row);
		$coluna = array();

		for($i = 0;$i < count($headers);$i++){
			$coluna[$headers[$i]] = $rowData[$i];
		}
		array_push($data,$coluna);
	}
	fclose($file);

	echo json_encode($data);
}


 ?>