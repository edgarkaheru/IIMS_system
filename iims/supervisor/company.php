<?php 
include'../includes/config/dbconnection.php';
if (isset($_POST['submit'])){
	$companyname = $_POST['companyname'];
	$companyaddress = $_POST['companyaddress'];
    $companylocation = $_POST['companylocation'];

    $query = mysqli_query($con, "INSERT INTO company(companyname,companyaddress,companylocation)VALUES('$companyname','$companyaddress','$companylocation')");
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIMS PROGRAMS</title>
     <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
     <link rel="stylesheet "type="text/css" href="../assets_stud/css/mystyle.css">


</head>
<body>
<?php
include'../intern/admin-includes/navbar/sidebar.php';
?>
	<div class="container">
    <div class="row pt-5">
	            <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
	            	<h4 class="text-uppercase text-center">COMPANIES</h4>
	            	<div class="card">
	            	<div class="card-body">
	            	                    <form action="" method="POST">
                                        <div class="row pt-3">


                                            
	            	                            <div class="col">
                                                <label for="">Company Name</label>
	                                            <input type="text" class="form-control" placeholder="Enter companyname" name="companyname" >
                                              </div>
	            	                        </div>
	            	                      <div class="row pt-3">
                                              <div class="col">
	                                              <label for="">Company Address</label>
	                                              <input type="text" class="form-control" placeholder="Enter  companyaddress" name="companyaddress" >
                                              </div>
                                          </div> 
                                          <div class="row pt-3">
                                              <div class="col">
	                                              <label for="">Company Location</label>
	                                              <input type="text" class="form-control" placeholder="Enter  companylocation" name="companylocation" >
                                              </div>
                                          </div> 
                                          
                                          <div class="row  pt-3">
                                              <div class="col">
	                                              <button type="submit" name="submit" class=" btn btn-block btn-dark ">submit</button>

                                              </div>
                                          </div> 
                						</form>
                

	            	                </div>
	            </div>
	        </div>
	    </div>
        
	<div class="card-body">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="color:black;font-size:22px;text-align:center">COMPANIES</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php $sql = mysqli_query($con,"SELECT * FROM company");
                                while($row = mysqli_fetch_array ($sql)){ ?>
                                <tr>
                                    <td style="color:white;font-size:18px;"><?php echo htmlentities($row['companyname']); ?></td>
                                    <td style="color:white;font-size:18px;"><?php echo htmlentities($row['companyaddress']); ?></td>
                                    <td style="color:white;font-size:18px;"><?php echo htmlentities($row['companylocation']); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
       
	    </div>
	</div>
</body>
</html>





