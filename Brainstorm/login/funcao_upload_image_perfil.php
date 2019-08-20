 <?php

			if (isset($_POST['send_img'])) {
							
							$pasta = 'imgperfil'; //pasta onde sera armazenada as fotos
							$tipoimagem = array('image/jpeg','image/jpg','image/png','pjpeg','image/x-png'); //tipos de fotos que serao permitidos o upload
							
							$imagem = $_FILES['perfil_img']; //informações da imagem upada 
							$destino = $imagem['tmp_name']; //local onde esta armazenada a imagem
							$nome = $imagem['name']; // o nome da imagem 
							$tipo = $imagem['type']; //qual o tipo da imagem
							
							
							
								
			
			
// ---------------------------------------------------------------------------------------------------------------------------------			
			
			
			function upload($destino , $nome , $larguraimg , $pasta) {
				
					$img = imagecreatefromjpeg($destino); //cria uma imagem jpeg da variavel destino(onde esta armazenada a imagem)
					
					$x = imagesx($img);
					$y = imagesy($img);
					
					//variaveis x e y são as coordenadas da imagem
					
					$alturaimg = ($larguraimg * $y) / $x; //calcular a altura da imagem de acordo com a largura (proporcional)
					
					$novaImagem = imagecreatetruecolor($larguraimg, $alturaimg); 
					imagecopyresampled($novaImagem,$img,0, 0, 0, 0,$larguraimg, $alturaimg,$x , $y);
					// criar e duplica  uma nova imagem
					
					$novo_nome_img = "$nome";
					
					
					
					
					imagejpeg($novaImagem,"$pasta/$novo_nome_img"); //salvar uma nova imagem no diretorio indicado na variavel
					
					imagedestroy($img);
					imagedestroy($novaImagem);
					
					//destroi as variaveis utilizadas acima para upload de novas no diretorio
					
// -------------------------------------------------------------------------------------------------------------------------------------				
				
				
				}
				// decisão utilizada para verificar se os campos nome da imagem não esta vazio e verificar se o formato da
				//imagem é permitido
				if (!empty($nome) && in_array($tipo , $tipoimagem)) {
								
								upload ($destino,$nome,750,$pasta); //upload da imagem de perfil
								
//------------------------------------------------------------------------------------------------------------------------------------------
								
								//renomear a imagem para a id do usuario que pertence
								
								$pasta = "imgperfil"; //pasta de onde esta armazenada a imagem
								$open = opendir($pasta); //abre a pasta
		
								while ($arq = readdir($open)) { //realiza a leitura de todos os arquivos que estao neste diretorio
								
								if ($arq <> "." && $arq <> "..") {
									
										if ($arq == $nome) { //verifica se o arquivo lido na pasta e o upado anteriormente
									
									
										
										
										$exp_tipo = explode ('/',$tipo); //realiza um explode do tipo do arquivo separando image/jpeg
										
										$nome_antigo = "$pasta/$nome"; //antigo nome do arquivo
										$novo_nome = "$pasta/$_SESSION[id].$exp_tipo[1]"; //novo nome do usuario com sua id_usuario do banco de dados
									
										rename($nome_antigo,$novo_nome); //renomeia a imagem de perfil logo apos o upload
										
										
										echo "<script type='text/javascript' language='javascript'>alert ('Foto de Perfil Alterada com Sucesso');window.location.href='perfil_sobre.php';</script>";
										}
										
										}
								
										}	
										}
								
										else 		{
									
									
													}
							
							
							
					}
							
							




?>