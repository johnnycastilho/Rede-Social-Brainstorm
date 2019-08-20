<?php

	include ("conectiondb.php");


	$usuario_search = $_POST['searchbox'];
	
	$busca_usuario = "SELECT id_usuario,nome_usuario,cod_grupo FROM usuario WHERE nome_usuario = '$usuario_search'";
	
	$query = mysql_query($busca_usuario);
	
	
	while ($array = mysql_fetch_array($query)) {
		
			$array_foto = $array['id_usuario'];
		
			$busca_grupo = "SELECT cod_grupo,nome_grupo FROM grupo WHERE cod_grupo = '$array[cod_grupo]'";
			$query_busca_grupo = mysql_query($busca_grupo);
			$result_busca_grupo = mysql_result($query_busca_grupo,0,'nome_grupo');
					
				
		
				
				echo "
									<table class='table'>
                                    <tr>
                                    <td>"; include ('exibir_foto_network.php'); echo"<p class='nome_net'>$array[nome_usuario]</p> <p class='grupo_net'>$result_busca_grupo</p>	
									</td>
									";
									
									$select = "SELECT id_usuario_solicitado,id_usuario_solicitante,status_solicitacao FROM lista_amigo WHERE id_usuario_solicitado = '$_SESSION[id]' AND id_usuario_solicitante = '$array[id_usuario]' OR id_usuario_solicitado = '$array[id_usuario]' AND id_usuario_solicitante = '$_SESSION[id]' ";
										
										$busca_status = mysql_query($select) or die(mysql_error());
										
										//$resul = mysql_result($busca_status,2,'status_solicitacao');
										$resul = mysql_fetch_array($busca_status);
										
										if ($resul['status_solicitacao'] == 2 or $resul['status_solicitacao'] == "") {
													
													if ($array['id_usuario'] != $_SESSION['id']) {
														
														
									echo "<td><form action='solicitacao_amigo.php' method='post'>
										<input type='hidden' name='id_user_post' value='$array[id_usuario]' />
																		<input type='hidden' name='id_user_session' value='$_SESSION[id]' />
                                        <input type='submit' name='send_solicit' class='network2' value='Network' />
										</form></td>";
										
													}
													else {}
										}
                                    echo "</tr>                                    
                                    </table>	";
		
		
		
								}


?>