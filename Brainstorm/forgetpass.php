<?php

include ('conectiondb.php');

if (isset($_POST['send']) == true) {
	
	$email = $_POST['email_forget'];
	
	
		$busca = mysql_query("SELECT email_usuario FROM usuario");
		$array = mysql_fetch_array ($busca);
		
		if ($email !== $array['email_usuario']) {
			
					echo "<script type='text/javascript' language='javascript'>alert ('E-mail não Cadastrado'); window.location.href='home.php';</script>";			
			
			}
			
			else {
					$busca2 = mysql_query ("SELECT AES_DECRYPT(senha_usuario, 'BR@INSTORM@FIVEJOBS') FROM usuario WHERE email_usuario = '$email'");
					$search = mysql_fetch_array ($busca2);
					
					
				
					mail($email , "Recuperação de Senha - Brainstorm" , 'Senha : $search["senha_usuario"]');
					
					echo "<script type='text/javascript' language='javascript'>alert ('Senha Enviada com sucesso'); window.location.href='home.php';</script>";				}
	
	
	
	}


	
	
	
	
	

?>