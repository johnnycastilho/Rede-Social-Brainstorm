<?php

	include ("conectiondb.php");
	
	$busca = "SELECT cod_grupo,id_usuario_convidado,status_convite FROM convite_usuario WHERE id_usuario_convidado = '$_SESSION[id]' AND status_convite = 0";
	
	$query = mysql_query($busca);
	
	
	while ($array = mysql_fetch_array($query)) {
		
				$select = "SELECT cod_grupo,nome_grupo FROM grupo WHERE cod_grupo = '$array[cod_grupo]'";
				
				$query2 = mysql_query($select);
				
				$nome = mysql_result($query2,0,'nome_grupo');
				$cod_grupo = mysql_result($query2,0,'cod_grupo');
				
				
				echo "
											<div id='solicit_friend'>
                                   				<p>Você foi Convidado à participar do Grupo <br>$nome</p>
												<form action='confirm_solicit_grupo.php' method='post'>
												<input type='hidden' name='cod_grupo' value='$cod_grupo' />
												<input type='hidden' name='id_logado' value='$_SESSION[id]' />
												<input type='submit' name='send_confirm' class='accept' value='Aceitar'	/>
												<input type='submit' name='send_denied' class='denied' value='Recusar'	/>										
												</form>
                                                
                                             </div>";
		
		
		
		
		}

?>