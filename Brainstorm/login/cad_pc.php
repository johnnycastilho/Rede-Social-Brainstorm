<?php

	include ("conectiondb.php");

	
	if (isset($_POST['publicar'])) {
	
	$titulo = $_POST['titulo_pesquisa'];
	$descricao = $_POST['cont_pesquisa'];
	$link = $_POST['link_pesquisa'];
	$cod_grupo = $_POST['cod_grupo'];
	
	$insert_pc = "INSERT INTO pesquisa_campo (titulo_pc,descricao_pc,link_pc,cod_grupo) VALUES ('$titulo','$descricao','$link','$cod_grupo')";
	
		mysql_query($insert_pc) or die (mysql_error());
		
		echo "<script type='text/javascript' language='javascript'>alert('Pesquisa de Campo Publicada com Sucesso');window.location.href='pesquisa_campo.php';</script>";
	
	}
	
	

?>