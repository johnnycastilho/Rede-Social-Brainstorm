<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<title>Brainstorm - Cursos</title>
<link rel="stylesheet" type="text/css" href="css/topo.css" />
<link rel="stylesheet" type="text/css" href="css/conteudo_cursos.css" />
<link rel="stylesheet" type="text/css" href="css/rodape.css" />
<link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/divbox.js"></script>                    
<script type="text/javascript" src="js/jquery-1.10.2.js" /></script>


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



</head>

<body id="topo">

<!--estrutura -->

<div id="pagina">
		
        
        <!--banner -->
        <div id="banner">
        	
        	
                  		
                <!--area de login e cadastro -->
                <div id="login">
                
                
                             
                
                
                <form action="loginacc.php" method="post" class="form_login" >
                
                 <label class="login">Login</label> <input type="text" name="login" class="c_login" /><br/>
                <label class="password">Senha</label><input type="password" name="password" class="p_login" />
                
                <label class="forget"><a href="javascript:" id="clicar2">Esqueceu a Senha ?</a></label><input class="entrar" type="submit" value="Entrar" name="entrar" />
                
                <label class="cadastro"><a href="javascript:" id="clicar">Cadastrar</a></label><br><br>
                
                
                </form>
                </div>
                <!--area de login e cadastro -->
        
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
        
        	<td width="200"><label>Nome : </label></td><td width="500"><input name="nome" type="text" size="50" /></td>
            
            </tr>
            
            <tr>
        
        	<td width="200"><label>Endere??o : </label></td><td width="500"><input name="endereco" type="text" required="required" size="50" /></td>
            
            </tr>
            
            <tr>
            <td><label for="data">Data de Nascimento : </label></td> <td><input name="data" type="text" onkeyup="campodata(this);" maxlength="10" size="10" />
            
            
       
            <label>Sexo</label> <input type="radio" value="Masculino" name="sexo" /><label>Masculino</label><input type="radio" value="Feminino" name="sexo" /><label>Feminino</label></td>
            </tr>
            
            <tr>
            <td><label>E-mail : </label></td> <td><input name="nome" type="text" size="50" /></td>
           	</tr>
            
            <tr>
            <td><label>Institui????o : </label></td>  <td><input name="nome" type="text" size="50" /></td>
            </tr>
            
            <tr>
            <td><label>Login : </label></td>  <td><input name="nome" type="text" size="50" /></td>
            </tr>
            
            <tr>
            <td><label>Senha : </label></td>  <td><input name="nome" type="password" size="50" /></td>
            </tr>
            
            <tr>
            <td><label>Confirmar a senha : </label></td>  <td><input name="nome" type="password" size="50" /></td>  
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
            <li><a href="instituicao.php" >Institui????o</a></li>
            <li><a href="depoimentos.php" >Depoimentos</a></li>
            
        </ul>
        </div>
        <!--menu -->
        
        <div id="conteudo">
        	
            	<div id="texto_principal">
                <h1>Administra????o</h1>
                
                <img class="img_principal" src="images/adm_img.png" /><br /><br />
                
                <h3 align="justify">
                O curso de Administra????o oferecido na ETEC ensina ao aluno a adotar uma postura ??tica na rotina administrativa, elaborar planejamentos de produ????o e materiais, recursos humanos, mercadol??gicos e financeiros. Realiza atividades de controle, al??m de auxiliar em processos de dire????o, utilizando ferramentas da inform??tica b??sica.  	?? um curso muito concorrido, referente a busca de profissionais que existe no mercado, al??m do fato de ser um curso a n??vel t??cnico, o que aumenta mais ainda a expectativa de contrata????o das empresas como institui????es p??blicas, privadas e do terceiro setor.
                </h3>
                </div>
                
                
                <!--menu lateral dos cursos -->
                
                 <img class="img_grade" src="images/sombra_col.png" height="340" width="257" />
                <div id="col_right">               
                <ul>
                	<li><p>Cursos</p></li>
                    <a href="infoweb_cursos.php" ><li>Inform??tica para Internet</li></a>
                    <a href="info_cursos.php" ><li>Inform??tica</li></a>
                    <a href="nut_cursos.php" ><li>Nutri????o e Diet??tica</li></a>
                    <a href="adm_cursos.php" ><li>Administra????o</li></a>
                    <a href="sec_cursos.php" ><li>Secretariado</li></a>
                </ul>
                </div>
                <!--menu lateral dos cursos -->
        	
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
					<li><a href="" >Quem Somos</a></li>
					<li><a href="infoweb_cursos.php" >Cursos</a></li>
					<li><a href="instituicao.php" >Institui????o</a></li>
					<li><a href="depoimentos.php" >Depoimentos</a></li>
					<li><a href="mapasite.php" >Mapa do Site</a></li>
                    
				</ul>
                </div>
                
                <img class="img_rod" src="images/grade_rodape.png" width="199" height="193" />
                		
                
                <p class="topo" onclick="$j('html,body').animate({scrollTop: $j('#voltarTopo').offset().top}, 2000);" value="" ></p>
                
                
                
		</div>
        
        <!-- rodape -->
                
                
                
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
                
		</div>
		
</div>

     
       	

<!--estrutura -->


</body>
</html>