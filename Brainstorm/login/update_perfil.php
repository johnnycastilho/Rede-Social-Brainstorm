<?php

include ("conectiondb.php");

	$nome = $_POST['new_name'];
	$email = $_POST['new_email'];
	$curso = $_POST['new_curso'];
	$dtnasc = $_POST['new_dtnasc'];
	$objetivo = $_POST['new_objetivo'];
	$user = $_POST['user'];
	
	$dtnascimento = explode ('/' , $dtnasc);  //dividindo a data de nascimento array 0(dia) 1(mes) 2(ano)
	$Data_nascimento = "$dtnascimento[2]-$dtnascimento[1]-$dtnascimento[0]";
	
	$update = "UPDATE usuario SET nome_usuario = '$nome' , email_usuario = '$email' , curso_usuario = '$curso' , dtnasc_usuario = '$Data_nascimento' , objetivo_usuario = '$objetivo' WHERE id_usuario = '$user'";
	
	mysql_query($update);
	
		header ("location:perfil_sobre.php");
?>