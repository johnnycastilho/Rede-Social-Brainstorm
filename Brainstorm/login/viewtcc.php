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
<link rel="stylesheet" type="text/css" href="css/conteudo_createtcc.css" />

<body>
            
<div id="pagina">

	
						<!--Barra superior somente -->
   				 		<div id="topo">                        	
                        
                        	
                        <div id="barra_inf"></div>           
                        		
    						
            			</div>
                        
                        <!--Barra superior somente -->
                        
                        
                        
                        
                        <!--Conteudo da Barra superior -->
                        
                        <form class="form_search" action="" method="post">
                        
                        	<input type="text" name="searchbox" placeholder="Pesquisar" />
                        </form>
                        
                        <div class="sep"><img src="images/sep.png" height="33" width="5" /></div><a href=""><p class="exit_btn">Sair</p></a>
                        
                        <!--Conteudo da Barra superior -->
    
    		
            
            <!--Barra lateral esquerda -->
            <div id="menu_lateral">
            
            		<div id="foto_perfil">
                    	<img src="images/foto_perfil.png" height="185" width="196px;" />
                    </div>
                    
                    
                    <div id="notific">
                    	
                        <a href=""><img class="amg" src="images/not1.png" height="45" width="49" /></a>
                        <a href=""><img class="not" src="images/not2.png" height="40" width="40" /></a>
                        <a href=""><img class="msg" src="images/not3.png" height="45" width="49"/></a>
                    	
                        
                    </div>
                    
                    <div id="menu">
                    
                    		<ul>
                            	<a href="timeline.php"><li>Timeline</li></a>
                                <a href="perfil.php"><li>Perfil</li></a>
                                <a href="network.php"><li>Network</li></a>
                                <a href=""><li>Arquivos</li></a>
                                <a href="postagem.php"><li>Postagem</li></a>
                                <a href="grupo.php"><li>Grupo</li></a>
                                <a href="pesquisa_campo.php"><li>Pesquisas</li></a>
                                <a href="createtcc.php"><li>Criando o TCC</li></a>
                            </ul>
                    </div>
            </div>
            
            <!--Barra lateral esquerda -->
            
            
            <div id="conteudo">
            
            <div id="end">
            		<a href="">Voltar</a>
            </div>
         
            	<div id="view_post">
                	<h1>Lorem ipsum dolor sit amet</h1>
                    
                    <img src="images/img_viewpost.png" class="img_viewpost" />
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat et est non laoreet. Nam quam nunc, posuere quis enim quis, iaculis mattis velit. Proin lobortis ante vitae mattis elementum. Proin a iaculis nisi. Nunc molestie nunc id tellus facilisis dignissim. Fusce quis porttitor diam. Duis et lorem sem. In sodales congue nisl, non vestibulum neque congue venenatis. Nunc mattis odio in condimentum viverra. Mauris eros nulla, semper ac blandit at, aliquam ut est. Sed feugiat sapien urna, id lobortis neque rhoncus id. Nam nec eleifend diam. Vestibulum faucibus ante eu vehicula placerat. Etiam risus lacus, blandit at leo pellentesque, convallis tincidunt elit. Phasellus gravida velit sit amet varius malesuada.

Donec vitae enim mattis, mollis ante id, faucibus metus. Quisque massa augue, aliquet ut ullamcorper ullamcorper, volutpat a lacus. Sed non aliquam enim, at congue dui. Duis posuere nunc at arcu malesuada aliquam. Maecenas in diam nec quam iaculis tempor. Suspendisse sed lobortis nunc. Ut hendrerit consequat vestibulum. Aenean pretium, eros a pellentesque pulvinar, elit enim varius libero, nec pretium nisi lectus sed ligula. Aliquam bibendum euismod erat, a iaculis ligula pretium ac. Nulla eu nisi eget eros semper commodo. Praesent nec lectus nunc. Sed tincidunt est mauris, et euismod elit euismod eu.

Nullam sollicitudin vel orci non accumsan. Duis eleifend in arcu in sagittis. Fusce consectetur cursus purus, vel iaculis est mattis vel. Sed nec commodo neque, vehicula ultrices odio. Nunc ac auctor ipsum, sed scelerisque nibh. Sed felis quam, fringilla interdum porta tincidunt, tristique eget est. Praesent vel lectus erat. Donec consequat vulputate lectus. Nullam elit elit, ultrices a bibendum at, consectetur et ipsum. Nulla massa ante, consectetur eget venenatis et, hendrerit eu mauris. Etiam hendrerit consectetur erat, mollis sagittis risus bibendum in. Mauris id justo tortor. Proin ultrices, nisi a elementum volutpat, enim tortor lobortis odio, vitae mollis urna mi non dui. Etiam non sapien dictum, viverra ante non, condimentum nunc. Nulla gravida venenatis vehicula.</p>
                
                </div>
            
            				
    		</div>


</body>
</html>