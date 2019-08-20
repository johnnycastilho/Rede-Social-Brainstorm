<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "brainstorm";

$conection = mysql_connect ($server,$user,$password);
mysql_select_db ($database , $conection);


?>