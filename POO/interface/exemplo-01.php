<?php 
// Interface

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}
/**
 * Criando a Classe que implementa a interface
 */
class Civic implements Veiculo{

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


$carro = new Civic();

$carro->trocarMarcha(5);
$carro->frenar(0);
$carro->acelerar(200);



 ?>