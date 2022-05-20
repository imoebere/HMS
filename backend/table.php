<?php
include 'connect.php';
$admin = mysql_query('create table if not exists admin(admin_id int not null primary key auto_increment,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create admin table'.mysql_error());
					if($admin ){
						echo 'Admin table successfully <br/>';
					}
$select_Admin_table = mysql_query("select * from admin where
	                    username = 'admin' and password ='admin'")or die('could not select from Admin table'.mysql_error());
	$check_row = mysql_num_rows($select_Admin_table);
	if($check_row<1)
	{
		$admin_insert = mysql_query("insert into admin values('','Admin','Admin',now())")or
		 die ('could not insert into Admin table'.mysql_error());
	}
$pharmacy = mysql_query('create table if not exists pharmacy(id int not null primary key auto_increment,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create admin table'.mysql_error());
					if($pharmacy ){
						echo 'pharmacy table successfully <br/>';
					}
$select_pharmacy_table = mysql_query("select * from pharmacy where
	                    username = 'pharm' and password ='pharm'")or die('could not select from pharmacy table'.mysql_error());
	$check = mysql_num_rows($select_pharmacy_table);
	if($check<1)
	{
		$pharmacy_insert = mysql_query("insert into pharmacy values('','pharm','pharm',now())")or
		 die ('could not insert into pharmacy table'.mysql_error());
	}
$doctor_reg = mysql_query('create table if not exists doctor_reg(doc_id int not null primary key auto_increment,
					surname varchar(50) not null,
					firstname varchar(50) not null,
					othername varchar(50) not null,
					phone varchar(15) not null,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create doctor table'.mysql_error());
		if($doctor_reg ){
			echo 'doctor reg table successfully<br/>';
		}
$rec_reg = mysql_query('create table if not exists rec_reg(rec_id int not null primary key auto_increment,
					surname varchar(50) not null,
					firstname varchar(50) not null,
					othername varchar(50) not null,
					phone varchar(15) not null,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create reception table'.mysql_error());
		if($rec_reg ){
			echo 'reception registration table successfully<br/>';
		}
$mid_reg = mysql_query('create table if not exists mid_reg(mid_id int not null primary key auto_increment,
					surname varchar(50) not null,
					firstname varchar(50) not null,
					othername varchar(50) not null,
					phone varchar(15) not null,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create midwife table'.mysql_error());
		if($mid_reg ){
			echo 'midwife registration table successfully<br/>';
		}
$doctor = mysql_query('create table if not exists doctor(doc_id int not null primary key auto_increment,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create doctor table'.mysql_error());
		if($doctor ){
			echo 'doctor table successfully<br/>';
		}
$midwife = mysql_query('create table if not exists mid_wife(mid_id int not null primary key auto_increment,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create midwife table'.mysql_error());
		if($midwife ){
			echo 'midwife table successfully<br/>';
		}
$reception = mysql_query('create table if not exists reception(rec_id int not null primary key auto_increment,
					username varchar(70) not null,
					password varchar (70) not null,
					datess datetime)') or die('could not create reception table'.mysql_error());
		if($reception ){
			echo 'reception table successfully<br/>';
		}
$patient = mysql_query('create table if not exists patient(pat_id int not null primary key auto_increment,
					patient_name varchar(200) not null,
					sex varchar (7) not null,
					DOB varchar (20) not null,
					status varchar (10) not null,
					state varchar (20) not null,
					lga varchar(50) not null,
					nationality varchar (50) not null,
					religion varchar (20) not null,
					address varchar (200) not null,
					phone varchar (15) not null,
					nok_name varchar(200) not null,
					nok_sex varchar (7) not null,
					relationship varchar (50) not null,
					nok_state varchar (20) not null,
					nok_email varchar(30) not null,
					nok_phone varchar (15) not null,
					nok_address varchar (200) not null,
					cardiac varchar (10) not null,
					kidney varchar (10) not null,
					hypertension varchar (10) not null,
					sti varchar (10) not null,
					sickle varchar (10) not null,
					asthma varchar (10) not null,
					eplepay varchar (10) not null,
					operation varchar (10) not null,
					blood varchar (10) not null,
					fracture varchar (10) not null,
					pph varchar (10) not null,
					d_c varchar (10) not null,
					etopic varchar (10) not null,
					retained varchar (10) not null,
					vaccum varchar (10) not null,
					caesarean varchar (10) not null,
					smoking varchar (10) not null,
					alcohol varchar (10) not null,
					diabetes varchar (10) not null,
					menstral varchar (20) not null,
					EED varchar (20) not null,
					BP varchar (20) not null,
					LNMP varchar (20) not null,
					gestation varchar (20) not null,
					complication varchar (20) not null,
					vomit varchar (10) not null,
					fever varchar (10) not null,
					loss varchar (10) not null,
					diarrhoea varchar (10) not null,
					cough varchar (10) not null,
					other varchar (10) not null,
					vomiting varchar (10) not null,
					bleed varchar (10) not null,
					height varchar (20) not null,
					weight varchar (20) not null,
					pulse varchar (20) not null,
					temperature varchar (20) not null,
					vulva varchar (10) not null,
					vagina varchar (10) not null,
					uterus varchar (10) not null,
					cervix varchar (10) not null,
					bladder varchar (10) not null,
					ovaries varchar (10) not null,
					card_no varchar(10) not null,
					datess datetime)') or die('could not create patient table'.mysql_error());
		if($patient){
			echo 'patient table successfully<br/>';
		}
$doc_report = mysql_query('create table if not exists doc_report(id int not null primary key auto_increment,
					card_no varchar(10) not null,
					report varchar (200) not null,
					datess datetime)') or die('could not create patient table'.mysql_error());
		if($doc_report){
			echo 'doctor report table successfully';
		}

?>