<?php
#Tamanho do arquivo
function tamanho($arquivo) {
	$arquivo_tamanho = number_format((filesize($arquivo) / 1024), 2, '.', '');
	if (strlen($arquivo_tamanho) <= 6) {
		return $arquivo_tamanho . "Kb";
	} else {
		return number_format(($arquivo_tamanho / 1024), 2, '.', '') . "Mb";
	}
}

#Renomear caminho para trabalhar no delete
function renomear($arquivo) {
	return preg_replace('/[^A-Za-z0-9]/', '_', $arquivo);
}

function voltar_caminho($arquivo) {
	return preg_replace('/[^A-Za-z0-9]/', '/', $arquivo);
}

#Cria a tabela e suas funcoes
function arquivos($formato, $caminho) {
	chdir('../arquivos');
	$arquivos = glob("{*.$formato}", GLOB_BRACE);
	foreach($arquivos as $arquivo) echo "
		<tr>
			<th>{$arquivo}</th>
			<th>" . tamanho($arquivo) . "</th>
			<th>
				<a href='../arquivos/{$arquivo}' download><img class='imagem' src='../imagens/download.png'/></a>
				<a href='../funcoes/limpar.php?arquivo={$arquivo}&caminho=$caminho'><img class='imagem' src='../imagens/deletar.png'/></a>
			</th>
		</tr>";
}
?>

