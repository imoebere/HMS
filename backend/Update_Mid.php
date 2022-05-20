<?php
    session_start();

   // if(!(isset($_SESSION['id']))){
       // header("location:index.php");
    //}
?>
                            
<?php
            include "connect.php";
			 if(isset($_POST['check'])){
            $in=$_POST["password"];
			$_SESSION['tmp'] = $in;

$sql=mysql_query("SELECT * FROM mid_reg WHERE password='$in'")or die("could not select staff table".mysql_error());
			//mysql_query("SELECT * FROM student_record WHERE admission_num='$in' LIMIT 1");
                                                                       
            $num=mysql_num_rows($sql);

            if($num >= 1){
$rows=mysql_fetch_array($sql);
               $surname=$rows['surname'];
                $firstname=$rows['firstname'];
				$othername = $rows['othername'];
				$phone = $rows['phone'];
                $username=$rows['username'];
    

            }
            else{
                echo "<div role='alert' class='alert alert-info' id='alert' >
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><span>No Records Found!</span></div>";
            }
        }
		if(isset($_POST["update"])){
            $sname=$_POST["sname"];
            $fname=$_POST["fname"];
			$Oname=$_POST["Oname"];
			$phone=$_POST["phone"];
			$user=$_POST["user"];
            $a=$_SESSION['tmp'];
$sql=mysql_query ("UPDATE mid_reg SET surname='$sname', firstname='$fname', othername='$Oname', phone='$phone', username='$user'  WHERE password='$a'") or die("Failed to update record!");
            echo "<div role='alert' class='alert alert-success' >
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='false'>×</span></button><span>Staff Record Update Successful!</span></div>";
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/student-login-form.css">
    <link rel="stylesheet" href="../assets/css/student-login-form1.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Registration-Form.css">

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript"> 

         $(document).ready(function() { 
               $('#alert').slideToggle(5000); 
         }); 
        $(document).ready(function(){
            $("#edit").click(function(e){
                $("#profile-form input, textarea").removeAttr("readonly");
                $("#update").prop('disabled', false);
            });
        });
    </script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                        <h4 class="text-center">ASABA GENERAL HOSPITAL <br/>ANTE-NATAL RECORD SYSTEM </h4></div>
            <div class="col-md-10 col-md-offset-1" id="nav">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li role="presentation"><a href="../home.php">Home </a></li>
                                </li>
 <li role="presentation"><a href="Update_Doc.php">Doctor account</a>
 <li role="presentation"><a href="Update_Mid.php">Midwife account</a>
 <li role="presentation"><a href="Update_Rec.php">Receptionist account</a>
                                 
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="row" style="margin: 10px; padding: 20px; background-color: #fff;">
    <div class="col-md-12">
        <h1 class="text-center">Midwife Profile</h1></div>
        <div class="col-md-6 col-md-offset-3">
                        <form method="POST" name="form1">
                            <div class="form-group">
     <input type="text" name="password" placeholder="Enter staff password" class="form-control input-lg" />
       <button class="btn btn-primary" name="check" type="submit" style="margin: 10px;">Submit </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 col-md-offset-4">
                        <form id="profile-form" name="form2" method="POST">
                   <h3 class="text-muted text-center">Midwife Information Update</h3>
                            <div class="form-group">
                                <label class="control-label">Surname </label>
                                <input type="text" name="sname" required maxlength="20" readonly class="form-control" value="<?php if(isset($_POST['check'])){ echo $surname;}else{ echo "";}?>" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">First name</label>
                                <input type="text" required name="fname" readonly class="form-control" value="<?php if(isset($_POST['check'])){ echo $firstname;}else{ echo "";}?>" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Other name</label>
                                <input type="text" required name="Oname" readonly class="form-control" value="<?php if(isset($_POST['check'])){ echo $othername;}else{ echo "";}?>" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone No</label>
                                <input type="text" required name="phone" readonly class="form-control" value="<?php if(isset($_POST['check'])){ echo $phone;}else{ echo "";}?>" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Username </label>
 <input type="text" name="user" required readonly class="form-control" value="<?php if(isset($_POST['check'])){ echo $username;}else{ echo "";}?>" />
                            </div>
           <button class="btn btn-primary" type="button" id="edit">Edit </button>
          <button class="btn btn-success" type="submit" disabled="disabled" id="update" name="update">Update </button>   
                        </form>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
    <footer id="footer">
        <p class="text-center text-muted">Copyright &copy; <?php echo date('Y'); ?> antel-natal </p>
    </footer>
</body>

</html>