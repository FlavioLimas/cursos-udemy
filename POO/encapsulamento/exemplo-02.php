<?php 
// Aula sobre encapsulamento
/**
 * niveis de acesso dos atributos
 */
class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

}
/**
 * Herança
 */
class Programador extends Pessoa {

	public function verDados(){

		/**
		 * Essa função retorna qual a classe que foi instanciada
		 */
		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

}

$objeto = new Programador();

// echo $objeto->senha . "<br>";
/**
 * Programador esta herdando metodos e atributos de Pessoa
 */
$objeto->verDados(); 


 ?>