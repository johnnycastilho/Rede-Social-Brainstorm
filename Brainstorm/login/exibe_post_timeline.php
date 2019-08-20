<?php

	include ("conectiondb.php");
	
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	
	
	switch (isset($_GET['filter'])) {
		
			case $_GET['filter'] == 'Informática':
			
			$busca_nome = "SELECT usuario.id_usuario,usuario.nome_usuario,postagem.id_usuario,usuario.curso_usuario, postagem.conteudo_postagem,postagem.data_postagem FROM usuario,postagem WHERE usuario.id_usuario = postagem.id_usuario AND curso_usuario = 'Informática' ORDER BY postagem.data_postagem DESC";
	
	$query_nome = mysql_query($busca_nome);
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) {
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
									
									include ("exibir_foto_post_timeline.php");
									
									
                                    	
                                        
                                        
                                        echo "												
										<h1 class='nome_post'>$array[nome_usuario]</h1>";
										
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
										else {}
										
										echo "
                                        
                                        <p class='cont_post'><textarea rows='7' cols='70' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
		
		break; //fim ----informática
		
		case $_GET['filter'] == 'Nutrição':
		
		$busca_nome = "SELECT usuario.id_usuario,usuario.nome_usuario, usuario.curso_usuario,postagem.id_usuario,postagem.conteudo_postagem,postagem.data_postagem FROM usuario,postagem WHERE usuario.id_usuario = postagem.id_usuario AND usuario.curso_usuario = 'Nutrição' ORDER BY postagem.data_postagem DESC";
	
	$query_nome = mysql_query($busca_nome);
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) {
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
									
									include ("exibir_foto_post_timeline.php");
									
									
                                    	
                                        
                                        
                                        echo "												
										<h1 class='nome_post'>$array[nome_usuario]</h1>";
										
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
										else {}
										
										echo "
                                        
                                        <p class='cont_post'><textarea rows='7' cols='70' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
		
		break; //fim ----Nutrição
		
		case $_GET['filter'] == 'Administração': 
		
		$busca_nome = "SELECT usuario.id_usuario,usuario.nome_usuario, usuario.curso_usuario, postagem.id_usuario,postagem.conteudo_postagem,postagem.data_postagem FROM usuario,postagem WHERE usuario.id_usuario = postagem.id_usuario AND usuario.curso_usuario = 'Administração' ORDER BY postagem.data_postagem DESC";
	
	$query_nome = mysql_query($busca_nome);
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) {
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
									
									include ("exibir_foto_post_timeline.php");
									
									
                                    	
                                        
                                        
                                        echo "												
										<h1 class='nome_post'>$array[nome_usuario]</h1>";
										
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
										else {}
										
										echo "
                                        
                                        <p class='cont_post'><textarea rows='7' cols='70' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
		
		break; //fim ----- administração
		
		case $_GET['filter'] == 'Secretariado':
		
		$busca_nome = "SELECT usuario.id_usuario,usuario.nome_usuario, usuario.curso_usuario, postagem.id_usuario,postagem.conteudo_postagem,postagem.data_postagem FROM usuario,postagem WHERE usuario.id_usuario = postagem.id_usuario AND usuario.curso_usuario = 'Secretariado' ORDER BY postagem.data_postagem DESC";
	
	$query_nome = mysql_query($busca_nome);
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) {
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
									
									include ("exibir_foto_post_timeline.php");
									
									
                                    	
                                        
                                        
                                        echo "												
										<h1 class='nome_post'>$array[nome_usuario]</h1>";
										
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
										else {}
										
										echo "
                                        
                                        <p class='cont_post'><textarea rows='7' cols='70' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
		
		break; //fim -- secretariado
		
		case $_GET['filter'] == 'Informática para Internet':
		
		$busca_nome = "SELECT usuario.id_usuario,usuario.nome_usuario, usuario.curso_usuario, postagem.id_usuario,postagem.conteudo_postagem,postagem.data_postagem FROM usuario,postagem WHERE usuario.id_usuario = postagem.id_usuario AND usuario.curso_usuario = 'Informática para Internet' ORDER BY postagem.data_postagem DESC";
	
	$query_nome = mysql_query($busca_nome);
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) {
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
									
									include ("exibir_foto_post_timeline.php");
									
									
                                    	
                                        
                                        
                                        echo "												
										<h1 class='nome_post'>$array[nome_usuario]</h1>";
										
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
										else {}
										
										echo "
                                        
                                        <p class='cont_post'><textarea rows='7' cols='70' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
		
		break; //fim --- informática para internet
		
		
		} //fim da estrututa de switch
		
		if (!isset($_GET['filter'])) {


	$busca_nome = "SELECT usuario.id_usuario,usuario.nome_usuario,postagem.id_usuario,postagem.conteudo_postagem,postagem.data_postagem FROM usuario,postagem WHERE usuario.id_usuario = postagem.id_usuario ORDER BY postagem.data_postagem DESC";
	
	$query_nome = mysql_query($busca_nome);
	
	
	
	
	while ($array = mysql_fetch_array($query_nome)) {
			
		
		echo "<div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
									
									include ("exibir_foto_post_timeline.php");
									
									
                                    	
                                        
                                        
                                        echo "												
										<h1 class='nome_post'>$array[nome_usuario]</h1>";
										
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
										else {}
										
										echo "
                                        
                                        <p class='cont_post'><textarea rows='7' cols='70' disabled>$array[conteudo_postagem]</textarea></p>
										
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>";
		
				
		
		}
		
		
		}
			
			
			
	
	

?>