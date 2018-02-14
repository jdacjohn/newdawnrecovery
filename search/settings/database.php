<?php
//  DEV BOX SETTINGS
//	$database="sph_newdawn";
//	$mysql_user = "newdawn_up";
//	$mysql_password = "br4w!3r"; 
//	$mysql_host = "192.168.1.197";
//  PROD SERVER SETTINGS
	$database="newdawn8_sph";
	$mysql_user = "newdawn8_up";
	$mysql_password = "br4w!3r"; 
	$mysql_host = "localhost";
	
	$mysql_table_prefix = "";



	$success = mysql_pconnect ($mysql_host, $mysql_user, $mysql_password);
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db ($database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

