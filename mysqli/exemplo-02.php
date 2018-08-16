<?php 
// Referencia http://php.net/manual/pt_BR/class.mysqli.php
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
 * Abrindo a conexão com banco e fazendo uma consulta que será armazenada em $result
 */
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
/**
 * Abaixo ele retorna um dado se o dado existir e armazena na linha $row
 Enquando existir um dado ele armazena, quando não tem o dado é EOF (end of file) chegou ao fim do arquivo
 no caso do fetch_array() ele retorna uma array vazio que para o PHP seria = a false
 dessa forma ele sairia do WHILE
 A constante  MYSQLI_ASSOC passada faz com que o retorno da função retorne somente chave valor e não retorne os indices tambem ou a função fetch_assoc() tambem gera esse retorno
 */

$data = array(); // declarando um array e setando numa variavel data

while($row = $result->fetch_assoc()){
	/**
	 * abaixo vamos ter uma array de arrays com todas as linhas da tabela
	 */
	array_push($data, $row);
	// var_dump($row);
}

echo json_encode($data); // gerando um json a partir dos dados lidos

 ?>