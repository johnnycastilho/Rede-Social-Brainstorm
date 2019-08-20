<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<link rel="shortcut icon" href="images/favicon.ico">
<title>Brainstorm - Home</title>
<link rel="stylesheet" type="text/css" href="css/topo_home.css" />
<link rel="stylesheet" type="text/css" href="css/conteudo_home.css" />
<link rel="stylesheet" type="text/css" href="css/rodape_home.css" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/divbox.js"></script>                    
<script type="text/javascript" src="js/jquery-1.10.2.js" /></script>
<script type="text/javascript" src="js/fbsdk.js"></script>
<script type="text/javascript" src="js/bjqs-1.3.js"></script>
<!--<link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>-->
                    
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
				// Use jQuery com a variavel $j(...)
				var $j = jQuery.noConflict();
				$j(document).ready(function() {
				$j(".topo").hide();
				$j(function () {
				$j(window).scroll(function () {
				if ($j(this).scrollTop() > 300) {
				$j('.topo').fadeIn();
				} else {
				$j('.topo').fadeOut();
				}
				});
				$j('.topo').click(function() {
				$j('body,html').animate({scrollTop:0},900);
				}); 
					});});
				</script>
                
                
                 
                 
					<script>
					
					(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
					
                    </script>
                    
                    <script language="javascript" type="text/javascript">
					
                    		function campodata(data) {
								
								var data = data.value;
								if (data.length == 2) {
									data = data + "/";
									document.forms[0].data.value = data;
									return true;
														
									}
									
									if (data.length == 5) {
									data = data + "/";
									document.forms[0].data.value = data;
									return true;
														
									}
								
								}
                    
                    </script>
                    
                    <!--script slider principal -->
                    
                    <script class="secret-source">
						jQuery(document).ready(function($) {
				
						  $('#banner-fade').bjqs({
							height      : 400,
							width       : 1150,
							responsive  : true
						  });
				
						});
					  </script>
                      
                      
                                         
                    
                    				
                                    
<!--scripts do formulario de cadastro -->




</head>


<body id="topo">

<!--estrutura -->

<div id="pagina">
		
        
        <!--banner -->
        <div id="banner">
        	
        	
                  		
                <!--area de login e cadastro -->
                <div id="login">
                
                
                             
                
                
                <form action="loginacc.php" method="post" class="form_login" >
                
                 <label class="login">Login </label> <input type="text" name="login" class="c_login" /><br/>
                <label class="password">Senha </label><input type="password" name="password" class="p_login" />
                
                <label class="forget"><a href="javascript:" id="clicar2">Esqueceu a Senha ?</a></label><input class="entrar" type="submit" value="Entrar" name="entrar" />
                
                <label class="cadastro"><a href="javascript:" id="clicar">Cadastrar</a></label><br><br>
                
                
                </form>
                </div>
                <!--area de login e cadastro -->
                
                			<!--campo esqueceu a senha -->
                
                			<div id="teste2" class="teste_classe2">
                            
                            		<form action="forgetpass.php" method="post">
                                    	Digite seu E-mail :<input type="text" name="email_forget" size="45" />
                                        <input type="submit" value="Enviar" name="send" />
                                    </form>
                                
                                	
                                </div>
                                
                               <!--campo esqueceu a senha -->
        
        </div>
		<!--banner -->
        
        <div id="container">
        <div id="centro">
        	
            <div id="teste" class="teste_classe">
            <a href="javascript:;" id="fechar" class="fechar"></a>
                			
				
				<div id="conteudo_cadastro">
    
    	<div id="form">
        
        
        
    	<form action="cadastro.php" method="post" >
        	<table>
            <tr>
        
        	<td width="200"><label>Nome : </label></td><td width="500"><input name="nome" required="required" type="text" size="50" /></td>
            
            </tr>
            
            <tr>
        
        	<td width="200"><label>Endereço : </label></td><td width="500"><input name="endereco" type="text" required="required" size="50" /></td>
            
            </tr>
            
            <tr>
            <td><label for="data">Data de Nascimento : </label></td> <td><input name="data" type="text" required="required" onkeyup="campodata(this);" maxlength="10" size="10" />
            
            
       
            <label>Sexo :</label> <input type="radio" value="Masculino" name="sexo" /><label>M</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="Feminino" name="sexo" /><label>F</label></td>
            </tr>
            
            <tr>
            <td><label>E-mail : </label></td> <td><input name="email" required="required" type="text" size="50" /></td>
           	</tr>
            
            <tr>
            <td><label>Curso : </label></td>  <td>
            
            	<select name="curso">
                	<option value="Informática para Internet">Informática para Internet</option>
                    <option value="Informática">Informática</option>
                    <option value="Administração">Administração</option>
                    <option value="Secretariado">Secretariado</option>
                    <option value="Nutrição">Nutrição</option>
                </select></td>
            </tr>
            
            <tr>
            <td><label>Login : </label></td>  <td><input name="login" required="required" type="text" size="50" /></td>
            </tr>
            
            <tr>
            <td><label>Senha : </label></td>  <td><input name="pass1" required="required" type="password" size="50" /></td>
            </tr>
            
            <tr>
            <td><label>Confirmar a senha : </label></td>  <td><input name="pass2" required="required" type="password" size="50" /></td>  
            </tr>
            
            </table>
            <input class="submit" type="submit" name="cadastrar" value="" />
        </form>
        
        </div>
    </div>
		
            </div>
        </div>
        </div>
        
       	<!--menu --> 
        <div id="menu">
        <ul>
        	<li><a href="home.php" >Home</a></li>
            <li><a href="quemsomos.php" >Quem Somos</a></li>
            <li><a href="infoweb_cursos.php" >Cursos</a></li>
            <li><a href="instituicao.php" >Instituição</a></li>
            <li><a href="depoimentos.php" >Depoimentos</a></li>
            
        </ul>
        </div>
        <!--menu -->
		
		
		<!-- conteudo -->
        
        <div id="conteudo">
        
        	<div id="slider_principal"> 
            
            		<div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="images/Infowork.png"></li>
          <li><img src="images/Expoinfo.png"></li>
          <li><img src="images/Etec-de-Hortolândia.png"></li>
           <li><img src="images/Five jobs.png"></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->           	
            
            </div>
            
            <div id="group_images">
            
            <div id="img1">
            		<a href="quemsomos.php"><img src="images/home_img1.png" height="271" width="330" /></a>
                    <p>Nós somos o grupo 5jobs, responsáveis pela Rede Social Brainstorm que você está acessando neste momento. <a href="quemsomos.php">Clique Aqui!</a></p>
            </div>
            
            <div id="img2">
            		<a href="infoweb_cursos.php"><img src="images/home_img2.png" height="271" width="330" /></a>
                    <p>Veja os cursos técnicos que a ETEC Hortolândia disponibiliza como Administração, Secretariado, Nutrição e Dietética, Informática e Informática para internet. Para mais informações, <a href="infoweb_cursos.php">Clique Aqui!</a></p>
            </div>
            
            <div id="img3">
            		<a href="instituicao.php"><img src="images/home_img3.png" height="271" width="330" /></a>
                    <p>A ETEC Hortolândia é considerada como a escola com o melhor ensino da cidade de Hortolândia, e é referência na região metropolitana de Campinas, <a href="instituicao.php">Clique Aqui!</a></p>
            </div>
            
            </div>
            
            <div id="comment">
            
            <h1>Depoimentos</h1>
            
            
            		<div id="txtdepo">
            		<div class="textosTroca">
                        <div class="item">"Esperamos que o projeto ajude realmente os usuários no desenvolvimento de seus projetos."<br />"Projeto foi baseado em uma rede social que tem como foco auxiliar o desenvolvimento de trabalhos escolares."</div>
                       
                    </div>
                    
                    </div>
                    
            		
            </div>
            
            <div id="likebox">
            			<div class="fb-like-box" data-href="https://www.facebook.com/BrainstormTCC" data-width="315" data-height="290" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
            </div>
        
        	
		</div>
        
        <!-- conteudo -->

	<!-- rodape -->
		<div id="rodape">
        
        
        		<div id="redes">
                		<a href="https://www.facebook.com/BrainstormTCC" target="_blank"><img src="images/fb_btn.png" name="facebook" onmouseover="document.facebook.src='images/fb_hover.png'" onmouseout="document.facebook.src='images/fb_btn.png'" width="77" height="78" /></a>
                        
                        <a href=""><img src="images/lk_btn.png" name="linkedin" onmouseover="document.linkedin.src='images/lk_hover.png'" onmouseout="document.linkedin.src='images/lk_btn.png'" width="75" height="78" /></a>
                        
                        <a href=""><img src="images/yt_btn.png" name="youtube"  onmouseover="document.youtube.src='images/yt_hover.png'" onmouseout="document.youtube.src='images/yt_btn.png'" width="82" height="78" /></a>
                
                </div>
				
                <div id="email">Em caso de duvidas envie-nos um E-mail<br>brainstormtcc@hotmail.com</div>
            
            <div id="copy">Copyright 2013 - Todos os Direitos Reservados</div>
            
            <div id="jobs"><img src="images/5jobs.png" height="39" width="92" /></div>
					
				<div id="menu_rod">
                
                <ul>     	
                	
					<li><a href="home.php" >Home</a></li>
					<li><a href="quemsomos.php" >Quem Somos</a></li>
					<li><a href="infoweb_cursos.php" >Cursos</a></li>
					<li><a href="instituicao.php" >Instituição</a></li>
					<li><a href="depoimentos.php" >Depoimentos</a></li>
					<li><a href="mapasite.php" >Mapa do Site</a></li>
                    
				</ul>
                </div>
                
                <img class="img_rod" src="images/grade_rodape.png" width="199" height="193" />
                		
                
                <p class="topo" onclick="$j('html,body').animate({scrollTop: $j('#voltarTopo').offset().top}, 2000);" value="" ></p>
                
                
                
		</div>
        
        <!-- rodape -->
                
                
                
                
                
                
	</div>
<!--estrutura -->


</body>
</html>