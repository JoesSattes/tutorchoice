<?php
/*
* set var
*/
$cfHost = "mysql.hostinger.in.th";
$cfUser = "u480466230_verfy";
$cfPassword = "sawada27";
$cfDatabase = "u480466230_verfy";
 
/*
* connection mysql
*/
$meConnect = mysql_connect($cfHost,$cfUser,$cfPassword) or die("Error conncetion mysql...");
$meDatabase = mysql_select_db($cfDatabase);
mysql_query("SET NAMES UTF8");
?>