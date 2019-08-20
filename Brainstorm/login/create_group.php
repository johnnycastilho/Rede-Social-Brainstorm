<?php

	include ("conectiondb.php");

	if (isset($_POST['send_create_group'])) {

	$nome_grupo = $_POST['name_group'];
	$tema_grupo = $_POST['tema_group'];
	$curso_grupo = $_POST['course_group'];
	$objetivo_grupo = $_POST['obj_group'];
	$id_user = $_POST['id_user'];
	$data = date("y-m-d");
	
		$select = "INSERT INTO grupo (id_usuario_lider,nome_grupo,tema_grupo,curso_grupo,objetivo_grupo) VALUES ('$id_user','$nome_grupo','$tema_grupo','$curso_grupo','$objetivo_grupo')";
		
		$query = mysql_query($select);
		
		$busca_grupo_usuario = "SELECT cod_grupo,id_usuario_lider FROM grupo WHERE id_usuario_lider = '$id_user' ";
		
		$query2 = mysql_query ($busca_grupo_usuario);
		
		$result_cod_grupo = mysql_result($query2,0,'cod_grupo');
		
		$insert_cod_grupo = "UPDATE usuario SET cod_grupo = '$result_cod_grupo' WHERE id_usuario = '$id_user'";
		
		$query3 = mysql_query($insert_cod_grupo) or die (mysql_error());
		
		//--------------------------------------------------------------------------------
		
		$busca_cod_grupo_criado = mysql_query("SELECT cod_grupo,id_usuario_lider FROM grupo WHERE id_usuario_lider = '$id_user'");
		
		$result_cod_grupo_criado = mysql_result($busca_cod_grupo_criado,0,'cod_grupo'); 
		
		mkdir("../login/groupimages/$result_cod_grupo_criado",0700); //cria a pasta do grupo no servidor para armazenamento das fotos
		
		$cria_album_grupo = mysql_query("INSERT INTO album (cod_grupo,data_album) VALUES ('$result_cod_grupo_criado','$data')");
	
	}
	
		

?>