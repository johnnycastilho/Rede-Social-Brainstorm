<?php

	include ('conectiondb.php');
	
	session_start();
	
	unset($SESSION['usuario']);
	unset($SESSION['validacao']);
	
	session_destroy();
	
	header('location:home.php');

?>