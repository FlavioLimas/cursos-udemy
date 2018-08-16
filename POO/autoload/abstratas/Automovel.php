<?php 

// Classes abstratas

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}
/**
 * Definindo classe abstrata que quando for implementada nunca poderá ser somente um Automovel deverá implementar o Veiculo obrigatoriamente 
 */
abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "<br>O veiculo acelerou até " . $velocidade . " km/h<br>";
	}

	public function frenar($velocidade){
		echo "O Veículo frenou até " . $velocidade . "km/h<br>";
	}

	public function trocarMarcha($marcha){
		echo "O veiculo engatou a marcha " . $marcha . "<br>";
	}

}



?>