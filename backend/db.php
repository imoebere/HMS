<?php
mysql_connect ('localhost','root','') or die ('could to connect'.mysql_error());
$create = mysql_query('CREATE DATABASE IF NOT EXISTS ante_natal') or die ('unable to create databases'.mysql_error());
if($create){
	echo 'DATABASE CREATE SUCCESSFULLY';
}else{
	echo 'DATABASE NOT CREATED';
}

?>