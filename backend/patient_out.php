<?php
include "connect.php";
$records_per_page =25;
	  
	  (!isset($_GET['start']))? $start = 0 : $start = $_GET['start'];

	  
	    
		$select_count = mysql_query("select count(*) from patient")or die("could not select all".mysql_error());
		$rows = mysql_fetch_row($select_count);
		$total_records = $rows[0];
		
		if(($total_records>0) && ($start<$total_records)){
		$select_pin = mysql_query("select * from patient limit $start, $records_per_page")or die ("could not select from reg table".mysql_error());
		$num = mysql_num_rows($select_pin);
		while($fetch = mysql_fetch_array($select_pin))
		{
			$pat_id[]=$fetch['pat_id'];
			//$_SESSION['ID']=$pat_id;
			$name[]=$fetch['patient_name'];
                $sex[]=$fetch['sex'];
				$DOB[] = $fetch['DOB'];
				$status[] = $fetch['status'];
                $address[]=$fetch['address'];
				$phone[]=$fetch['phone'];
				$nok_name[]=$fetch['nok_name'];
				$nok_sex[]=$fetch['nok_sex'];                                                  
				$datess[] = $fetch['datess'];
			
				
		} 
if(isset($_GET['del_fsh_passer']))
				{
				//$id=$_SESSION['ID'];
	$pat_id = $_GET['del_fsh_passer'];
$del_fish = mysql_query("delete from patient where pat_id= '$pat_id'") or die("cannot delete this item- ".mysql_error());
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
<td><?php echo $name[$we]; ?></td>
<td><?php echo $sex[$we]; ?></td>
<td><?php echo $DOB[$we]; ?></td>
<td><?php echo $status[$we]; ?></td>
<td><?php echo $address[$we]; ?></td>
<td><?php echo $phone[$we]; ?></td>
<td><?php echo $datess[$we]; ?></td>
<td><a class="more_all_mem" href="patient_out.php?del_fsh_passer=<?php echo $pat_id[$we];?>">Delete Item</a></td>
</tr>
<?php  }}?>
</table>
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