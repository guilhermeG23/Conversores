<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Conversores</title>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link rel="shortcut icon" href="imagens/menu.png" type="image/x-icon">
	<link rel="stylesheet" href="css/resetCSS.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/cssPessoal.css">
</head>
<body>
	<div class="container abaixar-container jumbotron">
		<h3>Funções gerais e ferramentas</h3>
	<?php
	#Escaneia o diretorio atual, atras de outros diretorios
	$diretorios = scandir(getcwd());
	#Le o array criado 
	foreach($diretorios as $diretorio) {
		#Confirma se e um diretorio e se esta com letra maiuscula, se confirmar isso, printa o diretorio
		if(is_dir($diretorio) and ctype_upper($diretorio)) {
			echo "<hr class='my-4'>";
			echo "<h5><a href=$diretorio>$diretorio</a></h5>";
		}
	}
	?>
	</div>
</body>
</html>
