<?php 
// Exemplo de Try catch

try{
	// Gerando uma excecao com codigo de erro 400
	throw new Exception("Houve um erro",400);

}catch(Exception $e){ // Tratando a excecao gerada
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"cod"=>$e->getCode()
		)
	);
}


 ?>