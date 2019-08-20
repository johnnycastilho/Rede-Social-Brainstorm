<?php

	include ("conectiondb.php");

	if (isset($_POST['editar'])) {
	
	$novo_nome = $_POST['new_name_group'];
	$novo_projeto = $_POST['new_project_group'];
	$novo_curso = $_POST['new_course_group'];
	$novo_objetivo = $_POST['new_objective_group'];
	$id_user = $_POST['id_user'];
	
	$select_group_user = "SELECT id_usuario,cod_grupo FROM usuario WHERE id_usuario = '$id_user'";
	
	$query = mysql_query ($select_group_user) or die (mysql_error());
	
	$result_cod_group = mysql_result($query,0,'cod_grupo');
	
	$update = "UPDATE grupo SET nome_grupo = '$novo_nome' , tema_grupo = '$novo_projeto' , curso_grupo = '$novo_curso' , objetivo_grupo = '$novo_objetivo' WHERE cod_grupo = '$result_cod_group'";
	
	$query_update = mysql_query($update) or die (mysql_error());
	
	header ("location:grupo_sobre.php");
	
	
		
	
	
	}
	
	

?>