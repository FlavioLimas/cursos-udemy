<?php 
// exemplo-04.php quem chama esse arquivo
/**
 * Implementando o recaptcha do google https://www.google.com/recaptcha/
 */

$email = $_POST["inputEmail"];

// var_dump($_POST);

/**
 * Chamada de URL externa via API
 */

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
		"secret"=>"6LceRHAUAAAAAHbF9NFMUfltpSZER6x6cn6tOuTg",
		"response"=> $_POST["g-recaptcha-response"], // A resposta da requisição post
		"remoteip"=> $_SERVER["REMOTE_ADDR"] // Pegando o IP do usuário
)));

/**
 * Esperando um retorno da URL chamada
 */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/**
 * Transformando o json da respota num array
 */
$recaptcha = json_decode(curl_exec($ch), true);

// Fechando a conexão
curl_close($ch);

// Verificando retorno do recaptcha
if ($recaptcha["success"] === true){
	echo "OK: ".$_POST["inputEmail"];
} else {
	// Redirect para a pagina exemplo-04
	header("Location: exemplo-04.php");
}


 ?>