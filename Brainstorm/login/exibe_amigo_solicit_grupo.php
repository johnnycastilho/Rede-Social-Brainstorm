<?php

	include ("conectiondb.php");

	$select = "SELECT id_usuario_solicitado,id_usuario_solicitante,status_solicitacao FROM lista_amigo WHERE id_usuario_solicitado = '$_SESSION[id]' AND status_solicitacao = 1 OR id_usuario_solicitante = '$_SESSION[id]' AND status_solicitacao = 1"; //busca dos amigos do usuario logado
	
	$query = mysql_query($select); //executa o select acima
	
		while ($array = mysql_fetch_array($query)) { //atribui a array os resultados da query acima
			
					if ($array['id_usuario_solicitado'] == $_SESSION['id']) { //verifica se o usuario logado foi solicitado pelo amigo
						
							$verifica_grupo = "SELECT id_usuario,cod_grupo,nome_usuario FROM usuario WHERE id_usuario = '$array[id_usuario_solicitante]'";
							
							$query_verifica_grupo = mysql_query($verifica_grupo);
							
							while ($usuario_verifica_grupo = mysql_fetch_array($query_verifica_grupo)) {
								
								if ($usuario_verifica_grupo['cod_grupo'] == NULL || $usuario_verifica_grupo['cod_grupo'] != $result_codgrupo_user) {
							
								$array_foto = $usuario_verifica_grupo['id_usuario'];
							
							echo "
									<table class='table'>
                                    <tr>
                                    <td>"; include ('exibir_foto_network.php'); echo"<p class='nome_net'>$usuario_verifica_grupo[nome_usuario]</p>
									<form action='solicitacao_grupo.php' method='post'>
									<input type='hidden' name='id_user_convite' value='$usuario_verifica_grupo[id_usuario]' />
									<input type='hidden' name='cod_grupo' value='$result_codgrupo_user' />
									<input type='submit' name='envia_solicit_grupo' value='Convidar' class='img2_net' />
									</td>
									</form>
                                    </tr>                                    
                                    </table>						
							
							";
														}
												}
											}
					
					
		
					
					elseif ($array['id_usuario_solicitante'] == $_SESSION['id']) { //verifica se o usuario logado foi solicitado pelo amigo
						
							$verifica_grupo = "SELECT id_usuario,cod_grupo,nome_usuario FROM usuario WHERE id_usuario = '$array[id_usuario_solicitado]'";
							
							$query_verifica_grupo = mysql_query($verifica_grupo);
							
							while ($usuario_verifica_grupo = mysql_fetch_array($query_verifica_grupo)) {
								
								if ($usuario_verifica_grupo['cod_grupo'] == NULL || $usuario_verifica_grupo['cod_grupo'] != $result_codgrupo_user) {
							
								$array_foto = $usuario_verifica_grupo['id_usuario'];
							
							echo "
									<table class='table'>
                                    <tr>
                                    <td>"; include ('exibir_foto_network.php'); echo"<p class='nome_net'>$usuario_verifica_grupo[nome_usuario]</p>								
									<form action='solicitacao_grupo.php' method='post'>
									<input type='hidden' name='id_user_convite' value='$usuario_verifica_grupo[id_usuario]' />
									<input type='hidden' name='cod_grupo' value='$result_codgrupo_user' />
									<input type='submit' name='envia_solicit_grupo' value='Convidar' class='img2_net' />
									</td>
									</form></td>
									
                                    </tr>                                    
                                    </table>						
							
							";
													}
											}
					}
		}
	
		

?>