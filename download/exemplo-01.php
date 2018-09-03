<?php 
// Fazendo download de um arquivo 
// Passando o caminho do arquivo que eu quero baixar
$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

// Recebendo o conteudo do arquivo REF http://php.net/manual/pt_BR/function.file-get-contents.php que pode receber como parametro tanto uma URL como um arquivo local que já esta salvo no seu server
$content = file_get_contents($link);

// vando o conteúdo do arquivo
// var_dump($content);

// parse_url — Interpreta uma URL e retorna os seus componentes REF http://php.net/manual/pt_BR/function.parse-url.php
$parse = parse_url($link);

// basename — Retorna apenas a parte que corresponde ao nome do arquivo de um caminho/path REF http://php.net/manual/pt_BR/function.basename.php
$baseName = basename($parse["path"]);
// criando o arquivo com o nome definido como primeiro parametro
$file = fopen($baseName, "w+");
// Vamos escrever o conteudo do arquivo
fwrite($file,$content);

fclose($file);

 ?>

 <img src="<?=$baseName?>">