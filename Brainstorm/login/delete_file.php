<?php

	include ("conectiondb.php");
	
		$value = ""; //variavel vazia para recebimento dos valores do checkbox
		
	
		foreach ($_POST['dir_files'] as $value) {	//passa para a variavel value todos os valores dos checkbox selecionados pelo usuario
			
				$id_user = $_POST['id_user']; //recebe o id do usuario em sessao
				
				$array = explode (",",$value); //separa cada arquivo selecionado em arrays
				
				$pasta = "/files";
				
				if (is_dir($pasta)) {
				
				$dh = opendir($pasta);
					
					$read = readdir($dh);
				
					unlink($read,$array['0']);
					
				}
					
					$select = "SELECT id_postagem,id_usuario,anexo_postagem FROM postagem WHERE anexo_postagem = 'files/$array[0]'"; //verifica o id da postagem a ser deletada
					
					$query = mysql_query($select);
					
					$result = mysql_result($query,0,'id_postagem');
					
				
				
					$update = "UPDATE postagem SET anexo_postagem = NULL WHERE id_postagem = '$result'"; //atualiza o endereco do anexo para null 
					
					
					mysql_query ($update) or die (mysql_error());
					
					header ("location:arquivos.php");
					
					
						
																	
															
												}
									header ("location:arquivos.php");
					
				
				

?>