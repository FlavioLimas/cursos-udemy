<?php 
// Função que recebe a disparada da excecao manipuladorErros REF http://www.php.net/manual/pt_BR/function.set-error-handler.php 
function manipuladorErros($code, $message, $file, $line){
	echo json_encode(array(
		'code'=>$code,
		'message'=>$message,
		'file'=>$file,
		'line'=>$line
	)
);
}

/** REF http://www.php.net/manual/pt_BR/function.set-error-handler.php
 * O parametro seria o nome da funcao de que recebera a disparada do exception
 */
set_error_handler("manipuladorErros");

$total = 100 / 0;



 ?>