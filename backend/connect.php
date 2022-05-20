<?php
$sql = mysql_connect ('localhost','root','') or die ('could to connect'.mysql_error());
$select_create = mysql_select_db('ante_natal',$sql);
?>