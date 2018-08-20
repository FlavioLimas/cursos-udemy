<?php 
// Delete

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$sql = $conn->prepare(
	"DELETE FROM tb_usuarios WHERE idusuario = :ID"
);

$id = 2;
/**
 * O motodo bindParam() é aplicavel no caso da utilização de uma referencia na query como nesse caso :ID
 */
$sql->bindParam(":ID",$id);

$sql->execute();

echo "Resgistro excluido";


 ?>