<?php
include "connect.php";
$records_per_page =25;
	  
	  (!isset($_GET['start']))? $start = 0 : $start = $_GET['start'];

	  
	    
		$select_count = mysql_query("select count(*) from rec_reg")or die("could not select all".mysql_error());
		$rows = mysql_fetch_row($select_count);
		$total_records = $rows[0];
		
		if(($total_records>0) && ($start<$total_records)){
		$select_pin = mysql_query("select * from rec_reg limit $start, $records_per_page")or die ("could not select from reg table".mysql_error());
		$num = mysql_num_rows($select_pin);
		while($fetch = mysql_fetch_array($select_pin))
		{
				$rec_id[]=$fetch['rec_id'];
			$surname[]=$fetch['surname'];
                $firstname[]=$fetch['firstname'];
				$othername[] = $fetch['othername'];
				$phone[] = $fetch['phone'];
                $username[]=$fetch['username'];
				$password[]=$fetch['password'];
				$datess[] = $fetch['datess'];
			
				
		} 
if(isset($_POST['delete']))
				{
	$check = $_POST['check'];
	$_SESSION['tmp'] = $check;

$sql=mysql_query("SELECT * FROM rec_reg WHERE password='$check'")or die("could not select staff table".mysql_error());
			//mysql_query("SELECT * FROM student_record WHERE admission_num='$in' LIMIT 1");
                                                                       
            $num=mysql_num_rows($sql);
$a=$_SESSION['tmp'];
$del_fish = mysql_query("delete from rec_reg where password= '$a'") or die("cannot delete this item- ".mysql_error());
				}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="../m_gen_admin_jquery_lib.js"></script>
<script language="javascript" src="../m_gen_view.js"></script>
<style type="text/css">
.wrapper {
	float: left;
	width: 100%;
}
.table {
	float: left;
	width: 100%;
	text-align: center;
}
.next {
	float: left;
	width: 100%;
}
.new {
	float: left;
	width: 50%;
}
.pop {
	float: left;
	height: 35px;
	width: 100%;
}
.jquery_practise {
	float: left;
	width: 100%;
	font-size: 18px;
	color: #900;
}
</style>
</head>

<body>
<div class="wrapper">
<table border="0" class="table">
<tr>
<th>SN</th><th>Surname</th><th>First Name</th><th>Other Name</th><th>Phone No</th><th>UserName</th><th>Password</th><th>Date/Time</th>
</tr>
<?php for($we=0;$we<$num;$we++){ ?>
<tr>
<td><?php echo $we+1;?></td>
<td><?php echo $surname[$we]; ?></td>
<td><?php echo $firstname[$we]; ?></td>
<td><?php echo $othername[$we]; ?></td>
<td><?php echo $phone[$we]; ?></td>
<td><?php echo $username[$we]; ?></td>
<td><?php echo $password[$we]; ?></td>
<td><?php echo $datess[$we]; ?></td>
<!--<td><a class="more_all_mem" href="reg_out.php?del_fsh_passer=<?php //echo $rec_id[$we];?>">Delete Item</a></td>-->
</tr>
<?php  }}?>
</table>
<form action="" method="post">
ENTER PASSWORD: <input type="text" name="check" />
<input type="submit" name="delete" value="DELETE" />
</form>
		<div class="pop">
<?php
if($start>=$records_per_page)
{
	echo "<a href=".$_SERVER['PHP_SELF']."?start=".($start-$records_per_page).">Previous Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";	
}
if($start+$records_per_page<$total_records && $start>=0)
{
	echo "<a href=".$_SERVER['PHP_SELF']."?start=".($start+$records_per_page).">Next Page</a>";
}
?>
		</div>
</div>
<div class="jquery_practise">
	<div id="someTest"></div>
	
</div>
</body>
</html>