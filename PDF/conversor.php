<?php
$caminho = $_POST["caminho"];
if (isset($_FILES['arquivo'])) {
	$arquivo = $_FILES['arquivo']['name'];
	$arquivo = $arquivo . date("His");
	$arquivo = preg_replace('/[^A-Za-z0-9]/', '_', $arquivo);
	$arquivo = $arquivo . '.pdf';
	$arquivo_input = '../trabalho/'.$arquivo;
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo_input);
	shell_exec("gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dPDFSETTINGS=/screen -sColorConversionStrategy=Gray -dProcessColorModel=/DeviceGray -dNOPAUSE -dQUIET -dBATCH -sOutputFile=../arquivos/$arquivo $arquivo_input");
	shell_exec("rm -rf ../trabalho/*.pdf");
}
$retorno = explode("/",$caminho);
$caminho = "../" . $retorno[count($retorno) - 1];
header("Location: $caminho");
die();
