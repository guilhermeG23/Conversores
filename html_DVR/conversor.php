<?php
session_start();
if (isset($_FILES['arquivo'])) {
	$arquivo = $_FILES['arquivo']['name'];
	$arquivo = preg_replace('/[^A-Za-z0-9]/', '_', $arquivo);
	$arquivo_extensao_mp4 = $arquivo . '.mp4';
	$arquivo_extensao_dav = $arquivo . '.dav';
	$arquivo_input = '/var/www/html/html_DVR/trabalho/'.$arquivo_extensao_dav;
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo_input);
	shell_exec("ffmpeg -y -i $arquivo_input -vcodec libx264 -crf 24 -filter:v 'setpts=1*PTS' /var/www/html/html_DVR/arquivos/$arquivo_extensao_mp4");
	shell_exec("rm -rf ./trabalho/*.dav");
	header("Location: index.php");
	die();
} else {
	header("Location: index.php");
	die();
}
header("Location: index.php");
die();
