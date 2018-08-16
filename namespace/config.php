<?php
// Namespace permite que seja agupado em um diretorio todas as Classes de forma organizadas

spl_autoload_register(function($nameClass){

	var_dump($nameClass);

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
	if (file_exists($filename)) {
		
		require_once($filename);
	}
});

?>