<?php 
// Excluindo arquivos
if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	// Ele só entra no if se não tiver no array . ou ..
	if(!in_array($item,array(".",".."))){

		unlink("images/" . $item);
	}
}

echo "Deletado arquivos";


 ?>