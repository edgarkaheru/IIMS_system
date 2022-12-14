<?php 
include'../includes/config/dbconnection.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM admin WHERE  username = '".$_POST['username']."' AND password ='".$_POST['password']."'");
    
   
    // echo "sucessfull login "
    //fetching the array with the select statement 
    $user = mysqli_fetch_array($query); 
    
    if ($user > 0){
        // we are linking the login page and the dashboard
        $extra = "dashboard.php";
        header("Location: $extra");
        exit();
    }
    else{
        header("Location:index.php");
        exit();
        

        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIMS LOGIN </title>
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
                <h4 class="text-uppercase text-center">internship infromation management system</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col">
                                    <label for="">User Name</label>
                                    <input type="text" class="form-control " placeholder="Enter username" name="username">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                </div>
                            </div>
                            <div class="row pt-4">
                            <div class="col">
                            <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
                                </div>
                            </div> 
                        </form>
                        <div class="row pt-4">
                	    <div class="col">
                      <p>Dont have an Account?<a href="signup.php">Create Account</a></p>
                  </div>
              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>