<?php 
// Scaneando diretório scandir("images") retorna um array
$images = scandir("images");

$data = array();

foreach($images as $img){
	/**http://php.net/manual/pt_BR/function.in-array.php
	 * A função in_array() Checa se um valor existe em um array
	 */
	if(!in_array($img, array(".",".."))){
		$fileName = "images" . DIRECTORY_SEPARATOR . $img;
		// pathinfo() extrai as informações de um arquivo
		$info = pathinfo($fileName);
		// Adiciona a chave size ao array e a função filesize() retorna o tamanho do arquivo em bytes
		$info["size"] = filesize($fileName);
		/** http://php.net/manual/pt_BR/function.filemtime.php
		  * Retorna Unix timestamp filemtime() Obtém o tempo de modificação do arquivo 
		  */  
		$info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
		/**
		 * Mapear a URL do arquivo URL
		 */
		$info["url"] = "http://localhost/cursos/php-udemy/DIR/".str_replace("\\","/",$fileName);
		array_push($data,$info);
	}
}

echo json_encode($data);

// var_dump($images);




	
 ?>