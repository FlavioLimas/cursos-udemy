<?php 
// Tratando erros
/**
 * Funcao que ira manipular o disparo da excecao
 Ira receber os parametros do erro para que possa tratar
 */ 
function tratandoErros($code, $message, $file, $line){
	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"line"=>$line
	)
);
}

// Definir manipulador de erros Chamada da funcao que sera executada no disparo do exception
set_error_handler("tratandoErros");


echo 100 / 0;



 ?>