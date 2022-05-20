<?php
	session_start();
	if(isset($_SESSION['don']))
	{
		$kill = $_SESSION['don'];
		header('location:index.php');	
	}
	session_destroy();
?>