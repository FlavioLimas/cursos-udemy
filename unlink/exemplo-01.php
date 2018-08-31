<?php 

$file = fopen("teste.txt","w+");



fclose($file);

// Apaga o arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";


 ?>