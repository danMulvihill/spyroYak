<?php 
require 'app_config.php';

$cxn=mysql_connect(HOST,USER,PW)
 or die("<p>Could not connect to MySQL: " . mysql_error()."</p>"); 


mysql_select_db(DB_NAME)
	or die("<p>Error selecting the database ".DB_NAME.mysql_error()."</p>");


?> 