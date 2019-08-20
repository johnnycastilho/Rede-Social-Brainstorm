<?php

	session_start();
	
	if (!isset($_SESSION['usuario']) == true && !isset($_SESSION['validacao']) == 1) {
		
			unset($_SESSION['usuario']);
			unset($_SESSION['validacao']);
			
		
		echo "<script type='text/javascript' language='javascript'>alert ('Efetue o Login para poder Visualizar.');window.location.href='../home.php';</script>";
				
		
		}
	else {
		
			$id_user = $_SESSION['id'];
		
		}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Brainstorm - Timeline</title>

<link rel="stylesheet" type="text/css" href="css/topo.css" />
<link rel="stylesheet" type="text/css" href="css/conteudo_arquivos.css" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
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
                        <a href="javascript:" id="clicar"><img class="not" src="images/not2.png" height="40" width="40" /></a>
                        <a href=""><img class="msg" src="images/not3.png" height="45" width="49"/></a>
                    	
                        
                    </div>
                    
                    <div id="container">
        					<div id="centro">
        	
            						<div id="teste" class="teste_classe">
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
            		<div id="topo_arquivos">
                    
                    	<h1>Diretório de Anexos</h1>
                    
                    
                    </div>
                    
                    <form action="delete_file.php" method="post" class="form_files" enctype="multipart/form-data">
                    
                    <div class="submit">
                    
                    <input type="submit" name="delete" value="" class="delete_file" />                   
                    
                    
                    <input type="hidden" name="id_user" value="<?php echo "$_SESSION[id]"; ?>" />	
                    </div>
                    
                                     
                    <?php
						include ('view_files.php');
					?>
                    
                    
                   
                    
                    
                    
                    
                    
                    
                    </form>
            
            					
    		</div>


</body>
</html>