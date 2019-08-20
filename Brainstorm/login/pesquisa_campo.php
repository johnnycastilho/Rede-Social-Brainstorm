<?php

	session_start();
	
	if (!isset($_SESSION['usuario']) == true && !isset($_SESSION['validacao']) == 1) {
		
			unset($_SESSION['usuario']);
			unset($_SESSION['validacao']);
			
		
		echo "<script type='text/javascript' language='javascript'>alert ('Efetue o Login para poder Visualizar.');window.location.href='../home.php';</script>";
				
		
		}
	else {
		
			$logado  = $_SESSION['usuario'];
		
		}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Brainstorm - Timeline</title>

<link rel="stylesheet" type="text/css" href="css/topo.css" />
<link rel="stylesheet" type="text/css" href="css/conteudo_pesquisa.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/divbox.js"></script>


				<script type="text/javascript">
                                $(function(){
                                    $("#clicar").click(function(){
                                        $("#teste").divbox({
                                            opacity: 0.9,
                                            inClass: 'teste_classe',
                                            close: '#fechar',
                                            scrollAnimate: false
                                        });
                                    });
                                });
								
								
                    </script>
                    
                    <script type="text/javascript">
                                $(function(){
                                    $("#clicar2").click(function(){
                                        $("#teste2").divbox({
                                            opacity: 0.9,
                                            inClass: 'teste_classe2',
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
                        
                        <form class="form_search" action="" method="post">
                        
                        	<input type="text" name="searchbox" placeholder="Pesquisar" />
                        </form>
                        
                        <div class="sep"><img src="images/sep.png" height="33" width="5" /></div>
                        
                        
                        <div class="config">
                            <ul class="no-js">
                                <li>
                                    <a class="clicker"><img src="images/engrenagem-hi.png" alt="Icon"></a>
                                    <ul>
                                        <li><a href="#"><img src="images/i-5.png" alt="Icon">Criar Depoimento</a></li>
                                        <li><a href="../logout.php"><img src="images/i-6.png" alt="Icon">Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <!--Conteudo da Barra superior -->
    
    		
            
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
           									 <a href="javascript:;" id="fechar" class="fechar"></a>
                                             
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
           									 <a href="javascript:;" id="fechar" class="fechar"></a>
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
            
            				<div id="header">
                            	
                                <div id="capa_perfil">
                                
                                <span></span>
                                </div>
                                
                                <!--<h1>Pesquisa de Campo</h1>-->
                                
                                
                                
                                
                                
                                <?php //botão de editar perfil grupo
										
										error_reporting(0);
										ini_set(“display_errors”, 0 );
										
										$verifica_user = "SELECT cod_grupo,id_usuario_lider FROM grupo WHERE id_usuario_lider = '$_SESSION[id]'";
										
										$query_verifica_user = mysql_query($verifica_user);
										
										$result_verifica_user = mysql_result($query_verifica_user,0,'id_usuario_lider');
										$result_cod_grupo = mysql_result($query_verifica_user,0,'cod_grupo');
										
										if ($result_verifica_user == $_SESSION['id']) {
                                        echo "
										
													
													
												 <a href='javascript:' id='clicar' class='create_pc'>Tutorial</a>
												 <a href='javascript:' id='clicar2' class='tutorial'>Criar Pesquisa</a> ";
										}
										
										else {}
										
										?>
                                
                               
                                
                                
                                <div id="teste" class="teste_classe">
                                	<h1>Passos para a Criação da Pesquisa de Campo</h1>
                                    
                                    <p>Para efetuar a publicação da sua pesquisa de campo no Brainstorm,
                                        crie um questionário primeiramente no Google Drive clicando no logo abaixo
                                        e siga as instruções para a criação.
                                        Logo após , clique em Criar pesquisa para inserir os dados da sua pesquisa
                                        de campo e o link para o questionário que será publicado aqui no Brainstorm.</p>
                                    
                                    <a href="https://support.google.com/drive/answer/87809?hl=pt-BR" target="_blank"><img src="images/gd.png" class="logo_google" /></a>
                                </div>
                                
                                <div id="teste2" class="teste_classe2">
                                
                                	<h1 class="header_pesquisa">Publique sua Pesquisa de Campo</h1>
                                
                                		<form action="cad_pc.php" method="post">
                                        		<input type="text" name="titulo_pesquisa" size="60" class="titulo_pesquisa" placeholder="titulo da pesquisa de campo" />
                                                <textarea name="cont_pesquisa" class="cont_pesquisa" rows="10" cols="50" placeholder="explique o objetivo da pesquisa"></textarea>
                                                <input type="text" name="link_pesquisa" class="link_pesquisa" size="60" placeholder="Link para a pesquisa de campo" />
                                                <input type="hidden" name="cod_grupo" value="<?php echo "$result_cod_grupo"; ?>" />
                                                <input class="publicar" type="submit" name="publicar" value="Publicar" />
                                        </form>
                                	
                                </div>
                            
                            		
                            </div>
                            
                            <!--<div id="filter">
                            	<ul>
                                
                                	<a href=""><li>Informática</li></a>
                                    <a href=""><li>Nutrição</li></a>
                                    <a href=""><li>Administração</li></a>
                                    <a href=""><li>Secretariado</li></a>
                                    <a href=""><li>Info p/ Internet</li></a>
                                </ul>
                            </div> -->
                            
                            <div id="area_pesquisas">
                            
                            <?php
								
								include ("exibe_pc.php");
							
							?>
                           
                           
            
            		
            					
    						</div>


</body>
</html>