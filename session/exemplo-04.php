<?php 

session_id('hp958p824fj15qq9hb1913g364'); // Passando o id da sessão para que seja recuperada do server http://php.net/manual/pt_BR/book.session.php
require("config.php");

session_regenerate_id(); // Função que força a criação de um novo ID para sessão

echo session_id(); // Função que retorna o ID da sessão 

var_dump($_SESSION);
 ?> 