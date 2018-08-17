<?php 
// PDO referencia http://php.net/manual/pt_BR/class.pdo.php

/**
 * Abrindo a conexão com banco de dados
 */
$conn = new PDO("mysql:dbname=dbphp7;localhost", "root", "");
/**
 * Selecionando os dados
 */
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

/**
 * O metodo fetchAll() vai retornar todas as linhas já fatiadas do banco de dados e a constante passada como parametro PDO::FETCH_ASSOC força que não seja retornado os indices (retorna só chave valor)
 */
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

/**
 * percorrendo as linhas que retornram do banco
 */
foreach($results as $row){
	/**
	 * percorrendo as colunas de cada linha retornando chave e valor
	 */
	foreach ($row as $key => $value) {

		echo "<strong>".$key.":</strong>".$value."<br>";
	}
	echo "================================================<br>";
}


 ?>