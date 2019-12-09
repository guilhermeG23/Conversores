<?php
if (strlen($_GET["arquivo"]) > 0) {
	$arquivo_del = $_GET["arquivo"];
	shell_exec("rm -rf ../arquivos/$arquivo_del");
} else {
	$formato = $_GET["formato"];
	shell_exec("rm -rf ../arquivos/*.$formato");
}
include("../funcoes/funcoes.php");
$caminho = voltar_caminho($_GET["caminho"]);
$retorno = explode("/",$caminho);
$caminho = "../" . $retorno[count($retorno) - 1];
header("Location: $caminho");
die();
?>
