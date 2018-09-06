<?php 
// Trabalhando com biblioteca de geração de imagem GD

// Tipo da imagem que vc quer criar
header("Content-Type: image/png");

// resolucao da imagem que vc quer criar
$image = imagecreate(256, 256);

// Palheta de cores imagecolorallocate(image, red, green, blue)
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// imagestring(image, font de 1 a 5 onde 5 é o maior valor, x, y, string, color);
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

// Chamando a funcao para criacao da imagem (render image)
imagepng($image);

// Destruindo o objeto que cria a imagem
imagedestroy($image);


 ?>