<?php

include ("conectiondb.php");


$query = mysql_query("SELECT anexo_postagem,data_postagem FROM postagem WHERE id_usuario = '$id_user'");



while ($array = mysql_fetch_array($query) or die (mysql_error())) {
	
			
			
			$exp_anexo = explode ("/" , $array['anexo_postagem']);
			
			$exp_data = explode ("-" , $array['data_postagem']);
				
			
			
					
			if ($array['anexo_postagem'] == NULL) {
				echo "";
			}
			
			else {
				
				echo "<div id='file'>                   
                    <input type='checkbox' name='dir_files[]' value='$exp_anexo[1],' class='check' /><div class='name_file'><a href='$array[anexo_postagem]' target='_blank'>$exp_anexo[1]</a></div><div class='data'>$exp_data[2]/$exp_data[1]/$exp_data[0]</div>
                    </div>";
				
				}
	
				
	
	}




?>