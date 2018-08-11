<?php 
function ola($texto = "Mundo", $periodo = "Bom dia"){ // Por padrão quando setamos o valor na passagem do parametro na função ele define o valor padrão caso não seja passado o valor na chamada da função
	return "Olá $texto! $periodo!<br>";
}
function olaValorObrigatorio($texto, $periodo = "Bom dia"){ // Quando for obrigatorio a passagem do parametro da função o valor obrigatorio deve ficar sempre a esquerda
	return "Olá $texto! $periodo!<br>";
}
echo ola(); // Chamada com valor padrão
echo ola("","Boa noite"); // Para não escrever nada deve ser passado o valor vazio
echo ola("Flavio","Boa tarde");
echo ola("João","");

 ?>