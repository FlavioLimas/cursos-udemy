<?php 
// Renderizando uma imagem no browser em base 64
$fileName = "1.jpg";

$base64 = base64_encode(file_get_contents($fileName));
/**
 * Classe interna do PHP que pega informações do tipo do arquivo 
 parametro do metodo construtor FILEINFO_MIME_TYPE seria uma constante que vai pedir o tipo mime do arquivo
 Ref http://php.net/manual/pt_BR/function.finfo-file.php
 */
$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileInfo->file($fileName);

// Montando padrão de exibição do base 64: "data:image/png;base64," concatenado com a string da base 64

$base64encode =  "data:" . $mimetype . ";base64," . $base64;


 ?>
<!-- Chamada da string com base 64 encodada no link com abreviação href para chamada da variavel em PHP -->
<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">