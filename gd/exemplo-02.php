<?php 
// Gerando certificado a partir de uma imagem

// Carregando a imagem base
$image = imagecreatefromjpeg("certificado.jpg");
// Setando a Cor da fonte como cinza
$titleColor = imagecolorallocate($image, 0, 0, 0);
// 
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Flavio Lima", $titleColor);
// Converte uma string com caracteres ISO-8859-1 codificadas com UTF-8 para single-byte ISO-8859-1 Deixa caracteres de acenturação legiveis http://php.net/manual/pt_BR/function.utf8-decode.php
imagestring($image, 3, 415, 390, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

// Tipo da imagem que vc quer criar
header("Content-type: image/jpeg");

// Gerando imagem do novo certificado com a data atual
imagejpeg($image, "certificado-".date("Y-m-d").".jpg",80);

imagedestroy($image);

 ?>