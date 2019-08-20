<?php

	include ("conectiondb.php");
	
	$busca_pc = "SELECT * FROM pesquisa_campo";
	
	$query_pc = mysql_query($busca_pc);
	
	while ($array_pc = mysql_fetch_array($query_pc)) {
		
			echo "
			
				<div id='pesquisa'>
                           
                           	<h1>$array_pc[titulo_pc]</h1>
                            
                            <p><textarea disabled>$array_pc[descricao_pc]</textarea></p>
                            
                            <a href='$array_pc[link_pc]' target='_blank' class='ir_pesquisa'>Responder</a>
                            <img src='images/sep_dep.png' class='sombra' /> 
                           
                           		
                           </div>
			
			
			
			";
		
		
		
		}

?>