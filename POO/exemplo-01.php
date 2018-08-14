<?php 

class Pessoa{

	public $nome; // Atributo

	public function falar(){ // Metodo

		return "O meu nome é " . $this->nome; 
	}


}


$flavio = new Pessoa();

$flavio->nome = "Flavio Lima";

echo $flavio->falar();


 ?>