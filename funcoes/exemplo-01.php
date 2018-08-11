<?php 

/**
 * Uma rotina não tem retorno
 */
function olaRotina(){
	echo "Olá Rotina!<br>";
}
/**
 * Uma função tem retorno
 */
function olaFuncao(){
	return "Olá Função!<br>";
}

olaRotina();
echo "<br>";
olaRotina();
echo "<br>";
echo olaFuncao();
echo "<br>";
echo olaFuncao();


 ?>