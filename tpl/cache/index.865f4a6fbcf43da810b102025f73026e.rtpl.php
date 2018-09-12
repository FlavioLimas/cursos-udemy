<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Teste de Template</title>
</head>
<body>
	<h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?> Cacilds</h1>
	<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
	<p>Mussum Ipsum, cacilds vidis litro abertis. A ordem dos tratores não altera o pão duris. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Viva Forevis aptent taciti sociosqu ad litora torquent. Atirei o pau no gatis, per gatis num morreus.</p>
</body>
</html>