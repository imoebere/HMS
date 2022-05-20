<?php 
include 'backend/connect.php';
if(isset($_POST['sub'])){
	$fullname = $_POST['fullname'];
	$sex = $_POST['sex'];
	$DOB = $_POST['DOB'];
	$martial = $_POST['martial'];
	$STATE = $_POST['STATE'];
	$LGA = $_POST['LGA'];
	$NATIONALITY = $_POST['NATIONALITY'];
	$religion = $_POST['religion'];
	$address = $_POST['address'];
	$PHONE = $_POST['PHONE'];
	$nokname = $_POST['nokname'];
	$noksex = $_POST['noksex'];
	$relation = $_POST['relation'];
	$nokstate = $_POST['nokstate'];
	$nokemail = $_POST['nokemail'];
	$nokphone = $_POST['nokphone'];
	$nokaddress = $_POST['nokaddress'];
	$cardiac = $_POST['cardiac'];
	$kidney = $_POST['kidney'];
	$Hyper = $_POST['Hyper'];
	$STI = $_POST['STI'];
	$Sickle = $_POST['Sickle'];
	$Asthma = $_POST['Asthma'];
	$Eplepay = $_POST['Eplepay']; 
	$Operation = $_POST['Operation'];  
	$Blood = $_POST['Blood'];
	$Fracture = $_POST['Fracture'];
	$PPH = $_POST['PPH'];
	$D_C = $_POST['D_C'];
	$Etopic = $_POST['Etopic'];
	$Retained = $_POST['Retained'];
	$Vaccum = $_POST['Vaccum'];
	$Caesarean = $_POST['Caesarean'];      
	$Smoking = $_POST['Smoking'];
	$Alcohol = $_POST['Alcohol'];
	$Diabetes = $_POST['Diabetes'];
	$menstral = $_POST['men'];
	$edd = $_POST['edd'];
	$BP = $_POST['BP'];
	$LNMP = $_POST['LNMP'];
	$Gestation = $_POST['Gestation'];
	$complication = $_POST['complication'];
	$Vomit = $_POST['Vomit'];
	$Fever = $_POST['Fever'];
	$loss = $_POST['loss'];
	$Diarrhoea = $_POST['Diarrhoea'];
	$Cough = $_POST['Cough'];
	$Others = $_POST['Others'];
	$vomiting = $_POST['vomiting'];
	$Bleeding = $_POST['Bleeding'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$pulse = $_POST['pulse'];
	$temperature = $_POST['temperature'];
	$Vulva = $_POST['Vulva'];
	$Vagina = $_POST['Vagina'];
	$Uterus = $_POST['Uterus'];
	$Cervix = $_POST['Cervix'];
	$Bladder = $_POST['Bladder'];
	$Ovaries = $_POST['Ovaries'];
	$card_no = (chr(rand(65,90))).rand(1234,10000).(chr(rand(65,90)));
$insert = mysql_query("insert into patient 
values('','$fullname','$sex','$DOB','$martial','$STATE','$LGA','$NATIONALITY','$religion','$address','$PHONE','$nokname',
'$noksex','$relation','$nokstate','$nokemail','$nokphone','$nokaddress','$cardiac','$kidney','$Hyper','$STI','$Sickle','$Asthma','$Eplepay','$Operation','$Blood','$Fracture','$PPH','$D_C','$Etopic','$Retained','$Vaccum','$Caesarean','$Smoking','$Alcohol','$Diabetes','$menstral','$edd','$BP','$LNMP','$Gestation','$complication','$Vomit',
'$Fever','$loss','$Diarrhoea','$Cough','$Others','$vomiting','$Bleeding','$height','$weight','$pulse','$temperature','$Vulva','$Vagina','$Uterus','$Cervix','$Bladder','$Ovaries','$card_no',now())");

if (!@$insert) {
                 ?><script type="text/javascript">alert("PATIENT RECORD WAS NOT SUCEESSFULL INSERT");</script>
				 
        <?PHP

                                        }else{
                                            //$_SESSION['pin']=$payment_id;
											session_start();
		$_SESSION['red'] = $card_no;
                                            ?>
											<?php
                                           
                                        
                           
        echo "<div role='alert' class='alert alert-success' >
    <button type='button' class='close'  aria-label='Close'><span aria-hidden='false'>×</span></button><span>Student Registration Successful! $card_no</span></div>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>

<style>
 #nav, li, a{
	list-style: none;
	text-decoration: yellow;
	color: red;
	display: inline;
	word-spacing: 100px;
	background: rgba(0,1 , 0, 0,9);
	}
	#container{
		width: 100%;
		height: 795px;
		border-radius:5px;
		margin-top: 5px;
	}
	 #personal{
		width: 29.5%;
		height: 800px;
		float: left;
	}
	#health{
		width: 70%;
		height: 800px;
		float: right;
	}
	h3{
		font-family:Ariel Black;
		color: black;
		text-shadow: 1px 1px 1px black, 1px 1px 1px 000ffff;
	}
	#cover{
	width: 100%;
	background-color:seablue;
	
	}
	#illness{
	width:33%;
	float: left;
	}
	#surgry{
	width:33%;
	float:right;
	}
	#BOS{
	width:33%;
	float: right;
	}
	#pregnancy
	width:30%;
	}
	#exam{
	width:70%;
	background-color:green;
	}
	#submit{
	width: 60%;
	height:100px;
	float:left;
	}
	#text{
		width:30px;
	}
	
	
