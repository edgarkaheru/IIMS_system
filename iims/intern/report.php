<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet "type="text/css" href="../assets_stud/css/mystyle.css">


</head>
<body>
<?php
include'../intern/admin-includes/navbar/sidebar.php';
?>
	<div class="container1">
        
	        <div class="row pt-5">
	            <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
	            	<h4 class="text-uppercase text-center">REPORT</h4>
	            	<div class="card">
	            	<div class="card-body">

                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type= "submit" name="submit">UPLOAD FILE</button>
                        </form>
                    </div> 
                    </div>
                </div>
            </div>
        </div>                  
</body>
</html>