<?php 
require("config.php");
echo "<br>";
echo session_save_path(); // Retona o caminho onde está sendo salvo o arquivo de sessão

var_dump(session_status()); // retorna 0 quando a sessão esta disabilitada; 1 para sessão habilitada porem não definida e 2 para sessão ativa referencia: http://php.net/manual/pt_BR/function.session-status.php
echo "<br>";

switch(session_status()){
	case PHP_SESSION_DISABLED: 
		echo "As sessões estiverem desabilitadas.";
	break;
	case PHP_SESSION_NONE:
		echo "Sessões estiverem habilitadas, mas nenhuma existir.";
	break;
	case PHP_SESSION_ACTIVE:
		echo "Sessões estiverem habilitadas, e uma existir.";
	break;
}

 ?>