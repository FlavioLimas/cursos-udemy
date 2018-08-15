<?php 
// Polimorfismo
/**
 * Quando vc não sabe o que é, isso pode caracterizar uma classe abstrata, dessa forma vc precisa de criar uma outra classe para implementar a classe abstrata
 */
abstract class Animal{
	/**
	 * Animal possui 2 metodos nessa classe abstrata
	 */
	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}
}
/**
 * A classe Cachorro esta estendendo Animal, dessa forma é possivel aplicar o polimorfismo sobrescrevendo o metodo falar(){} conforme abaixo
 */
class Cachorro extends Animal{
	public function falar(){//Sobreescrita
		return "Late";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "canta";
	}
	public function mover(){
		return "Voa e ". parent::mover(); // Chamando o metodo mover() da classe abstract Animal e sobrecarregando
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";

echo $pluto->mover() . "<br>";
echo"-----------------------------------------<br>";
$garfield = new Gato();

echo $garfield->falar() . "<br>";

echo $garfield->mover() . "<br>";

echo"-----------------------------------------<br>";
$piuPiu = new Passaro();

echo $piuPiu->falar() . "<br>";

echo $piuPiu->mover() . "<br>";


 ?>