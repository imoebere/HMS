
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
                    <table class="table table-striped">
                        <thead>
              
                                <th>S/N</th>
                                <th>CARD NO &nbsp;</th>
                                 <th>DOCTOR REPORT </th>
                                 <th> DATE/TIME</th>
                            <th><i class="fa fa-bars"></i></th>
                        </thead>
                        <tbody>


                            <?php


if(isset($_POST['submit'])) {
$card_no = ($_POST['search']);

                            $fetch = mysql_query("SELECT * FROM doc_report WHERE card_no='$card_no'" );


                                while ($row = mysql_fetch_array($fetch)) {


                            ?>
                            <tr>
                            	  <td><?php echo $row['id']?></td>
                                   <td><?php echo $row['card_no'] ?></td>
                                <td><?php echo $row['report']?></td>
                               
                                 <td><?php echo $row['datess']?></td>
                        
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
		</div>
	</div>
</body>

</html>