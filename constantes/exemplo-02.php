<?php
// Setando uma constante usando array (novo recurso do PHP 7)
	define("BANCO_DE_DADOS", [
		'127.0.0.1',
		'root',
		'password',
		'teste'
	], true /* seria para definir a chamada da constante sem ser case sensitive*/);

	print_r(BANCO_DE_DADOS);
?>