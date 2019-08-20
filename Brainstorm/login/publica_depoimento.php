<?php

	include ("conectiondb.php");

		
		
			$id_usuario = $_POST['id_usuario'];
			$conteudo_depo = $_POST['cont_depo'];
			
			
			
			mysql_query ("INSERT INTO depoimento (id_usuario,conteudo_usuario) VALUES ('$id_usuario','$conteudo_depo')") or die (mysql_error());
			
			echo "<script type='text/javascript' language='javascript'>alert('Obrigado pelo seu depoimento!');window.location.href='timeline.php';</script>";
		
		
		
		

?>