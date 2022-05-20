
<?php
include 'connect.php';
session_start();

?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>

<body
                <div id="page-wrapper">
	<div class="row">
                <!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> SEARCH FOR PATIENT</h1>
            <form action="" method="post">
                <label>ENTER CARD NO</label>
                 <input class="form-control" type="search" name="search" id="search-input"/>
                 <button class="btn btn-primary" type="submit" name="submit">SEARCH </button>
                </form>
		</div>
		<!-- Page Header -->
        </div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>SEARCH RESULT</h3>
					
				</div>
				<div class="panel-body table-responsive">
                    <table class="table table-striped" border="1">
                     
                        <tbody>


                            <?php


if(isset($_POST['submit'])) {
$card_no = ($_POST['search']);
$_SESSION['red'] = $card_no;

                            $fetch = mysql_query("SELECT * FROM patient WHERE card_no='$card_no'" );


                                while ($row = mysql_fetch_array($fetch)) {


                            ?>
                            <tr>
                                <td><?php echo $row['patient_name']?></td>
                                <td><?php echo $row['card_no'] ?></td>
                                </tr>
                                <tr><th colspan="10">PATIENT HEALTH DETAIL</th></tr>
<tr><th>cardiac</th><th>kidney</th><th>hypertension</th><th>STI</th><th>sickle cell</th><th>asthma</th><th>eplepay</th>
<th> operation</th><th>blood transfusion</th><th>fracture of pelvic</th><th>PPH</th><th>D&C </th><th>etopic </th><th>retained</th><th>vaccum </th><th>caesarean section</th><th>smoking</th><th>alcohol</th><th>diabetes </th><th>MENSTRAL</th><th>EED</th><th>BP</th><th>LNMP</th><th>GESTATION</th><th>COMPLICATION</th><th>vomiting</th><th>fever</th><th>wight loss</th><th>diarrhoea </th><th>cough </th><th>other </th><th>bleeding</th></th><th>HEIGHT</th><th>WEIGHT</th><th>PULSE</th><th>TEMPERATURE</th><th>vulva</th><th>vagina </th><th>uterus </th><th>cervix </th><th>bladder</th><th>ovaries</th></tr>
                                <tr>
                                
					
                                <td><?php echo $row['cardiac']?></td>
                                <td><?php echo $row['kidney']?></td>
                                <td><?php echo $row['hypertension']?></td>
                                <td><?php echo $row['sti']?></td>
                                <td><?php echo $row['sickle']?></td>
                                <td><?php echo $row['asthma']?></td>
                                <td><?php echo $row['eplepay']?></td>
                                 <td><?php echo $row['operation']?></td>
                                  <td><?php echo $row['blood']?></td>
                                  <td><?php echo $row['fracture']?></td>
                                <td><?php echo $row['pph'] ?></td>
                                <td><?php echo $row['d_c']?></td>
                                 <td><?php echo $row['etopic'] ?></td>
                                <td><?php echo $row['retained']?></td>
                                 <td><?php echo $row['vaccum'] ?></td>
                                <td><?php echo $row['caesarean']?></td>
                                <td><?php echo $row['smoking'] ?></td>
                                <td><?php echo $row['alcohol'] ?></td>
                                <td><?php echo $row['diabetes'] ?></td>
                                <td><?php echo $row['menstral']?></td>
                                <td><?php echo $row['EED'] ?></td>
                                <td><?php echo $row['BP']?></td>
                                <td><?php echo $row['LNMP'] ?></td>
                                <td><?php echo $row['gestation']?></td>
                                <td><?php echo $row['complication'] ?></td>
                                <td><?php echo $row['vomit']?></td>
                                 <td><?php echo $row['fever']?></td>
                                  <td><?php echo $row['loss']?></td>
                                   <td><?php echo $row['diarrhoea']?></td>
                                    <td><?php echo $row['cough']?></td>
                                     <td><?php echo $row['other']?></td>
                                     <td><?php echo $row['bleed']?></td>
                                
                                
                                
                                <td><?php echo $row['height'] ?></td>
                                <td><?php echo $row['weight'] ?></td>
                                <td><?php echo $row['pulse'] ?></td>
                                <td><?php echo $row['temperature'] ?></td>
                                <td><?php echo $row['vulva'] ?></td>
                                <td><?php echo $row['vagina'] ?></td>
                                <td><?php echo $row['uterus'] ?></td>
                                <td><?php echo $row['cervix'] ?></td>
                                <td><?php echo $row['bladder'] ?></td>
                                <td><?php echo $row['ovaries'] ?></td>
                                </tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                <td><textarea cols="20" name="report"></textarea></td>
                                <td><input type="submit" name="Subreport" value="SUBMIT"></td>
                                </form>
                     
                            </tr>
                            <?php }
}
							include 'connect.php';
							 if (isset($_POST['Subreport'])){
								 $report = $_POST['report'];
								 $id = $_SESSION['red'];
					$insert = mysql_query("insert into doc_report values('','$id','$report',now())");
if (!@$insert) {
                 ?><script type="text/javascript">alert("REPORT WAS NOT SUCEESSFULL INSERT");</script>
				 
        <?PHP

                                        }else{
                              
                                        
                           
        echo "<div role='alert' class='alert alert-success' ><button type='button' class='close'  aria-label='Close'><span aria-hidden='false'>×</span></button><span>Report was Successful!</span></div>";
    }
							 }
							 
							 ?>
                            <tr></tr>
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
               </div>
			</div>
		</div>
	</div>
</body>

</html>