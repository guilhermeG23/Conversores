<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Converter DAV</title>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link rel="shortcut icon" href="../imagens/camera.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/resetCSS.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/cssPessoal.css">
	<link rel="stylesheet" href="../js/jquery.min.js">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<link rel="stylesheet" href="../js/popper.min.js">
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
			<input type="hidden" id="caminho" value="<?=getcwd();?>" name="caminho" required/>
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
			include("../funcoes/funcoes.php");
			arquivos("mp4");
			?>
			</tbody>
		</table>
	</div>
</body>
