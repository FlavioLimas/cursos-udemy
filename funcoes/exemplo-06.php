<?php 
	
$pessoa = array(
	'nome' =>'Flavio',
	'idade' =>20
);
foreach ($pessoa as &$value) {
	/**
	 * Quando ele detectar que o valor é inteiro ele vai somar 10 ao parametro idade o objeto pessoa foi referenciado na memoria isso quer dizer que ele somou 10 ao valor declarado no objeto pessoa
	 */
	if(gettype($value === 'integer')) $value += 10;
	echo $value . ' dentro do if <br>';
}

print_r($pessoa);

 ?>