<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Converter DAV</title>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link rel="shortcut icon" href="camera.png" type="image/x-icon">
	<link rel="stylesheet" href="resetCSS.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="cssPessoal.css">
	<link rel="stylesheet" href="jquery.min.js">
	<link rel="stylesheet" href="bootstrap.min.js">
	<link rel="stylesheet" href="popper.min.js">
</head>
<body>
	<div class="container abaixar-container jumbotron">
		<h3><a href="../">Retornar para o menu de selecao</a></h3>
		<hr class="my-4">
		<p class="lead">Conversor DAV, instrucoes:</p>
		<li>Entre com um arquivo DAV com no maximo 1Gb;</li>
		<li>O sistema ira fazer o upload e conversao do arquivo;</li>
		<li>Tal arquivo ficara disponivel para download na tabela abaixo;</li>
		<hr class="my-4">
		<p class="lead">Faz o upload e converte, atencao, suporte a DAV's de no maximo 1Gb, operacao pode demorar um pouco, favor nao recarregar a pagina.</p>
		<form method="POST" action="conversor.php" enctype="multipart/form-data">
			<input type="file" id="arquivo" value="" name="arquivo" accept="application/dav" required/>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
		<hr class="my-4">
		<p class="lead">Limpar arquivos, apaga todos os arquivos listados abaixo na tabela.</p>
		<form method="POST" action="limpar.php" enctype="multipart/form-data">
			<button type="submit" class="btn btn-danger">Limpar arquivos listados</button>
		</form>
		<hr class="my-4">
		<p class="lead">Arquivos convertidos:</p>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Arquivo</th>
					<th>Tamanho</th>
					<th>Funcao</th>
				</tr>
			</thead>
			<tbody>
<?php

function tamanho($arquivo) {
	$arquivo_tamanho = number_format((filesize($arquivo) / 1024), 2, '.', '');
	if (strlen($arquivo_tamanho) <= 6) {
		return $arquivo_tamanho . "Kb";
	} else {
		return number_format(($arquivo_tamanho / 1024), 2, '.', '') . "Mb";
	}
}

chdir('arquivos');
$arquivos = glob("{*.mp4}", GLOB_BRACE);
foreach($arquivos as $mp4) echo "
	<tr>
		<th>{$mp4}</th>
		<th>" . tamanho($mp4) . "</th>
		<th>
			<a href='arquivos/{$mp4}' download><img class='imagem' src='download.png'/></a>
			<a href='limpar.php?arquivo={$mp4}'><img class='imagem' src='deletar.png'/></a>
		</th>
	</tr>";
?>
			</tbody>
		</table>
	</div>
</body>
