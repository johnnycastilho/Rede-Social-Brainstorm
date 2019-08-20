<?php

	include ("conectiondb.php");
	
	
	$busca = "SELECT id_usuario,cod_grupo FROM usuario WHERE id_usuario = '$_SESSION[id]'";
	
	$query_busca_grupo = mysql_query($busca);
	
	$result_busca_grupo = mysql_result($query_busca_grupo,0,'cod_grupo');
	
	if ($result_busca_grupo == NULL) {
		
			echo "
			
							<ul>
                            	<a href='timeline.php'><li>Timeline</li></a>
                                <a href='perfil.php'><li>Perfil</li></a>
                                <a href='network.php'><li>Network</li></a>
                                <a href='arquivos.php'><li>Arquivos</li></a>
                                <a href='postagem.php'><li>Postagem</li></a>
                                <a href='grupo_create.php'><li>Grupo</li></a>
                                <a href='pesquisa_campo.php'><li>Pesquisas</li></a>
                                <a href='createtcc.php'><li>Criando o TCC</li></a>
                            </ul>";	
		
		}
		
	else {
		
			echo "			<ul>
                            	<a href='timeline.php'><li>Timeline</li></a>
                                <a href='perfil.php'><li>Perfil</li></a>
                                <a href='network.php'><li>Network</li></a>
                                <a href='arquivos.php'><li>Arquivos</li></a>
                                <a href='postagem.php'><li>Postagem</li></a>
                                <a href='grupo.php'><li>Grupo</li></a>
                                <a href='pesquisa_campo.php'><li>Pesquisas</li></a>
                                <a href='createtcc.php'><li>Criando o TCC</li></a>
                            </ul>";
		
		}
	
	
?>