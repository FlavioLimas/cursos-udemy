<?php 
	$a = null;
	$b = null;
	$c = 10;

	echo $a ?? $b ?? $c; /*Imprime caso o $a for null ele imprime $b caso for null imprime o $c*/
?>