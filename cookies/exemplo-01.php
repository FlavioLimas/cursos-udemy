<?php 
// Implementando cookies REF http://php.net/manual/pt_BR/function.setcookie.php

$data = array(
	"empresa"=>"Hcode Treinamentos"
);

// setcookie("NOME_DO_COOKIE",qual será o conteudo do cookie, tempo para que o cookie seja apagado em times-temp)
setcookie("TESTE_COOKIE",json_encode($data),time() + 3600);

echo "Cookie Criado";

 ?>