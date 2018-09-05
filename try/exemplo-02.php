<?php 

function trataNome($name){

	if (!$name) {
		throw new Exception("Nenhum nome foi informado.", 1);
		
	}
	echo ucfirst($name)."<br>";
}

try{
	trataNome("flavio");

	trataNome("");

} catch(Exception $e){

	echo $e->getMessage();

} finally{ // Idependente de ser executado os blocos try ou catch será executado o bloco finally
	echo "Executou finally";

}

 ?>