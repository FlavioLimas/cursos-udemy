<?php 
function ola(){
	$argumentos = func_get_args(); // Pega todos os arugumentos passados para função, se ele for passado ou não / Esse recurso pode ser utilziado para sobrebrecarregar função
	return $argumentos;

}

var_dump(ola("bom dia",10,20.4,true,null));


 ?>