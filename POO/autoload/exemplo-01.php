<?php 
// Autoload
/**
 * Para functionar sem o autoload teriamos que usar o require_onde da forma abaixo em todos os arquivos 
 */
// require_once("DelRey.php");

/**
 * Função magica que seta o autoload abaixo
 recebe como parametro o nome da Classe que foi chamada
 */
function __autoload($nomeClasse){
	var_dump($nomeClasse); // Aqui vc confirmar que esta chamando as duas classes DelRey e Automovel
	require_once("$nomeClasse.php");

}

$carro = new DelRey();
$carro->acelerar(80);
$carro->frenar(0);

 ?>