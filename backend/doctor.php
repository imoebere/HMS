<?php
include "connect.php";
if(isset($_POST['sub']))
{
	$username=$_POST['username'];
        $password=$_POST['password'];
		$select= "SELECT * FROM doctor_reg WHERE username='$username' AND password='$password'";
	$query=mysql_query($select);
	$num = mysql_num_rows($query);
	if ($num > 0){
		$insert= mysql_query("insert into doctor values(' ','$username','$password',now())")or 
		die("could not insert into reception table".mysql_error());
		session_start();
		$_SESSION['red'] = $rec_id;
		 header ('location: doc_report.php') ;
		
	}else{
        echo "<script >alert('Incorrect E-mail or Password')</script>" ;
		 echo "<script >location('doctor.php')</script>" ;
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
	<h1>LOGIN AS DOCTOR</h1>
		<form action="" method="post" >
		USERNAME:<input type="text" name="username" placeholder="ENTER YOUR USERNAME:"/><br>
		<br/>
		PASSWORD:<input type="password" name="password" placeholder="ENTER YOUR PASSWORD:"/><br>
		       </br>
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