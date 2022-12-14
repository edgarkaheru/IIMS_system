<?php 
include'../includes/config/dbconnection.php';
if(isset($_POST['submit'])){
    $departmentname = $_POST['departmentname'];
    
    $query = mysqli_query($con, "INSERT INTO departments(departmentname) VALUES('$departmentname')");
    echo "";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>departments </title>
    <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet "type="text/css" href="../assets_stud/css/mystyle.css">

</head>
<body>
<?php
include'../intern/admin-includes/navbar/sidebar.php';
?>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6 col-md-6 offset-lg-3 offset-lg-3">
            <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="color:black;font-size:22px;text-align:center">DEPARTMENTS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = mysqli_query($con,"SELECT * FROM departments");
                            while($row = mysqli_fetch_array($sql)){ ?>
                                    <tr>
                                        <td style="color:white;font-size:18px;> <?php echo htmlentities($row['departmentname']); ?></td>
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
    </div>
    
</body>
</html>