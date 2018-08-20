<?php 
// Usando transações

$conn = new PDO("mysql:hostlocalhost;dbname=dbphp7","root","");
$conn->beginTransaction();

$sql = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

/**
 * passamos um array no metodo execute() quando é utilizado ? na query como nesse exemplo
 */
$sql->execute(array($id));

/**
 * Implementação de cancelamento da transação
 */
// $conn->rollback();

/**
 * Implementando a confirmação da transação
 */
$conn->commit();

echo "Delete Ok";


 ?>