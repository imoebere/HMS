<?php
include('connect.php');
if(isset($_POST['sub']))
{
	$username = $_POST['username'];
	
	$password = $_POST['password'];	
	
	$select_login = mysql_query("select * from pharmacy where username ='$username' and password = '$password'")or
	 die('could not select from the pharmacy table'.mysql_error());
	$count_select = mysql_num_rows($select_login);
	while($fetch = mysql_fetch_assoc($select_login))
	{
		$id = $fetch['id'];	
	}
	if($count_select>0)
	{
		session_start();
		$_SESSION['don'] = $id;
		header('location:view.php');
			
	}
	if($count_select<0)
	{
		echo 'Login incorrect';	
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>index</title>
	<style>
	#container{
		width: 70%;
		height: 500px;
		border:1px black thin;
	}
	#body{
	width:100%;
	height: 300px;
	}
	 #gallery{
		width: 35%;
		height: 300px;
		float: left;
	}
	#log{
		width: 30%;
		height: 300px;
		float:left;
		
	}
	#gal{
		width: 35%;
		height: 300px;
		float: right;
	}
	h1{
		font-family: Arial Black;
		font-size: 2em;
		color: #fff;
		background-color:blue;
		text-shadow: 3px 2px 4px red, 3px 2px 4px red;
	}
	#footer{
	width:100%;
	height: 100px;
	background-color:blue;
	}
	</style>
</head>
<body>
<center>
<div id="container">

<h1><center>  ASABA GENERAL HOSPITAL <br/>ANTE-NATAL RECORD SYSTEM </center></h1>
 <div id="body">
	<div id="gallery">
		<img src="../images/LA.jpg" alt="" height="280px" width="100%"/>
	</div>
	<div id="log">
	<h1>LOGIN AS PHARMACY</h1>
		<form action="" method="post" >
		USERNAME:<input type="text" name="username" placeholder="USERNAME:"/><br>
		PASSWORD:<input type="password" name="password" placeholder="PASSWORD:"/><br>
		<input type="submit" name="sub" value="LOGIN"/>
		</form>
	</div>
	<div id="gal">
		<img src="../images/H.jpg" alt="" height="280px" width="100%"/>
	</div>
 </div>
	<div id="footer"> all right reserved &copy <?php date('Y'); ?> <br/></div>
</div>
</body>
</html>