<?php 
// impedindo ataque a sessoes
session_start();

// Em toda página onde tiver autenticação, depois de verificar login e senha reiniciar o ID da sessão (gerando um novo ID)
session_destroy();

// Iniciando a sessão novamente
session_start();

// Gerando novo ID de sessão
session_regenerate_id();


echo session_id();




 ?>