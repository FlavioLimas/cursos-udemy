<?php 
class Endereco{
// http://php.net/manual/pt_BR/language.oop5.magic.php
	private $logradouro;
	private $numero;
	private $cidade;
	/**
	 * Declaração de metodo magico "Construtor" setando os atributos da classe
	 Todo o Metodo magico começa com "__"
	 */
	public function __construct($logradouro,$numero,$cidade){

		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;

	}
	/**
	 * O metodo destrutor é chamado quando o objeto é removido da memoria, isso ocorrer ao final da execução da classe automaricamente caso não seja definido esse metodo 
	 */
	public function __destruct(){
		var_dump("DESTRUCT");
	}
	/**
	 * Metodo magico que converte o objeto retornando uma string esses casoé utilizado para imprimir uma objeto na tela
	 */
	public function __toString(){
		return $this->logradouro . "," . $this->numero . " - " . $this->cidade;
	}
}


$meuEndereco = new Endereco("Rua Barão de Alencar","31","São Paulo");
// var_dump($meuEndereco);

/**
 * Chamada do metodo __destruct() passando o objeot $meuEndereco
 */
// unset($meuEndereco);

echo $meuEndereco;

 ?>