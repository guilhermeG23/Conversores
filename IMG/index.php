<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Converter Imagem</title>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link rel="shortcut icon" href="../imagens/galeria.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/resetCSS.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/cssPessoal.css">
	<link rel="stylesheet" href="../js/jquery.min.js">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<link rel="stylesheet" href="../js/popper.min.js">
</head>
<?php
include("../funcoes/funcoes.php");
?>			
<body>
	<div class="container abaixar-container jumbotron">
		<h3><a href="../">Retornar para o menu de selecao</a></h3>
		<hr class="my-4">
		<p class="lead">Redutor de imagens, instruções:</p>
		<li>Entre com um arquivo imagem com no maximo 30MB;</li>
		<li>O sistema ira fazer o upload e compactacao do arquivo;</li>
		<li>Tal arquivo ficara disponivel para download na tabela abaixo;</li>
		<hr class="my-4">
		<p class="lead">Faz o upload e reduz o tamanho da imagem, atencao, suporte a imagens de até maximo 30Mb, operacao pode demorar um pouco, favor nao recarregar a pagina.</p>
		<form method="POST" action="conversor.php" enctype="multipart/form-data">
			<input type="hidden" id="caminho" value="<?=getcwd();?>" name="caminho" required/>
			<input type="file" id="arquivo" value="" name="arquivo" accept="application/imagem" required/>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
		<hr class="my-4">
		<p class="lead">Limpar arquivos, apaga todos os arquivos listados abaixo na tabela.</p>
		<form method="GET" action="../funcoes/limpar.php">
			<input type="hidden" id="caminho" value="<?=renomear(getcwd());?>" name="caminho" required/>
			<input type="hidden" id="formato" value="jpg" name="formato" required/>
			<button type="submit" class="btn btn-danger">Limpar arquivos listados</button>
		</form>
		<hr class="my-4">
		<p class="lead">Tabela de arquivos:</p>
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
			$retorno = explode("/",getcwd());
			$caminho = "../" . $retorno[count($retorno) - 1];
			arquivos("jpg", $caminho);
			?>
			</tbody>
		</table>
	</div>
</body>
