<?php

	include ("conectiondb.php");

	if (isset($_POST['envia_solicit_grupo'])) {
		
		$id_user_convidado = $_POST['id_user_convite'];
		$cod_grupo = $_POST['cod_grupo'];
		$data= date("y-m-d");
		
		$send_convite = "INSERT INTO convite_usuario (cod_grupo,id_usuario_convidado,data_convite,status_convite) VALUES ('$cod_grupo','$id_user_convidado' , '$data' , 0)";
		
		mysql_query($send_convite);
		
		echo "<script type='text/javascript' language='javascript'>alert('Convite Enviado. Aguarde Aprovação!');window.location.href='grupo_sobre.php';</script>";
		
		
		
		}

?>