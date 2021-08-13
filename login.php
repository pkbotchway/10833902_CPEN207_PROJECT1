<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>PKB Legal Consult - Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="space">
        <p>LEGAL CONSULT</p>
        <p>Login</p>
    </div>

    <div class="bigTile">

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>

            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email and password with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div style="height: 45px;"></div>
            <button type="submit" class="btn btn-primary" name="login_user">Log In</button>
        </form>

    </div>

    <div class="signText">
        <p>Not yet a member? <a href="register.php">Sign up</a></p>
    </div>


</body>
</html>