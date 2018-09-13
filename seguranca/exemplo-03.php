<?php 
// Permissao de arquivos

$dir = "arquivos";
$permissao = "0775"; // Upload de aruivos
// 0755 no caso de leitura e execucao

if (!is_dir($dir)) {
	mkdir($dir, $permissao);

	echo "Diretório criado com sucesso!";
}



 ?>