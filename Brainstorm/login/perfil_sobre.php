<?php

	session_start();
	
	if (!isset($_SESSION['usuario']) == true && !isset($_SESSION['validacao']) == 1) {
		
			unset($_SESSION['usuario']);
			unset($_SESSION['validacao']);
			
		
		echo "<script type='text/javascript' language='javascript'>alert ('Efetue o Login para poder Visualizar.');window.location.href='../home.php';</script>";
				
		
		}
	else {
		
			$_SESSION['id'];
			$_SESSION['usuario'];
			$_SESSION['nome_user'];
		
		}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil Sobre</title>

<link rel="stylesheet" type="text/css" href="css/topo.css" />
<link rel="stylesheet" type="text/css" href="css/conteudo_perfil.css" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/divbox.js"></script>



				<script language="javascript" type="text/javascript">
					
                    		function campodata(new_dtnasc) {
								
								var new_dtnasc = new_dtnasc.value;
								if (new_dtnasc.length == 2) {
									new_dtnasc = new_dtnasc + "/";
									document.forms[0].new_dtnasc.value = new_dtnasc;
									return true;
														
									}
									
									if (new_dtnasc.length == 5) {
									new_dtnasc = new_dtnasc + "/";
									document.forms[0].new_dtnasc.value = new_dtnasc;
									return true;
														
									}
								
								}
                    
                    </script>



			<script type="text/javascript">
                                $(function(){
                                    $("#clicar").click(function(){
                                        $("#teste").divbox({
                                            opacity: 0.9,
                                            inClass: 'edita_perfil',
                                            close: '#fechar',
                                            scrollAnimate: false
                                        });
                                    });
                                });
								
								
                    </script>
                    
                    <script type="text/javascript">
                                $(function(){
                                    $("#clicar3").click(function(){
                                        $("#teste3").divbox({
                                            opacity: 0.9,
                                            inClass: 'teste_classe3',
                                            close: '#fechar',
                                            scrollAnimate: false
                                        });
                                    });
                                });
								
								
                    </script>
                    
                    <script type="text/javascript">
                                $(function(){
                                    $("#clicar4").click(function(){
                                        $("#teste4").divbox({
                                            opacity: 0.9,
                                            inClass: 'teste_classe4',
                                            close: '#fechar',
                                            scrollAnimate: false
                                        });
                                    });
                                });
								
								
                    </script>
                    
                    




<body>
            
