<?php

	include ('conectiondb.php');
	
	if (isset($_POST['entrar']) == true) {
			
			$login = $_POST['login']; //recebe do form de login as informações inseridas
			$senha = $_POST['password'];
			
			$busca = mysql_query ("SELECT id_usuario,login_usuario,senha_usuario,nome_usuario FROM usuario WHERE login_usuario = '$login' AND senha_usuario = '$senha'"); //faz uma busca no banco de dados para verificar se as informações enviadas pelo usuario existem
			$num = mysql_fetch_array ($busca); //usado para refinar a pesquisa
			$id_user = $num['id_usuario'];
			
			
			
			
			
				if ($num['login_usuario'] == $login) { //verifica se o login digitado e igual ao armazenado no banco de dados
										
										if(!$login == "") {
				
												if ($num['senha_usuario'] == $senha) { //verifica se a senha digitada e igual ao banco de dados
											
															if (!$senha == "") {
									
										$validacao = 0;
					
										session_start();
										
										$_SESSION['usuario'] = $login;
										$_SESSION['id'] = $id_user;
										$_SESSION['nome_user'] = $num['nome_usuario'];
																			
										header ("location:login/timeline.php");
															}
															
															else { 
					
					echo "<script type='text/javascript' language='javascript'>alert ('Login ou Senha Incorretos');window.location.href='home.php';</script>";
					
					
					}
																	}
																	
																	else { 
					
					echo "<script type='text/javascript' language='javascript'>alert ('Login ou Senha Incorretos');window.location.href='home.php';</script>";
					
					
					}
																			}
																			
																			else { 
					
					echo "<script type='text/javascript' language='javascript'>alert ('Login ou Senha Incorretos');window.location.href='home.php';</script>";
					
					
					}
																					}
																					
																					
																				
					
				else { 
					
					echo "<script type='text/javascript' language='javascript'>alert ('Login ou Senha Incorretos');window.location.href='home.php';</script>";
					
					
					}
	}
		
			

?>