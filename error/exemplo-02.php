<?php 
// Configacao de apresentacao de erros no PHP diretamente via codigo

/** Funcao que sobrescreve o arquivo php.ini e passa os parametros de exibição de erros para o PHP
 * REF http://php.net/manual/pt_BR/function.error-reporting.php
 */
error_reporting(E_ALL & ~E_NOTICE);


$nome = $_GET["nome"];

echo $nome;



 ?>