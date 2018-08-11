<?php 
//session_start(); comando que starta o uso da sessão

require_once("config.php");

// session_unset($_SESSION['nome']); // A função session_unset($_SESSION['nome']) limpa o conteudo armazenado na seção
// session_unset(); // A função session_unset() apaga totas as seções
// session_destroy($_SESSION['nome']); // A função destroi a sessão existente se o usuário acessar novamente ele terá uma nova sessão

echo $_SESSION['nome'];
 ?>