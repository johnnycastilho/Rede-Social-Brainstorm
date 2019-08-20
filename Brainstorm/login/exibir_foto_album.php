<?php

	$diretorio = "groupimages/".$result_codgrupo_user; //nome do diretorio onde esta armazenada as imagens
	$open = opendir($diretorio); //função utilizada para abrir o diretorio das imagens
	$i = 0; // contador do laço de repetição
	
	$nome = readdir($open); //utilizada para ler os arquivos dentro do diretorio
	
	while ($nome != false) { //entra no laço de repetição caso a função utilizada para ler os diretorios seja falsa
		
		if (!is_dir($nome) && ($nome != 'thumbs.db') ) { // estrutura utilizada para verificar se o conteudo da variavel é realmente um diretorio e se nao é um dump file
		
				$arquivos[$i] = $nome; // array para armazenar o nome dos arquivos 
				
				$i++;
				}
				
				$nome = readdir($open); // utilizada para ler o proximo arquivo do diretorio para o teste do while
				
				}
				
				sort($arquivos); //ordenar os arquivos do menor para o maior
				
				
				$u = 0; //novo contador para a exibição das imagens
				while ($arquivos[$u]) { //estrutura de repetição para exibição das imagens 
					
					echo "<img src='$diretorio/$arquivos[$u]' alt='' class='foto' onClick='document.img_amp.src=this.src' />";
					
					$u++;
					}
				
				
	
	
	
	

?>