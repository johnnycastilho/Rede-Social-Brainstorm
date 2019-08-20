<?php

	include ("conectiondb.php");

	$busca = "SELECT id_usuario,curso_usuario,email_usuario,dtnasc_usuario,objetivo_usuario FROM usuario WHERE id_usuario = '$_SESSION[id]'";
	
	$query = mysql_query($busca);
	
	while ($array = mysql_fetch_array($query)) {
		
			$dtnascimento = explode ('-' , $array['dtnasc_usuario']);  //dividindo a data de nascimento array 0(dia) 1(mes) 2(ano)
			$Data_nascimento = "$dtnascimento[2]/$dtnascimento[1]/$dtnascimento[0]";
		
			echo "<div id='sobre_perfil'>
                                		
                                        <h1 class='objetivo'>Objetivo</h1>
                                        
                                        <img src='images/sep2.png' class='sep_perfil' />
                                        
                                        
                                        <p class='conteudo_objetivo'><textarea rows='12' cols='80' disabled>$array[objetivo_usuario]</textarea></p>
										
                                        
                                        <img src='images/sep2.png' class='sep2_perfil' />
                                        <img src='images/sep2.png' class='sep3_perfil' />
                                        <img src='images/sep2.png' class='sep4_perfil' />
                                        
                                        	<ul class='lateral_sobre'>
                                            	<li class='title'>Curso</li>
                                                <li>$array[curso_usuario]</li>
                                                <li class='title'>Instituição</li>
                                                <li>ETEC de Hortolândia</li>
                                                <li class='title'>E-mail</li>
                                                <li>$array[email_usuario]</li>
                                                <li class='title'>Data de Nascimento</li>
                                                <li>$Data_nascimento</li>
                                            </ul>
                                        
                                        
                                        
                                        
                                
                                
                                </div>";
		
		}

?>