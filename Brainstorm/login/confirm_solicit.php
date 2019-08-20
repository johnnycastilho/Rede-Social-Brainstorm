<?php

	include ("conectiondb.php");

	$id_amigo = $_POST['id_amigo'];
	$id_logado = $_POST['id_logado'];
	
	
		if (isset($_POST['send_confirm'])) {


		$alter = "UPDATE lista_amigo SET status_solicitacao = 1 WHERE id_usuario_solicitado = '$id_logado' AND id_usuario_solicitante = '$id_amigo'";
		
		mysql_query($alter) or die (mysql_error());
		
		$select_nome = "SELECT id_usuario,nome_usuario FROM usuario WHERE id_usuario = '$id_amigo'";
		
		$query = mysql_query($select_nome);
		
		$nome = mysql_result($query,0,'nome_usuario');
		
		echo "<script type='text/javascript' language='javascript'>alert('$nome Foi Adicionado a sua rede de Network!');window.location.href='network.php';</script>";
		
											}
											
			if (isset($_POST['send_denied'])){
				
						$alter = "UPDATE lista_amigo SET status_solicitacao = 2 WHERE id_usuario_solicitado = '$id_logado' AND id_usuario_solicitante = '$id_amigo'";
		
		mysql_query($alter) or die (mysql_error());
		
		$delete_solicitacao = "DELETE FROM lista_amigo WHERE status_solicitacao = 2";
		
		mysql_query($delete_solicitacao) or die (mysql_error());
		
			echo "<script type='text/javascript' language='javascript'>alert('Pedido Recusado!');window.location.href='timeline.php';</script>";
				
				}

?>