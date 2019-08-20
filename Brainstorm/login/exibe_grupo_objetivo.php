<?php

	include ("conectiondb.php");
	
	$busca = "SELECT id_usuario,cod_grupo FROM usuario WHERE id_usuario = '$_SESSION[id]'";
	
	$query_busca_grupo_user = mysql_query($busca);
	
	$result_busca_grupo_user = mysql_result($query_busca_grupo_user,0,'cod_grupo');
	
	$busca_info_grupo = "SELECT cod_grupo,tema_grupo,curso_grupo,id_usuario_lider,objetivo_grupo FROM grupo WHERE cod_grupo = '$result_busca_grupo_user'";
	
	$query_busca_info_grupo = mysql_query($busca_info_grupo);
	
	
	
	while ($array_info_grupo = mysql_fetch_array($query_busca_info_grupo)) {
		
		$busca_lider_grupo = "SELECT id_usuario,nome_usuario FROM usuario WHERE id_usuario = '$array_info_grupo[id_usuario_lider]'";
		
		$query_lider_grupo = mysql_query($busca_lider_grupo) or die (mysql_error());
		
		$result_lider_grupo = mysql_result($query_lider_grupo,0,'nome_usuario');
		
			echo "<p class='conteudo_objetivo'><textarea cols='81' rows='13' disabled>$array_info_grupo[objetivo_grupo]</textarea></p>
				
                                        
                                        <img src='images/lateral_perfil_sobre.png' class='img_grupo' />
                                        
                                        	<ul class='lateral_grupo'>
                                            	<li class='title'>Curso</li>
                                                <li>$array_info_grupo[curso_grupo]</li>
                                                <li class='title'>Nome do Projeto</li>
                                                <li>$array_info_grupo[tema_grupo]</li>
                                                <li class='title'>Lider do Grupo</li>
                                                <li>$result_lider_grupo</li>
                                            </ul>";
		
		
		
		
		
		}

?>