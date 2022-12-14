<?php 
include'../includes/config/dbconnection.php';
if(isset($_POST['signup'])){
    $surname = $_POST['surname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "INSERT INTO intern (surname,lastname,contact,email,username,password) VALUES('$surname','$lastname','$contact','$email','$username','$password')");
   


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIMS SIGNUP </title>
    <link rel="stylesheet "type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet "type="text/css" href="../assets_stud/css/mystyle.css">

</head>
<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6 col-md-6 offset-lg-3 offset-lg-3">
                <h4 class="text-uppercase text-center" style="color:white;font-size:24px;font-weight:bold">internship infromation management system</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="row">
                                <div class="col">
                                    <label for="">Surname</label>
                                    <input type="text" class="form-control " placeholder="Enter surname" name="surname">
                                </div>
                                <div class="col">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control " placeholder="Enter lastname" name="lastname">
                                </div>
                            </div>
                            
                            <div class="row pt-4">
                                <div class="col">
                                    <label for="">contact</label>
                                    <input type="text" class="form-control " placeholder="Enter contact" name="contact">
                                </div>
                                <div class="col">
                                    <label for="">email</label>
                                    <input type="text" class="form-control " placeholder="Enter email" name="email">
                                </div>
                            </div>
                           <div class="row pt-4">
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
                            <button type="submit" name="signup" class="btn btn-block btn-dark">SIGNUP</button>
                            


                                </div>
                            </div> 
                        </form>
                        <div class="row pt-4">
                	    <div class="col">
                      <p style="color:black">Already have  an Account?<a href="index.php" style="color:white">  Login Here <b></b></a></p>
                  </div>
              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>