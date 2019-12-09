<?php
function tamanho($arquivo) {
	$arquivo_tamanho = number_format((filesize($arquivo) / 1024), 2, '.', '');
	if (strlen($arquivo_tamanho) <= 6) {
		return $arquivo_tamanho . "Kb";
	} else {
		return number_format(($arquivo_tamanho / 1024), 2, '.', '') . "Mb";
	}
}
function arquivos($formato) {
	chdir('arquivos');
	$arquivos = glob("{*.$formato}", GLOB_BRACE);
	foreach($arquivos as $arquivo) echo "
		<tr>
			<th>{$arquivo}</th>
			<th>" . tamanho($arquivo) . "</th>
			<th>
				<a href='arquivos/{$arquivo}' download><img class='imagem' src='../imagens/download.png'/></a>
				<a href='limpar.php?arquivo={$arquivo}'><img class='imagem' src='../imagens/deletar.png'/></a>
			</th>
		</tr>";
}
?>

