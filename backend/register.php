<?php
    /*session_start();

    if(!(isset($_SESSION['id']))){
        header("location:index.php");
    }*/
?>

<?php
 include "connect.php";
if(isset($_POST['register']))
{
	 $username=$_POST['uname'];
	$select= "select * from rec_reg where username = '$username'";
	$query=mysql_query($select);
	$num = mysql_num_rows($query);
	if ($num>0){
		echo '<script type="text/javascript">alert("the username already exist use another")</script>'.'<br>';
	}else{
        $surname=$_POST['sname'];
        $firstname=$_POST['fname'];
		$othername=$_POST['Oname'];
		$phone = $_POST['phone'];
        $username=$_POST['uname'];
		$phone = $_POST['phone'];
		$password = 'REC'.rand(1000,100000);
$insert= mysql_query("insert into rec_reg values('','$surname','$firstname','$othername','$phone','$username','$password', now())")or die("could not insert into reg table".mysql_error());
	
	if (!@$insert) {
                 ?><script type="text/javascript">alert("STAFF RECORD WAS NOT SUCEESSFULL INSERT");</script>
				 
        <?PHP

                                        }else{
                                            //$_SESSION['pin']=$payment_id;
											session_start();
		$_SESSION['don'] = $password;
             
        echo "<div role='alert' >
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><span>Staff Registration Successful! YOUR PASSWORD: $password</span></div>";
    }
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff_reg</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/student-login-form.css">
    <link rel="stylesheet" href="../assets/css/student-login-form1.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Registration-Form.css">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript"> 

         $(document).ready(function() { 
               $('#alert').slideToggle(5000); 
         }); 
      </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">ASABA GENERAL HOSPITAL <br/>ANTE-NATAL RECORD SYSTEM </h4></div>
            <div class="col-md-10 col-md-offset-1">
                <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button data-toggle="collapse" data-target="#navcol-2" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="nav navbar-nav">
                <li role="presentation"><a href="../home.php">Back to homepage</a></li>
                <li class="active" role="presentation"><a href="register.php">Staff registration </a></li>
            </ul>
        </div>
    </div>
</nav>
            </div>
            <div class="col-md-12">
                <div class="row register-form">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-horizontal custom-form"  method="post">
                            <h1>Receptionist/Nurse Registration Form</h1>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Surname </label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" name="sname" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">First name </label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" name="fname" type="text" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Other name </label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" name="Oname" type="text" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="pawssword-input-field">Phone number </label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" name="phone" type="tel" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Username </label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" name="uname" type="text" required>
                                </div>
                            </div>
                     
                    
                         
               <button class="btn btn-default btn-block submit-button" name="register" type="submit">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>