</style>
</head>
<body bgcolor="white">
<center> 
<ul id="nav">

<br>
     
    <img src="images/H.jpg" height="200px" width="100%"/>
	 
	     <br>
		 </br>
	     
		 
	<li><a href="home.html">HOME</a></li>
	<li><a href="Registration.html">REGISTRATTION</a></li>
	<li><a href="verification.html">VERIFICATION</a></li>
</ul>
</CENTER>
   <br/>
   <center><h2>ANTE-NANTAL CARD</h2></center>
<div id="container">
		<div id="personal"><h3> PERSONAL INFORMATION</h3><hr/>
		<form action="" method="post" >
		FULL NAME:<input type="text" name="fullname" required /><br>
		<br/>
		SEX:<select name="sex">
		<option>select sex...</option>
			<option>MALE</option>
			<option>FEMALE</option>
			</select>
		<br>
		<br/>
		DATE OF BIRTH:<input type="DATE" name="DOB" required /><br>
		       <br/>
			   
			   MARTIAL STATUS:<select name="martial">
		<option>select martial...</option>
			<option>SINGLE</option>
			<option>MARRIED</option>
			<option>DIVORCE</option>
			</select>
			<br>
			<br/>
			STATE:<input type="text" name="STATE" required /><br>
		<br/>
		L.G.A:<input type="text" name="LGA" required /><br/>
                       <br>
		NATIONALITY:<input type="text" name="NATIONALITY" required /><br/>
		<br/>
		    RELIGION:<select name="religion">
		<option>select religion...</option>
			<option>CHRISTAIN</option>
			<option>MUSLEM</option>
			<option>OTHERS</option>
			</select>
			<br>
			<br/>
			ADDRESS: <textarea name="address" row="20"></textarea>
			<br>
			<br/>
			PHONE NUMBER:<input type="text" name="PHONE" required /><br>
			      <br>
					   <br/>
					 <img src="images/p0.jpg" width="100%" height="200px" />
		<h3> NEXT OF KIN INFORMATION</h3><hr/>
		<br/>FULL NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nokname" required /><br>
		<br/>
		<select name="noksex">SEX:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<option>select sex...</option>
			<option>MALE</option>
			<option>FEMALE</option>
			</select>
		<br>
		<br/>
		RELATIONSHIP:&nbsp;&nbsp;<input type="text" name="relation" required /><br/>
		                   <br/>
STATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nokstate" required /><br/>
			     <br/>
			EMAIL :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="nokemail" required /><br/>
			              <br/>
			PHONE NUMBER:<input type="text" name="nokphone" required /><br/>
			        <br/>
			ADDRESS:&nbsp;&nbsp;<textarea name="nokaddress" row="20"></textarea>
			<br/>
			<br/>	
	</div>
		<div id="health"><h3><center> HEALTH INFORMATION</center></h3><hr/>
		<div id="cover">
			<fieldset>
			<legend>previous illness</legend>
			<div id="illness">
			MEDICAL HISTORY<br/>
            Cardiac disease: <input type="text" id="text" name="cardiac"/> <br/>
			kidney disease:&nbsp;&nbsp;<input type="text" id="text" name="kidney"/><br/>
			Hypertension:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="text" name="Hyper"/><br/>
			STI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="text" name="STI"/><br/>
			Sickle cell:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="text" name="Sickle"/><br/>
			Asthma:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="text" name="Asthma"/><br/>
			Eplepay:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="text" name="Eplepay"/><br/>
			</div>
            
			<div id="surgry">
			Surgical History <br/>
            Operation: &nbsp;&nbsp;<input type="text" id="text" name="Operation"/> <br/>
			Blood Transfusion:&nbsp;&nbsp;<input type="text" id="text" name="Blood"/><br/>
			Fracture of Pelvic:<input type="text" id="text" name="Fracture"/><br/>
           
			</div>
			<div id="OBS">
			<abbr title="Obstetrics & Gynecology">OBS/GYN</abbr><br/>
		<abbr title="Postpartum Hemorrhage">PPH:</abbr>&nbsp;&nbsp;<input type="text" id="text" name="PPH"/> <br/>
			<abbr title="dilation & Curettage">D&C: </abbr>&nbsp;&nbsp;<input type="text" id="text" name="D_C"/> <br/>
			Etopic Pregnancy: &nbsp;&nbsp;<input type="text" id="text" name="Etopic"/> <br/>
			Retained Placenta: &nbsp;&nbsp;<input type="text" id="text" name="Retained"/> <br/>
			Vaccum Extraction: &nbsp;&nbsp;<input type="text" id="text" name="Vaccum"/> <br/>
			Caesarean Section: &nbsp;&nbsp;<input type="text" id="text" name="Caesarean"/> <br/>
             
			</div>
			<br/>
			<div id="exam">
			Social History<br/>
			Smoking: &nbsp;&nbsp;<input type="text" id="text" name="Smoking"/> <br/>
			Alcohol: &nbsp;&nbsp;<input type="text" id="text" name="Alcohol"/> <br/>
			Diabetes: &nbsp;&nbsp;<input type="text" id="text" name="Diabetes"/> <br/>
			<div id="surgry">Menstral& Contraceptive History
			<br/>
		     <textarea name="men" row="20"></textarea></div>
			</div>
			  </div>
			  <div id="cover">
			<fieldset>
			<legend>present pregnancy</legend>
			<div id="illness">
			<abbr title="EXPECTED DELIVERY DATE">EDD:</abbr><br/><input type="text" name="edd" /><br><br/>
	   <abbr title="BLOOD PRESURE">BP:</abbr><br/><input type="text" name="BP" /><br><br/>
    first Day of LNMP :<br/><input type="text" name="LNMP" /><br><br/>
    Gestation Period :<br/><input type="text" name="Gestation" /><br><br/>
	 Complications:<br/><input type="text" name="complication" /><br><br/>
	     <br/>
         <br/>
			</div>
			<div id="OBS">
			<h4>Has any of the followng been present for one month</h4>
	  Vomiting: &nbsp;&nbsp;<input type="text" id="text" name="Vomit"/> <br/>
	  Fever: &nbsp;&nbsp;<input type="text" id="text" name="Fever"/> <br/>
	  Weight loss: &nbsp;&nbsp;<input type="text" id="text" name="loss"/> <br/>
	  Diarrhoea: &nbsp;&nbsp;<input type="text" id="text" name="Diarrhoea"/> <br/>
	  Cough: &nbsp;&nbsp;<input type="text" id="text" name="Cough"/> <br/>
	  Others: &nbsp;&nbsp;<input type="text" id="text" name="Others"/> <br/>
			</div>
			<div id="surgry">
			<p>Hospitalized for:</p>
	  vomiting: &nbsp;&nbsp;<input type="text" id="text" name="vomiting"/> <br/>
	  Bleeding: &nbsp;&nbsp;<input type="text" id="text" name="Bleeding"/> <br/>
	  <br><br/>
			</div>
			<br/>
			  </div>
			   <div id="cover">
			<fieldset>
			<legend>physical exam</legend>
			<div id="illness">
Height: <br/><input type="text" name="height" /><br/>
Weight: <br/><input type="text" name="weight" /><br/>
Pulse:<br/> <input type="text" name="pulse" /><br>
Temperature:<br/> <input type="text" name="temperature" /><br>

			</div>
			<div id="OBS">
		<p>pelvic Examination</p>
Vulva: &nbsp;&nbsp;<input type="text" id="text" name="Vulva"/>
Vagina: &nbsp;&nbsp;<input type="text" id="text" name="Vagina"/>
Uterus: &nbsp;&nbsp;<input type="text" id="text" name="Uterus"/>
Cervix: &nbsp;&nbsp;<input type="text" id="text" name="Cervix"/>
Bladder: &nbsp;&nbsp;<input type="text" id="text" name="Bladder"/>
Ovaries: &nbsp;&nbsp;<input type="text" id="text" name="Ovaries"/>
			</div>
			  </div>
			  
			     <br/>
<div id="submit">

<input type="submit" name="sub" value="REGISTER"/>&nbsp;<input type="Reset" name="Reset"/>
		</form>
</div>

</div>
</body>
</html>