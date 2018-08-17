<?php 
// Delete

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$sql = $conn->prepare(
	"DELETE FROM tb_usuarios WHERE idusuario = :ID"
);

$id = 2;

$sql->bindParam(":ID",$id);

$sql->execute();

echo "Resgistro excluido";


 ?>