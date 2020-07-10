<?php
$caminho = $_POST["caminho"];
if (isset($_FILES['arquivo'])) {
	$arquivo = $_FILES['arquivo']['name'];
	$arquivo = $arquivo . date("His");
	$arquivo = preg_replace('/[^A-Za-z0-9]/', '_', $arquivo);
	$arquivo = $arquivo . '.jpg';
	$arquivo_input = '../trabalho/'.$arquivo;
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo_input);
	shell_exec("convert 60% -resize 50% $arquivo_input ../arquivos/$arquivo");
	shell_exec("rm -rf $arquivo_input");
}
$retorno = explode("/",$caminho);
$caminho = "../" . $retorno[count($retorno) - 1];
header("Location: $caminho");
die();