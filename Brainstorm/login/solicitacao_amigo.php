<?php

	include ("conectiondb.php");

	
		
		$user_friend = $_POST['id_user_post'];
		$user_session = $_POST['id_user_session'];
		$data= date("y-m-d");
		
		if ($user_session !== $user_friend) { //primeiro if
		
		$solicitacao = "INSERT INTO lista_amigo (id_usuario_solicitante,id_usuario_solicitado,status_solicitacao,data_solicitacao) VALUES ('$user_session','$user_friend' , 0 , '$data')"; //status solicitação / 0 = aguardando solicitacao / 1= solicitacao aceita / 2 = solicitacao recusada
		
		mysql_query($solicitacao) or die (mysql_error());
		
		echo "<script type='text/javascript' language='javascript'>alert ('Solicitação Enviada , Aguarde Aprovação');window.location.href='timeline.php'</script>";
		
		}
		
		else {
			
			echo "<script type='text/javascript' language='javascript'>alert ('Você não pode adicionar a si mesmo.');window.location.href='timeline.php'</script>";
			
			}// primeiro if
		
		
		
		
		
		
		
		

	
	
	

	

?>