<?php
if (strlen($_GET["arquivo"]) > 0) {
	$arquivo_del = $_GET["arquivo"];
	shell_exec("rm -rf arquivos/$arquivo_del");
} else {
	shell_exec("rm -rf arquivos/*.mp4");
}
header("Location: index.php");
die();
?>
