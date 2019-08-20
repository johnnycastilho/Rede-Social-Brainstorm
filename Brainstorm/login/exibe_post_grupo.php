<?php

	include ("conectiondb.php");
	

	$select_people_grupo = "SELECT id_usuario,cod_grupo FROM usuario WHERE cod_grupo = '$result_codgrupo_user'";
	
	$query_search_people_grupo = mysql_query ($select_people_grupo); //busca todos os usuarios que pertencem ao grupo que esta sendo exibido na pagina da pessoa logado
	
	while ($array_people_group = mysql_fetch_array($query_search_people_grupo)) {
		
			
			
			$busca_conteudo_postagem = "SELECT conteudo_postagem,id_usuario,data_postagem FROM postagem WHERE id_usuario = '$array_people_group[id_usuario]' ORDER BY data_postagem";
			
				$query_busca_conteudo_postagem = mysql_query($busca_conteudo_postagem);
				
					$busca_nome_dono_postagem = "SELECT id_usuario,nome_usuario FROM usuario WHERE id_usuario = '$array_people_group[id_usuario]'";
					
					$query_nome_dono_postagem = mysql_query($busca_nome_dono_postagem);
					
						$result_cont_postagem = mysql_fetch_array($query_busca_conteudo_postagem);
						
						$result_nome_dono_postagem = mysql_fetch_array($query_nome_dono_postagem);
						
					
					if ($result_cont_postagem["conteudo_postagem"] != "") {
						
					
					echo "	<!--Postagem -->
                               
                               <div id='postagem'>
                               
                               		<div id='post'>
                               
                               		<div id='conteudo_post'>";
                                    	
                                        include ("exibir_foto_post_grupo.php");
                                        
                                        echo "<h1 class='nome_post'>$result_nome_dono_postagem[nome_usuario]</h1>
                                        
                                        
                                        <p class='cont_post'><textarea cols='60' disabled>$result_cont_postagem[conteudo_postagem]</textarea></p>
                                        
                                        <img class='sep_post' src='images/sep_dep.png' />
										
                                    	
                                    </div>
                                    
                                    </div>
                               
                               
                               </div>
                               
                               <!--Postagem -->";
							   
					}
				
				
					
						
						
		
		
		
		}
		
			

?>