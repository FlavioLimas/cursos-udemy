<?php 
/**
 * Chamada para namespace Cliente
 */
namespace Cliente;
/**
 * extends esta votando um diretório e acessando a classe cadastro
 */
class Cadastro extends \Cadastro{

	public function registrarVenda(){
		echo "Foi registrada uma venda para o cliente ".$this->getNome();
	}
}




 ?>