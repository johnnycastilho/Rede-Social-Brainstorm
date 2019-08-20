 <?php

			if (isset($_POST['send_image'])) {
				
							$cod_grupo = $_POST['cod_grupo'];							
							$pasta = 'groupimages/'.$cod_grupo; //pasta onde sera armazenada as fotos
							$tipoimagem = array('image/jpeg','image/jpg','image/png','pjpeg'); //tipos de fotos que serao permitidos o upload
							
							$imagem = $_FILES['img_upload']; //informações da imagem upada 
							$destino = $imagem['tmp_name']; //local onde esta armazenada a imagem
							$nome = $imagem['name']; // o nome da imagem 
							$tipo = $imagem['type']; //qual o tipo da imagem
							$data = date("y-m-d");	
							
							$novo_nome_img = mt_rand(1,500000000) . $nome;
			
			
// ---------------------------------------------------------------------------------------------------------------------------------			
			
			
			function upload($destino , $novo_nome_img , $larguraimg , $pasta) {
				
					$img = imagecreatefromjpeg($destino); //cria uma imagem jpeg da variavel destino(onde esta armazenada a imagem)
					
					$x = imagesx($img);
					$y = imagesy($img);
					
					//variaveis x e y são as coordenadas da imagem
					
					$alturaimg = ($larguraimg * $y) / $x; //calcular a altura da imagem de acordo com a largura (proporcional)
					
					$novaImagem = imagecreatetruecolor($larguraimg, $alturaimg); 
					imagecopyresampled($novaImagem,$img,0, 0, 0, 0,$larguraimg, $alturaimg,$x , $y);
					// criar e duplica  uma nova imagem
					
					
					
					
					imagejpeg($novaImagem,"$pasta/$novo_nome_img"); //salvar uma nova imagem no diretorio indicado na variavel
					
					imagedestroy($img);
					imagedestroy($novaImagem);
					
					//destroi as variaveis utilizadas acima para upload de novas no diretorio
					
// -------------------------------------------------------------------------------------------------------------------------------------				
				
				
				}
				// decisão utilizada para verificar se os campos nome da imagem não esta vazio e verificar se o formato da
				//imagem é permitido
				if (!empty($nome) && in_array($tipo , $tipoimagem)) {
					
								include ("conectiondb.php");
								
								upload ($destino,$novo_nome_img,750,$pasta);
								
								
								$query_id_album = mysql_query ("SELECT cod_album,cod_grupo FROM album WHERE cod_grupo = '$cod_grupo'");
								
								$cod_id_album = mysql_result($query_id_album,0,'cod_album');
								
								mysql_query ("INSERT INTO foto (cod_album,data_foto,end_foto) VALUES ('$cod_id_album','$data','$pasta/$novo_nome_img')");
								
								
								
								}
								
								else {
									
									
									}
							
							
							
							}
							
							




?>