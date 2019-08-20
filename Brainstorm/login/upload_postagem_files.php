<?php
	
	include ('conectiondb.php');
	
	if (isset($_POST['enviar_post'])) {
									
		
										$pasta = "files";
										$data_hora = date("y-m-d");
										
										if ($_FILES['anexo_post'] !== "Array") { //verifica se foi inserido algum anexo se nao ele vai inserir valor nulo ao atributo anexo_postagem
		
		
		
		
				$arquivo = $_FILES['anexo_post']; //informações do arquivo upado
				$destino = $arquivo['tmp_name']; //endereço ad imagem
				$tipo = $arquivo['type']; //tipo do arquivo para verificação
				$nome_arquivo = $arquivo['name']; //nome do arquivo
				$tipos = array("application/pdf" , "application/excel" , "application/msword" , "application/msword"); //tipos de arquivos permitidos 
				$novo_nome = mt_rand(1,100000) . $nome_arquivo; // novo nome do arquivo para que nao haja conflito e sobreposição no servidor
				
				if (!empty($nome_arquivo) && in_array($tipo , $tipos)) { //verificação se o arquivo upado existe e confere com os tipos permitidos
					
									
					
									if (move_uploaded_file($destino,$pasta."/".$novo_nome)) { //funcao que realiza o upload do arquivo no servidor
									
									 
										//logo apos realizar o upload do arquivo , ira inserir as informações no banco de dados
										
										$titulo = NULL; //titulo da postagem
										$conteudo = $_POST['conteudo_post']; //conteudo da postagem
										//$logado = $_POST['user']; //nome do usuario para a busca da id do mesmo
										
										$id = $_POST['user'];
										
										
										$anexo = "$pasta/$novo_nome";	//armazena o endereço do anexo upado							
										
										
										
										
										
										$insercao1 = "INSERT INTO postagem (id_usuario , data_postagem , tema_postagem , anexo_postagem , conteudo_postagem) VALUES ('$id' , '$data_hora' , '$titulo' , '$anexo' , '$conteudo')"; //insere as informações da  postagem no banco de dados
										
										mysql_query($insercao1) or die (mysql_error());
										
										
										
										header ("location:timeline.php");
									}
									
									else {
										
										$titulo = NULL; //titulo da postagem
										$conteudo = $_POST['conteudo_post']; //conteudo da postagem
										//$logado = $_POST['user']; //nome do usuario para a busca da id do mesmo
										
										$id = $_POST['user'];
										
										
										$anexo = NULL;	//armazena o endereço do anexo upado							
										
										
										
										
										
										$insercao2 = "INSERT INTO postagem (id_usuario , tema_postagem, data_postagem , anexo_postagem , conteudo_postagem) VALUES ('$id' , '$data_hora' , '$titulo' , '$anexo' , '$conteudo')"; //insere as informações da  postagem no banco de dados
										
										mysql_query($insercao2) or die (mysql_error());
										
										header ("location:timeline.php");
										
										
										}
									}
										
									}
									
									
									
		}
	

?>