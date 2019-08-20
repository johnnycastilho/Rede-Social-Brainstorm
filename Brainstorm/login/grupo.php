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
<link rel="stylesheet" type="text/css" href="css/conteudo_grupo.css" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/divbox.js"></script>


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
            
            		
                    <!--capa do grupo -->
                    <div id="capa_grupo">
                    
                    	<?php
				 		include ("conectiondb.php");
						
						$busca_grupo_user = "SELECT grupo.cod_grupo,grupo.nome_grupo,grupo.tema_grupo,usuario.cod_grupo,usuario.id_usuario FROM grupo,usuario WHERE usuario.id_usuario = '$_SESSION[id]' AND usuario.cod_grupo = grupo.cod_grupo ";
	
						$query_grupo_user = mysql_query($busca_grupo_user); //query para verificação do nome do usuario logado
						
						$result_codgrupo_user = mysql_result($query_grupo_user,0,'cod_grupo');
	
						$result_nome_grupo = mysql_result($query_grupo_user,0,'nome_grupo'); // seleção do resultado da query anterior
						
						$result_tema_grupo = mysql_result($query_grupo_user,0,'tema_grupo');
                    
                    	echo "<h1>$result_nome_grupo</h1>
                        <h2>$result_tema_grupo</h2>
                        <span></span>";
						?>
                        
                        		<div id="menu_grupo">
                            	<a class="timeline" href="grupo.php">Timeline</a>
                                <a class="sobre" href="grupo_sobre.php">Sobre</a>
                                <a class="album" href="grupo_album.php">Álbum</a>
                                <a class="contato" href="grupo_contato.php">Contato</a>
                                </div>
                               
                      </div>
                      
                      <!--fim da capa do grupo -->
                      
                      
                      <!--alinhamento das postagens -->
                                
                                <div id="align_post">
                                
                                <?php include ("exibe_post_grupo.php"); ?>
                                
                                
                               
                               
                               </div>
                               
                               <!--Alinhamento das postagens -->
            
            		
            					
    		</div>


</body>
</html>