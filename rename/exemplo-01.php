<?php 
// Renomeando arquivos e ou movendo e renomeando nome do arquivo ou caminho REF http://php.net/manual/pt_BR/function.rename.php

$dir1 = "folder-01";
$dir2 = "folder-02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$fileName = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)) {
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);
}
// http://php.net/manual/pt_BR/function.rename.php
rename(
	$dir1 . DIRECTORY_SEPARATOR . $fileName, // Origem
	$dir2 . DIRECTORY_SEPARATOR . $fileName // Destino
);

echo "Arquivo movido com sucesso!";


 ?>