<?php
	$host="localhost";
	$dbuser="root";
	$password="abcd1234";
	$dbname="project_it";
	mysql_connect($host,$dbuser,$password) or die ("Not Connect Database");
	mysql_select_db($dbname);
	mysql_query("SET NAMES 'utf8'");
?>