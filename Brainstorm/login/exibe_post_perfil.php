<?php

	include ("conectiondb.php");
	


	$busca_nome = "SELECT id_postagem,id_usuario,conteudo_postagem FROM postagem WHERE id_usuario = '$_SESSION[id]'"; //busca do conteudo das postagens do usuario logado
	
	$busca_nome_user = "SELECT id_usuario,nome_usuario FROM usuario WHERE id_usuario = '$_SESSION[id]'";
	
	$query_nome_user = mysql_query($busca_nome_user); //query para verificação do nome do usuario logado
	
	$resul_nome_user = mysql_result($query_nome_user,0,'nome_usuario'); // seleção do resultado da query anterior
	
	
	
	
	
	
	$query_nome = mysql_query($busca_nome); // query do conteudo da postagem
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) { //execução de todas as postagens que o usuario tiver
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
                                    	
                                        include ("exibir_foto_post_timeline.php");
                                        
                                        echo"<h1 class='nome_post'>$resul_nome_user</h1>";
										
										echo "<form action='delete_post.php' method='post' class='delete_post_form'>
										<input type='hidden' name='id_postagem' value='$array[id_postagem]' />
										<input type='submit' name='delete_post' value='' />
												</form>";
										
										$select = "SELECT id_usuario_solicitado,id_usuario_solicitante,status_solicitacao FROM lista_amigo WHERE id_usuario_solicitado = '$_SESSION[id]' AND id_usuario_solicitante = '$array[id_usuario]' OR id_usuario_solicitado = '$array[id_usuario]' AND id_usuario_solicitante = '$_SESSION[id]' ";
										
										$busca_status = mysql_query($select) or die(mysql_error());
										
										//$resul = mysql_result($busca_status,2,'status_solicitacao');
										$resul = mysql_fetch_array($busca_status);
										
										if ($resul['status_solicitacao'] == 2 or $resul['status_solicitacao'] == "") {
													
													if ($array['id_usuario'] != $_SESSION['id']) {
                                        
										
										echo "<form action='solicitacao_amigo.php' method='post'>
										<input type='hidden' name='id_user_post' value='$array[id_usuario]' />
										<input type='hidden' name='id_user_session' value='$_SESSION[id]' />
                                        <input type='submit' name='send_solicit' class='network' value='Network' />
										</form>";
													}
										}
                                        
                                        echo "<p class='cont_post'><textarea rows='7' cols='50' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
	
	

?>