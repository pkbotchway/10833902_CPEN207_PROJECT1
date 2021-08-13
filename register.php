<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>PKB Legal Consult - Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="space">
        <p>LEGAL CONSULT</p>
        <p>Sign Up</p>
    </div>

    <div class="bigTile">

        <form method="post" action="register.php">
            
            <?php include('errors.php'); ?>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="" name="fullname" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="" name="email">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Username</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="" name="username">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password_1">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password_2">
            </div>
            <button type="submit" class="btn btn-primary" name="reg_user">Sign in</button>
        </form>

    </div>

    <div class="signText">
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </div>
</body>
</html>