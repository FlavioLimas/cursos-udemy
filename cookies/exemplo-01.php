<?php 
//Criando cookie http://php.net/manual-lookup.php?pattern=cookie&scope=quickref
$data = array(
	"empresa"=>"Hcode Treinamentos"
);
// setcookie("NOME_COOKIE", conteudo do cookie, tempo de permanencia do cookie
setcookie("TESTE_COOKIE", json_encode($data), time() + 3600);

echo "Cookie Criado";


 ?>