<div id="pagina">

	
						<!--Barra superior somente -->
   				 		<div id="topo">   
                        <img src="images/logo.png" class="logo" />                     	
                        
                        	
                        <div id="barra_inf"></div>           
                        		
    						
            			</div>
                        
                        <!--Barra superior somente -->
                        
                        
                        
                        
                        <!--Conteudo da Barra superior -->
                        
                        <form class="form_search" action="exibe_pesquisa.php" method="post">
                        
                        	<input type="text" name="searchbox" placeholder="Pesquisar usuário" />
                        </form>
                        
                        <div class="sep"><img src="images/sep.png" height="33" width="5" /></div>
                        
                        
                        <div class="config">
                            <ul class="no-js">
                                <li>
                                    <a class="clicker"><img src="images/engrenagem-hi.png" alt="Icon"></a>
                                    <ul>
                                        <li><a href="javascript:" id="clicar_depo"><img src="images/i-5.png" alt="Icon">Criar Depoimento</a></li>
                                        <li><a href="../logout.php"><img src="images/i-6.png" alt="Icon">Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <!--Conteudo da Barra superior -->
                        
                       <div id="container">
        					<div id="centro">
        	
            						<div id="depoimento" class="create_depo">
           									 <a href="javascript:;" id="fechar" class="fechar"></a>
                                             <div id="area_criar_depo">
                                             
                                             <form action="publica_depoimento.php" method="post">
                                             	<label>Deixe sua opinião sobre o que achou do Brainstorm :</label>
                                                <input type="hidden" name="id_usuario" value="<?php echo "$_SESSION[id]"; ?>" /> 
                                                <textarea name="cont_depo"></textarea>
                                                <input type="submit" name="pub_depo" value="Publicar" />
                                             </form>
                                             
                                             
                                             </div>                                            
                                            
                                             
                                     </div>
                             </div>
                      </div>
    
    		
            
            <!--Barra lateral esquerda -->
            <div id="menu_lateral">
            
            		<div id="foto_perfil">
                    	<?php include ("exibir_foto_perfil.php"); ?>
                    </div>
                    
                    
                    <div id="notific">
                    	
                         <a href="javascript:" id="clicar4"><img class="amg" src="images/not1.png" height="45" width="49" /></a>
                        <a href="javascript:" id="clicar3"><img class="not" src="images/not2.png" height="40" width="40" /></a>
                        <a href=""><img class="msg" src="images/not3.png" height="45" width="49"/></a>
                    	
                        
                    </div>
                    
                    <div id="container">
        					<div id="centro">
        	
            						<div id="teste3" class="teste_classe3">
           									 
                                             
                                             <div id="slide_not">
                                             <p class="msg_not">Você não possui Solicitações de Amizade</p>
                                             <?php
											 include ("notificacao_amigo.php");
											 ?>
                                             </div>
                                     </div>
                             </div>
                      </div>
                      
                      <!--solicitacao de grupo -->
                      <div id="container">
        					<div id="centro">
        	
            						<div id="teste4" class="teste_classe4">
           									 
                                             <div id="slide_not">
                                             <p class="msg_not">Você não possui Convites de Grupo.</p>
                                             <?php
											 include ("notificacao_grupo.php");
											 ?>
                                             </div>
                                             
                                     </div>
                             </div>
                      </div>
                    
                    <div id="menu">
                    
                    		<?php include ("verifica_grupo.php"); ?>
                    </div>
            </div>
            
            <!--Barra lateral esquerda -->
            
            
            <div id="conteudo">
            
            	 <div id="capa_perfil">
                    
                    	 <?php
				 include ("conectiondb.php");
				 
				 						error_reporting(0);
										ini_set(“display_errors”, 0 );
										
				$busca_nome_user = "SELECT id_usuario,nome_usuario,cod_grupo FROM usuario WHERE id_usuario = '$_SESSION[id]'";
	
				$query_nome_user = mysql_query($busca_nome_user); //query para verificação do nome do usuario logado
	
				$resul = mysql_result($query_nome_user,0,'nome_usuario'); // seleção do resultado da query anterior
				
				$resul2 = mysql_result($query_nome_user,0,'cod_grupo');
				
				$query_busca_nome_grupo_perfil = mysql_query("SELECT cod_grupo,nome_grupo FROM grupo WHERE cod_grupo = '$resul2'");
				
				$resul3 = mysql_result($query_busca_nome_grupo_perfil,0,'nome_grupo');
				
                    
                    	echo "<h1>$resul</h1>
                        <h2>$resul3</h2>
                        <span></span>";
						?>
                        
                        		<div id="menu_perfil">
                                <a class="timeline" href="perfil.php">Timeline</a>
                                <a class="perfil" href="perfil_sobre.php">Perfil</a>
                                <a class="contato" href="perfil_contato.php">Contato</a>
                                </div>
                                
                                <form method="post" enctype="multipart/form-data" class="send_img_perfil">
                                
                                <label>Alterar Foto de Perfil :</label>
                                <input type="file" name="perfil_img" class="up_foto"/>
                                <input type="submit" name="send_img" value="Salvar" />
                                
                                </form>
                                
                                <?php				
								include('funcao_upload_image_perfil.php'); //logica para upload de imagens no servidor							
								?>
                               
                      </div>
            
            		
                    
                    		
                            
                            
                            <!--Formulario de Edição do perfil -->
                            
                   
        	
            <div id="teste" class="edita_perfil">
            <a href="javascript:;" id="fechar" class="fechar"></a>
                
    	<div id="form" class="form">
        
        
        
    	<form action="update_perfil.php" method="post" >
        
        	<table>
            <tr>
            <td><label>Nome de Perfil :</label></td> <td> <input name="new_name" type="text" required size="50" /><br></td>
            </tr>
            
            <tr>
            <td><label>Email : </label></td> <td><input type="text" name="new_email" required size="50" /><br></td>
            </tr>
            
            <tr>
            <td><label>Curso :</label></td> <td><select name="new_curso">
                	<option value="Informática para Internet">Informática para Internet</option>
                    <option value="Informática">Informática</option>
                    <option value="Administração">Administração</option>
                    <option value="Secretariado">Secretariado</option>
                    <option value="Nutrição">Nutrição</option>
                </select><br></td>
            </tr>
            
            
            <tr>
            <td><label>Data de Nascimento : </label></td> <td><input name="new_dtnasc" type="text" required onkeyup="campodata(this);" maxlength="10" size="10" /><br></td>
            </tr>
            
            <tr>
            <td><label>Objetivo :</label></td> <td class="textarea"><textarea rows="9" required cols="39" name="new_objetivo" maxlength="300"></textarea></td>
            </tr>
            
            <input type="hidden" name="user" value="<?php echo "$_SESSION[id]"; ?>" />
            
                       
            <input class="submit" type="submit" name="editar" value="Confirmar Alterações" />
              </table>
        	
        </form>
        
        </div>
    	
        </div>
    
    <!--Formulario de edição do perfil -->
    
    							<?php
								
								include ("exibe_perfil_objetivo.php");
								
								?>
                                
                                <a href="javascript:" id="clicar" class="editar_perfil">Editar perfil</a>
                               
    
                    
                    
                               
                               
                               </div>
                               
                               
                               
                               
                 </div>
            					
    		


</body>
</html>