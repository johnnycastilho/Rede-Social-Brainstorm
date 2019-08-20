<?php

	include ("conectiondb.php");
	
	$busca = "SELECT id_usuario_solicitado,id_usuario_solicitante,status_solicitacao FROM lista_amigo WHERE id_usuario_solicitado = '$_SESSION[id]' AND status_solicitacao = 0";
	
	$query = mysql_query($busca);
	
	
	while ($array = mysql_fetch_array($query)) {
		
				$select = "SELECT id_usuario,nome_usuario FROM usuario WHERE id_usuario = '$array[id_usuario_solicitante]'";
				
				$query2 = mysql_query($select);
				
				$nome = mysql_result($query2,0,'nome_usuario');
				$id = mysql_result($query2,0,'id_usuario');
				
				
				echo "
											<div id='solicit_friend'>
                                   				<p>$nome<br>Enviou um pedido de amizade para você</p>
												<form action='confirm_solicit.php' method='post'>
												<input type='hidden' name='id_amigo' value='$id' />
												<input type='hidden' name='id_logado' value='$_SESSION[id]' />
												<input type='submit' name='send_confirm' class='accept' value='Aceitar'	/>
												<input type='submit' name='send_denied' class='denied' value='Recusar'	/>										
												</form>
                                                
                                             </div>";
		
		
		
		}

?>