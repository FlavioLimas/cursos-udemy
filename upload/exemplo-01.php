<!-- Form sem o action para enviar para propria pagina / enctype="mulpart/form-data" seria para enviar dados binarios-->
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Send</button>
</form>

<?php 
/**
 * Verificando qual o tipo da solicitação se é GET ou POST ou até mesmo outra
 */
if($_SERVER["REQUEST_METHOD"] === "POST"){
	// Recebendo o conteudo enviado
	$file = $_FILES["fileUpload"];
	// Se receber um erro será lançado uma exceção
	if ($file["error"]) {
		throw new Excrption("Error: " . $file["error"]);
	}
	// Criando diretório temporário para upload de arquivos que tenha permissão somente de escrita e que não poder executar PHP para evitar que seja feito upload de um arquivo PHP e executado no server
	$dirUploads = "uploads";
	// Verificando se o diretorio existe se não existe vai criar já com permisão de escrita somente por uma questão padrão do sistema
	if (!is_dir($dirUploads)) {
		mkdir($dirUploads);
	}
	// Movedo o diretório temporário no servidor a instrução que esta dentro do if retorna true ou false por isso está no if
	if (move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
		echo "Upload Realizado com sucesso!";
	}else{
		throw new Exception("Não foi possivel realizar o upload");
	}
}


 ?>