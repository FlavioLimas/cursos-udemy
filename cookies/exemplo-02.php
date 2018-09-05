<?php 
// Usando os cookies criados na maquina do usuario
// Se o cookie com nome informado existir ele entra no if
if(isset($_COOKIE["TESTE_COOKIE"])){
	// json_decode (,true) com segundo parametro como true retorna um array e sem o true ele retorna um objeto
	$obj = json_decode($_COOKIE["TESTE_COOKIE"]);

	echo $obj->empresa;
}


 ?>
