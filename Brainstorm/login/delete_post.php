<?php


	include ("conectiondb.php");

	if (isset($_POST['delete_post'])) {

	$delete_post = "DELETE FROM postagem WHERE id_postagem = '$_POST[id_postagem]'";
	
	mysql_query($delete_post);
	
	header("location:perfil.php");
	
	}

	
?>