<?php 
/**
 * Função PHP que registra mais de uma função auto load dessa forma podemos procurar em mais de um diretorio
 funções SPL referencia:
 http://php.net/manual/pt_BR/book.spl.php
 */

function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse.".php") === true){

		require_once($nomeClasse.".php");
		
	}
}
/**
 * Chamada da função incluirClasses que passa como parametro o nome da classe que por sua vez verifica se o arquivo existe com o nome da respectiva classe
 */
spl_autoload_register("incluirClasses");
/**
 * Outra opção seria utilziar da forma abaixo passando a função anonima como parametro
 */
spl_autoload_register(function($nomeClasse){
	/**
	 * Verificando se existe uma arquivo com esse nome no diretorio informado no if(...)
	 */
	if(file_exists("abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
		require_once("abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php");
	}
});

$carro = new DelRey();

$carro->acelerar(80);

 ?>