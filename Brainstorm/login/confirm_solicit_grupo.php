<?php

	error_reporting(0);
	ini_set(“display_errors”, 0 );

	include ("conectiondb.php");

	$cod_grupo = $_POST['cod_grupo'];
	$id_logado = $_POST['id_logado'];
	
	
		if (isset($_POST['send_confirm'])) {
			
			$busca_grupo_usuario = "SELECT cod_grupo,id_usuario_lider FROM grupo WHERE id_usuario_lider = '$id_logado'";
			$query_busca_grupo_usuario = mysql_query($busca_grupo_usuario);
			$result_busca_grupo_usuario = mysql_result($query_busca_grupo_usuario,0,'cod_grupo');
			
			
			$busca_album_usuario_lider = "SELECT cod_album,cod_grupo FROM album WHERE cod_grupo = '$result_busca_grupo_usuario'";
			$query_busca_album_usuario_lider = mysql_query($busca_album_usuario_lider);
			$result_busca_album_usuario_lider = mysql_result($query_busca_album_usuario_lider,0,'cod_album');
			
			
			$delete_foto_grupo = "DELETE FROM foto WHERE cod_album = '$result_busca_album_usuario_lider'";
			$delete_album_grupo = "DELETE FROM album WHERE cod_grupo = '$result_busca_grupo_usuario'";
			$delete_grupo = "DELETE FROM grupo WHERE id_usuario_lider = '$id_logado'";
			
			mysql_query($delete_foto_grupo);
			mysql_query($delete_album_grupo);
			mysql_query($delete_grupo);
			
			
			
			
//--------------------------------------------------------------------------------------------------------------------------------------			
		$update_convite = "UPDATE convite_usuario SET status_convite = 1 WHERE id_usuario_convidado = '$id_logado' AND cod_grupo = '$cod_grupo'";
		
		mysql_query($update_convite) or die (mysql_error());


		$alter = "UPDATE usuario SET cod_grupo = '$cod_grupo' WHERE id_usuario = '$id_logado'";
		
		mysql_query($alter) or die (mysql_error());
		
		$select_nome = "SELECT cod_grupo,nome_grupo FROM grupo WHERE cod_grupo = '$cod_grupo'";
		
		$query = mysql_query($select_nome);
		
		$nome = mysql_result($query,0,'nome_grupo');
		
		echo "<script type='text/javascript' language='javascript'>alert('Você agora está participando do grupo $nome');window.location.href='network.php';</script>";
		
											}
											
			if (isset($_POST['send_denied'])){
				
						$alter = "UPDATE convite_usuario SET status_convite = 2 WHERE cod_grupo = '$cod_grupo' AND id_usuario_convidado = '$id_logado'";
		
		mysql_query($alter) or die (mysql_error());
		
		$delete_solicitacao = "DELETE FROM convite_usuario WHERE status_convite = 2";
		
		mysql_query($delete_solicitacao) or die (mysql_error());
		
			echo "<script type='text/javascript' language='javascript'>alert('Pedido Recusado!');window.location.href='timeline.php';</script>";
				
				}

?>