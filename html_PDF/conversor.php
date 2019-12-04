<?php
session_start();
if (isset($_FILES['arquivo'])) {
	$arquivo = $_FILES['arquivo']['name'];
	$arquivo = preg_replace('/[^A-Za-z0-9]/', '_', $arquivo);
	$arquivo = $arquivo . '.pdf';
	$arquivo_input = '/var/www/html/html_PDF/trabalho/'.$arquivo;
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo_input);
	shell_exec("gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dPDFSETTINGS=/screen -sColorConversionStrategy=Gray -dProcessColorModel=/DeviceGray -dNOPAUSE -dQUIET -dBATCH -sOutputFile=/var/www/html/html_PDF/arquivos/$arquivo $arquivo_input");
	#shell_exec("rm -rf ./trabalho/*.pdf");
	header("Location: index.php");
	die();
} else {
	$_SESSION['arquivo'] = "Falha no processamento!";
	header("Location: index.php");
	die();
}
$_SESSION['arquivo'] = "Falha no processamento!";
header("Location: index.php");
die();
