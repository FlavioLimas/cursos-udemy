<?php 
// Insert

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$comand = $conn->prepare(
	"INSERT INTO tb_usuarios(deslogin,dessenha)VALUES(:LOGIN,:PASSWORD)");

$login = "jose";
$password = "123456789";
/**
 * O metodo bindParam() passará para query os parametros que serão inseridos no banco de dados
 */
$comand->bindParam(":LOGIN",$login);
$comand->bindParam(":PASSWORD",$password);

$comand->execute();

echo "Inserido Ok!";



 ?>