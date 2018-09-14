<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php 
// invasão XSS
$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {
	/**
	 * Converte as tags HTML em string impedindo o ataque nos campos input o segundo parametro seria quais as tags permitidas no campo input
	 */
	echo strip_tags($_POST['busca'], "<strong><a>");
	echo "<br>";
	/**
	 * Converte todo o conteudo do input text em string (os caracteres especiais são convertidos em caracteres unicode exemplo: &nbsp;)
	 */
	echo htmlentities($_POST['busca']);
}





 ?>