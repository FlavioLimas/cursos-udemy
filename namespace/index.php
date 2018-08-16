<?php 

require_once("config.php");
/**
 * Usando um name space
 */
use Cliente\Cadastro;
/**
 * A estancia abaixo esta referenciando o Cliente não o Cadastro que esta na raiz
 */
$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();



 ?>