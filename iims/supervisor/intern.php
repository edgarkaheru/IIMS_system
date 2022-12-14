<?php 
include'../includes/config/dbconnection.php';

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iternees</title>
     <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
     <link rel="stylesheet "type="text/css" href="../assets/css/mystyle.css">


</head>
<body>
<?php
include'../intern/admin-includes/navbar/sidebar.php';
?>
<div class="container">
    <div class="card-body">
        <div class="row">
            <div class="col">
            <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th style="color:white;font-size:22px;text-align:center">INTERNEES</th>
                            </tr>
                            <tr>
                                <th style="color:black;font-size:22px;text-align:center">Surname</th>
                                <th style="color:black;font-size:22px;text-align:center">lastname</th>
                                <th style="color:black;font-size:22px;text-align:center">contact</th>
                                <th style="color:black;font-size:22px;text-align:center">email</th>
                                <th style="color:black;font-size:22px;text-align:center">username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = mysqli_query($con,"SELECT * FROM intern");
                            while($row = mysqli_fetch_array($sql)){ ?>
                                    <tr>
                                        <td style="color:white;font-size:18px;> <?php echo htmlentities($row['surname']); ?></td>
                                        <td style="color:white;font-size:18px;> <?php echo htmlentities($row['lastname']); ?></td>
                                        <td style="color:white;font-size:18px;> <?php echo htmlentities($row['contact']); ?></td>
                                        <td style="color:white;font-size:18px;> <?php echo htmlentities($row['email']); ?></td>
                                        <td style="color:white;font-size:18px;> <?php echo htmlentities($row['username']); ?></td>
                                    </tr>
                                    <?php } ?>
                            
                        </tbody>

                    </table>
                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>





