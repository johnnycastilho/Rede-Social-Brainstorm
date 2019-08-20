<?php

include ('conectiondb.php');

$nome = $_POST['nome'];
$end = $_POST['endereco'];
$dtnas = $_POST['data'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$login = $_POST['login'];
$senha = $_POST['pass1'];
$confirmsenha = $_POST['pass2'];


$dtnascimento = explode ('/' , $dtnas);  //dividindo a data de nascimento array 0(dia) 1(mes) 2(ano)
$Data_nascimento = "$dtnascimento[2]-$dtnascimento[1]-$dtnascimento[0]";


if (isset($_POST['cadastrar']) == true) {
	
		$busca = mysql_query ("SELECT login_usuario FROM usuario WHERE login_usuario = '$login'");
		$result = mysql_fetch_array($busca);
		
		if ($result['login_usuario'] == $login)  { //verificação do campo login igual ao dos dados armazenados no banco de dados
			
				echo "<script type='text/javascript' language='javascript'>alert ('O login escolhido já é existente!'); window.location.href='home.php';</script>";			
			}
			
		else {
			
					if ($senha !== $confirmsenha) {
						
							echo "<script type='text/javascript' language='javascript'>alert ('Os campos de Senha não conferem'); window.location.href='home.php';</script>";
							
							}
							
							else {
								
									$insert = "INSERT INTO usuario (nome_usuario , endereco_usuario , dtnasc_usuario , sexo_usuario , email_usuario , curso_usuario , login_usuario , senha_usuario) VALUES ('$nome' , '$end' , '$Data_nascimento' , '$sexo' , '$email' , '$curso' , '$login' , '$senha')";
									
										mysql_query ($insert);
										
										echo "<script type='text/javascript' language='javascript'>alert('Cadastro Realizado com Sucesso!'); window.location.href='home.php';</script>";
									
									
									
									}
			
				
			}
		
		
	
		
	
	
	}




?>