<?php
    include_once('autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Template</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sign In</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="form-group">
                                <label for="">Login Info</label>
                                <input type="text" name="login" placeholder="Enter Email or Username or Cell No" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signin" value="Login" class="btn btn-info">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>