<?php 
/**
 * Estanciando uma conexão com banco de dados
 */
$conn = new mysqli("localhost", "root","","dbphp7");
/**
 * Tratando erro caso exista
 */
if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
}

/**
 * Fazendo insert
 */

$stmt = $conn->prepare(
	"INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)"
);
/**
 * O metodo abaixo recebe os parametros que serão setados no lugar das interrogacões acima "ss" = string string se fosse um numero inteiro seria i; double = d e se fosse um blob = b
 os parametro passado como argumentos $login, $pass não podem ser passados diretamente devem ser referenciados
 */
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

/**
 * Solicitando a execução do comando sql
 */
$stmt->execute();

/**
 * Para inserir outro registro
 */

$login = "root";
$pass = "!@#$";

$stmt->execute();

 ?>