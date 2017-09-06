<?php 
$hst_db= "localhost";
$nam_db= "UNIVERSIDAD";
$use_db= "root";
$pas_db= "a";
$con_db= mysql_pconnect($hst_db, $use_db,$pas_db)or trigger_error(mysql_error(), E_USER_ERROR);
mysql_select_db($nam_db,$con_db);
session_start();
?>