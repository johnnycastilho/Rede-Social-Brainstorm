<?php

	include ("conectiondb.php");
$pasta = "imgperfil"; //pasta onde esta localizada a imagem de perfil do usuario logado
		$open = opendir($pasta); //abre o diretorio
		
		while ($arq = readdir($open)) { // le os arquivos dentro do diretorio
			
			if ($arq <> "." && $arq <> "..") {
				
				$exp = explode (".",$arq); //realiza um explode, reparando o nome do arquivo do seu tipo
				
				$busca_users_grupo = "SELECT id_usuario,cod_grupo FROM usuario WHERE cod_grupo = '$result_codgrupo_user'";
				
				$query_busca_users_grupo = mysql_query($busca_users_grupo);
				
				while ($array_busca_users_grupo = mysql_fetch_array($query_busca_users_grupo)) {
				
				if ($exp[0] == $array_busca_users_grupo['id_usuario']) { //verifica se o nome da imagem de perfil e igual ao id do usuario logado
				
						
				echo "<img src='$pasta/$arq' class='group_people' />";
				
				}
				
				}
				
			}
			}
			
?>