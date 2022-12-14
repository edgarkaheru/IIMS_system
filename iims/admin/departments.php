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
    <link rel="stylesheet "type="text/css" href="../assets/css/mystyle.css">

</head>
<body>
<?php
include'../admin/admin-includes/navbar/sidebar.php';
?>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6 col-md-6 offset-lg-3 offset-lg-3">
                <h4 class="text-uppercase text-center">departments</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col">
                                    <label for="">Department</label>
                                    <input type="text" class="form-control " placeholder="Enter department " name="departmentname">
                                </div>
                            </div>

                            
                            
                            <div class="row pt-4">
                            <div class="col">
                            <button type="submit" name="submit" class="btn btn-block btn-primary">submit</button>
                                </div>
                            </div> 
                            <a href="dashboard.php">BACK</a>
                        </form>
                        
                    </div>
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
    
</body>
</html>