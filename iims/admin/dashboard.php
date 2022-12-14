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
    <title>Dashoard </title>
    <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet "type="text/css" href="../assets/css/mystyle.css">
    <link rel="stylesheet "type="text/css" href="../assets/css/font-awesome.css">
</head>
<body>
<?php include"admin-includes/navbar/navbar.php"; ?>
   <div class="container-fuild">
    <div class="wrapper">
        
            <?php include"admin-includes/navbar/sidebar.php" ?>
        
        <div class="main">
            <br>
            <div class="header">
            <div class="row">
                <div class="col">
                <?php echo ('Welcome Admin:')?>
                    <?php echo htmlentities($_SESSION['surname']); ?>
                    <?php echo htmlentities($_SESSION['lastname']); ?>
                
            <div class="timeheader">
            <?php 
                    $time = date("d-m-y");
                    echo("Date: ${time}");?>  
            </div>
            
                </div>
            </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><i class="fa fa-users" ></i> internees</h5>
                            <p><?php
                            $sqli = mysqli_query($con,"SELECT * FROM intern");
                            $count = 0;
                            while($row = mysqli_fetch_array($sqli)){
                                $count++;
                            }
                            echo("Registered: 0${count}");
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 ><i class="fa fa-outdent" ></i> Faculties</h5>
                            <p>
                            <?php
                            $sqli = mysqli_query($con,"SELECT * FROM faculties");
                            $count = 0;
                            while($row = mysqli_fetch_array($sqli)){
                                $count++;
                            }
                            echo("Registered: 0${count}");
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><i class="fa fa-outdent" ></i> Departments</h5>
                            <p><?php
                            $sqli = mysqli_query($con,"SELECT * FROM departments");
                            $count = 0;
                            while($row = mysqli_fetch_array($sqli)){
                                $count++;
                            }
                            echo("Registered: 0${count}");
                            ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <h5><i class="fa fa-user"></i> Supervisor</h5>
                            <p>
                            <?php
                            $sqli = mysqli_query($con,"SELECT * FROM supervisor");
                            $count = 0;
                            while($row = mysqli_fetch_array($sqli)){
                                $count++;
                            }
                            echo("Registered: 0${count}");
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><i class="fa fa-users" ></i> Programs</h5>
                            <p>
                            <?php
                            $sqli = mysqli_query($con,"SELECT * FROM programs");
                            $count = 0;
                            while($row = mysqli_fetch_array($sqli)){
                                $count++;
                            }
                            echo("Registered: 0${count}");
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><i class="fa fa-home" ></i> Companies</h5>
                            <p><?php
                            $sqli = mysqli_query($con,"SELECT * FROM company");
                            $count = 0;
                            while($row = mysqli_fetch_array($sqli)){
                                $count++;
                            }
                            echo("Registered: 0${count}");
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
   </div>
   <?php include"admin-includes/footer.php" ?>
   <script src="../assets/js/bootstrap.js"></script> 
</body>
</html>