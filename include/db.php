<?php
/********************************************
** CONEXAO COM O DATABASE
*********************************************/
$db_db      = 'ensinando_git';
$db_host    = 'localhost';
$db_port    = '3306';
$db_user    = 'root';
$db_pwd     = 'root';


$conexao = mysql_connect("$db_host:$db_port",$db_user,$db_pwd);
mysql_select_db($db_db,$conexao);

?>