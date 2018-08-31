<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

/**
 * http://php.net/manual/pt_BR/function.implode.php
 */

// print_r($headers);
// print_r($usuarios);

$file = fopen("usuarios.csv","w+");

fwrite($file,implode(",",$headers) . "\r\n");

foreach ($usuarios as $row) {
	$data = array();

	foreach ($row as $key => $value) {
		array_push($data,$value);
	}

	fwrite($file,implode(",",$data)."\r\n");
} //Final do foreach que le a linha

fclose($file);

 ?>