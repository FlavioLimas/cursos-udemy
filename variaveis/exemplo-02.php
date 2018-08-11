<?php 
	$anoNascimento = 1920;

	$nome1 = "João";

	$sobreNome = "Rangel";

	echo $nome1 . " " . $sobreNome . '<br>';

	// echo $nome1 . '<br>';
// unset destroi o conteúdo da variavel ou objeto
	unset($nome1);
// isset verifica se foi setado a variavel ou objeto
	(isset($nome1) ? var_dump($nome1) : 0);
// O comando exit para a execução do php
	exit
 ?>