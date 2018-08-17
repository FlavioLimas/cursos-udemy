<?php 
// Update

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");

$sql = $conn->prepare(
	"UPDATE tb_usuarios SET deslogin = :USER, dessenha = :PASSWORD
	WHERE idusuario = :ID"
);

$user = "joaquim";
$password = "999";
$id = 1;

$sql->bindParam(":USER",$user);
$sql->bindParam(":PASSWORD",$password);
$sql->bindParam(":ID",$id);

$sql->execute();

echo "Alterado registro no banco";


 ?>