<?php 
// escapeshellcmd() A função impede a injeção de comandos passados via POST ou GET REF http://php.net/manual/pt_BR/function.escapeshellcmd.php


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
	$cmd = escapeshellcmd($_POST["cmd"]);
	var_dump($cmd);


	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

 ?>


 <form method="post">
 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>
 </form>