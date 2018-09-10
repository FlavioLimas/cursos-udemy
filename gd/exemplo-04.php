<?php 
// Gerando um thumbnail a partir de uma imagem
header("content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

/** Listando elementos do array
REF http://www.php.net/manual/pt_BR/function.list.php
 * 
 */
list($old_width, $old_heigth) = getimagesize($file);

/** Criando palheta com todas as cores 
 * REF http://www.php.net/manual/pt_BR/function.imagecreatetruecolor.php
 */
$new_image = imagecreatetruecolor($new_width,$new_height);
$old_image = imagecreatefromjpeg($file);

// Função que permite criar thumbnail e também permite fazer o crop ou resize da imagem
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_heigth);

// Gerar a imagem jpeg
imagejpeg($new_image);

// Destruir as imagens da memoria
imagedestroy($old_image);
imagedestroy($new_image);


 ?>