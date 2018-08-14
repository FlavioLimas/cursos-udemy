<?php 
/**
 * Referencia http://php.net/manual/pt_BR/function.setlocale.php
 Setando a localidade do server para o brasil porem existem 3 padrões: Linux / UTF-8 / Windows
 LC_ALL = Mude toda a localização que exite no server para portugues
 */
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

/**
 * Referencia http://php.net/manual/pt_BR/function.strftime.php
 strftime — Formata uma hora/data de acordo com as configurações locais
 ucwords() = Retorna a primeira letra maiuscula de cada palavra
 */
echo "<br>";
echo ucwords(strftime("%A %d de %B de %Y às %T"));
echo "<br>";
echo ucwords(strftime("%c"));
echo "<br>";
echo ucwords(strftime("Século %C"));
echo "<br>";
echo ucwords(strftime("%p"));


 ?>