﻿<?php
$pasta = "imgperfil"; //pasta onde esta localizada a imagem de perfil do usuario logado
		$open = opendir($pasta); //abre o diretorio
		
		while ($arq = readdir($open)) { // le os arquivos dentro do diretorio
			
			if ($arq <> "." && $arq <> "..") {
				
				$exp = explode (".",$arq); //realiza um explode, reparando o nome do arquivo do seu tipo
				
				if ($exp[0] == $array_foto) { //verifica se o nome da imagem de perfil e igual ao id do usuario logado
				
						
				echo "<img src='$pasta/$arq' class='img_net' />";
				
				}
				
				
			}
			}
			
?>