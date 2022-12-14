
<?php 
include'../includes/config/dbconnection.php';
if (isset($_POST['submit'])){
	$message1 = $_POST['message1'];
	$message2 = $_POST['message2'];

    $query = mysqli_query($con, "INSERT INTO logbook(message1,message2)VALUES('$message1','$message2')");
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet "type="text/css" href="../assets/css/mystyle.css">
</head>
<body>
<?php
include'../intern/admin-includes/navbar/sidebar.php';
?>
	<div class="container">
        
	        <div class="row pt-5">
	            <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
	            	<h4 class="text-uppercase text-center">LOGBOOK</h4>
	            	<div class="card">
	            	<div class="card-body">
	            	                    <form action="" method="POST">
                                        <div class="row pt-3">


                                            
	            	                            <div class="col">
                                                <label for="">Dayno.</label>
	                                            <input type="text" class="form-control" placeholder="Enter valid Dayno." name="Dayno." >
                                              </div>
	            	                        </div>
	            	                      <div class="row pt-3">
                                              <div class="col">
	                                            <label for="">Brief description of work carriedout</label><br><br>
	                                            <textarea name="message1" cols="70" rows="5" placeholder="message" class="box message"></textarea>
                                              </div>
                                          </div> 
                                          <div class="row pt-3">
                                              <div class="col">
	                                              <label for="">Problem Encountered and Solutions Found </label><br><br>
	                                              <textarea name="message2" cols="70" rows="8" placeholder="message" class="box message"></textarea>
                                              </div>
                                          </div>  
                                          <div class="row  pt-3">
                                              <div class="col">
	                                              <button type="submit" name="submit" class=" btn  btn-block btn-dark">submit</button>

                                              </div>
                                          </div> 
                	</form>
                

	            	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>