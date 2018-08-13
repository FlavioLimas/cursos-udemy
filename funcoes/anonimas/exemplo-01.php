<?php 
// Funções anonimas
/**
 * Exemplo de função anonima sem return, pois funcoes anonimas não possuem retorno
 */
function test($callback){
	// Processo lento

	$callback();
}

test(function(){

	echo "Terminou!";

});

 ?>