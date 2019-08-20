<?php

	include ("conectiondb.php");

	$select = "SELECT id_usuario_solicitado,id_usuario_solicitante,status_solicitacao FROM lista_amigo WHERE id_usuario_solicitado = '$_SESSION[id]' AND status_solicitacao = 1 OR id_usuario_solicitante = '$_SESSION[id]' AND status_solicitacao = 1";
	
	$query = mysql_query($select);
	
		while ($array = mysql_fetch_array($query)) {
			
					if ($array['id_usuario_solicitado'] == $_SESSION['id']) {
						
							$busca_nome = "SELECT id_usuario,nome_usuario,cod_grupo FROM usuario WHERE id_usuario = '$array[id_usuario_solicitante]'";
							
							$query2 = mysql_query($busca_nome);
							
							$result = mysql_result($query2,0,'nome_usuario');
							
							$array_foto = mysql_result($query2,0,'id_usuario');
							
							$result6 = mysql_result($query2,0,'cod_grupo');
							
							$busca_grupo = mysql_query("SELECT cod_grupo,nome_grupo FROM grupo WHERE cod_grupo = '$result6'");
							
							$result_nome_grupo = mysql_result($busca_grupo,0,'nome_grupo');
							
								//para a exibição da foto do amigo foi usado o mesmo script de exibição de foto da timeline
							
							echo "
									<table class='table'>
                                    <tr>
                                    <td>"; include ('exibir_foto_network.php'); echo"<p class='nome_net'>$result</p> <p class='grupo_net'></p>	
									<form action='perfil_amigo.php' method='get'>
									
									<input type='hidden' name='id_usuario_amigo' value='$array[id_usuario_solicitante]' />
									
									
									
									<input type='submit' class='img2_net' name='view_amigo' value='' />
									</form></td>
                                    </tr>                                    
                                    </table>						
							
							";
					}
					
					if ($array['id_usuario_solicitante'] == $_SESSION['id']) {
					
					$busca_nome2 = "SELECT id_usuario,nome_usuario,cod_grupo FROM usuario WHERE id_usuario = '$array[id_usuario_solicitado]'";
					
							
							$query3 = mysql_query($busca_nome2);
							
							$result2 = mysql_result($query3,0,'nome_usuario');
							
							$result6 = mysql_result($query3,0,'cod_grupo');
							
							$array_foto = mysql_result($query3,0,'id_usuario');
							
							$busca_grupo2 = mysql_query("SELECT cod_grupo,nome_grupo FROM grupo WHERE cod_grupo = '$result6'");
							
							$result_nome_grupo2 = mysql_result($busca_grupo2,0,'nome_grupo');
							
							
							
							echo "
									<table class='table'>
                                    <tr>
                                    <td>"; include ('exibir_foto_network.php'); echo"<p class='nome_net'>$result2</p> <p class='grupo_net'></p>						
									<form action='perfil_amigo.php' method='get'>
									
									
									<input type='hidden' name='id_usuario_amigo' value='$array[id_usuario_solicitado]' />
									
									
									
									<input type='submit' class='img2_net' name='view_amigo' value='' /></form></td>
                                    </tr>                                    
                                    </table>						
							
							";
							
						
					}
						
							
			
			
			
			
			}
	
		

?>