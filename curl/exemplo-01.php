<?php 
// Trabalhando com a biblioteca CURL REF http://php.net/manual/pt_BR/book.curl.php
$cep = "031310100";

$link = "https://viacep.com.br/ws/$cep/json/";

// Inicia o cURL
$curl = curl_init($link);

// Informa que a implementação terá um retorno
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);

// Valição de SSL para saber se é valido ou não
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);

// pegando o retorno da execução
$response = curl_exec($curl);

// fechando a conexão
curl_close($curl);

// Decodificando para array passando o true no segundo parametro
$data = json_decode($response, true);

print_r($data);

?>