<?php
include "backend/connect.php";
?>
<!DOCTYPE html>
<html>
<head>

<style>
 #nav, li, a{
	list-style: none;
	text-decoration: none;
	color: black;
	display: inline;
	word-spacing: 100px;
	background: rgba(0, , 0, 0,8);
	}
	#container{
		background: #fff;
		width: 70%;
		height: 600px;
		background-color:72f64h;
		border-radius:7px;
		margin-top: 4%;
	}
	#verification{
		 border: 1px blue solid;
		width: 70%;
		height: 600px;
		float: left;
	}

</style>
</head>
<body bgcolor="seablue">
<center> 
<ul id="nav">

<br>
     
    <img src="images/H.jpg" height="260px" width="100%"/><br><br/>
	 
	   
	     
		 
	<li><a href="home.php">HOME</a></li>
	<li><a href="Register.php">REGISTRATTION</a></li>
	<li><a href="verification.php">VERIFICATION</a></li>
</ul>

      <div id="container">
		<div id="Verification"><h3>VERIFY CARD NUMBER</h3><br/>
		<form action="" method="post" >
		VERIFICATION:<input type="text" name="verify" required /><br/><br/>
		                <br />
		<input type="submit" value="submit" name="submit"/><input type="RESET" name="reset" />
        </form>
         <table class="table table-striped" width="500PX" border="1">
                       
                        <tbody>


                            <?php


if(isset($_POST['submit'])) {
$card_no = ($_POST['verify']);

                            $fetch = mysql_query("SELECT * FROM patient WHERE card_no='$card_no'" );


                                while ($row = mysql_fetch_array($fetch)) {


                            ?>
                            <tr><th colspan="7">PATIENT INFORMATION</th></tr>
 <tr><th>NAME</th><th>SEX</th><th>MARITAL STATUS</th><th>ADDRESS</th><th>PHONE</th><th>CARD NO</th><th>DATE/TIME</th>
                            </tr>
                            <tr>
                   
                                <td><?php echo $row['patient_name']?></td>
                                <td><?php echo $row['sex'] ?></td>                                            
                                <td><?php echo $row['status'] ?></td>
                                 <td><?php echo $row['address'] ?></td>
                                  <td><?php echo $row['phone'] ?></td>
                                   <td><?php echo $card_no; ?></td>
                                   <td><?php echo $row['datess']?></td>
                                  </tr>
                                  <tr><th colspan="5">Next Of Kin INFORMATION</th></tr>
 <tr><th>NAME</th><th>RELATIONSHIP</th><th>ADDRESS</th><th>EMAIL</th><th>PHONE</th></tr>
                                  <tr>
                                  <td><?php echo $row['nok_name']?></td>
                                  <td><?php echo $row['relationship'] ?></td>
                                  <td><?php echo $row['nok_address'] ?></td>
                                  <td><?php echo $row['nok_email'] ?></td>
                                  <td><?php echo $row['nok_phone'] ?></td>                                                                               
                             <?php } }?>
                     
                            </tr>
                           
                            <tr></tr>
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
		</div>
		
		</div>
</center>

</body >
</html>