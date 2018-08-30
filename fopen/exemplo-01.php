<?php 

/**
  * Manipulação de arquivos com fopen() referencia http://php.net/manual/pt_BR/function.fopen.php 
  */ 

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s"). "\r\n");

fclose($file);

echo "Arquivos criado com sucesso";



 ?>