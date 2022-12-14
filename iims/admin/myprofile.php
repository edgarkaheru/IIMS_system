<?php 
session_start();
error_reporting(0);
include'../includes/config/dbconnection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile </title>
    <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet "type="text/css" href="../assets/css/mystyle.css">
    <link rel="stylesheet "type="text/css" href="../assets/css/font-awesome.css">
    

</head>
<body>
    <?php
include'../admin/admin-includes/navbar/sidebar.php';
?>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6 col-md-6 offset-lg-3 offset-lg-3">
                <h4 class="text-uppercase text-center">MY profile</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="row">
                    
                    <p style=font-size:19px;font-weight:bold>WELCOME TO YOUR PROFILE </p>
                    
                    <div class="card card--bg-gray-blue">
                    <header class="card_header">
                    <img src="photos/edgar.png" class="card_img" alt="upload photo">
                    </div>
                    </header>
                     <br>   
                    <?php echo ('SURNAME:')?>
                    <?php echo htmlentities($_SESSION['surname']); ?><br><br>
                    <?php echo ('LASTNAME:')?>
                    <?php echo htmlentities($_SESSION['lastname']); ?><br><br>
                    <?php echo ('USERNAME:')?>
                    <?php echo htmlentities($_SESSION['username']); ?><br><br>
                    <?php echo ('CONTACT:')?>
                    <?php echo htmlentities($_SESSION['contact']); ?><br><br>
                    <?php echo ('EMAIL:')?>
                    <?php echo htmlentities($_SESSION['email']); ?><br><br>    

                            <a href="dashboard.php">BACK</a><br><br>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
        </div>
       
    </div>

</body>
</html>

