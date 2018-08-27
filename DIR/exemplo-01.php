<?php 
// Trabalahando com diretóios
$name = "images";
// Se não existe diretório
if(!is_dir($name)){
	mkdir($name);
	echo "Diretório $name criado com sucesso!";
}else{
	// removendo o diretório
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";
}

	
 ?>