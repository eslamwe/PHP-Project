<?php
require_once("../PHP-Project/registration.php");
require_once("../PHP-Project/component.php");
?>

<!DOCTYPE html>
<html >
<head>
	<title> User Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-6">
		   <h2> Login Here </h2>	
		    <form action="registration.php" method="post">
		       <div class="form-group">
		           <label>Username</label>
                   <label>
                       <input type="text" name="user" class="form-control" required>
                   </label>

               </div>
		<div class="form-group">
		<label>Password</label>
            <label>
                <input class="form-control" name="password" required type="password">
            </label>


        </div>
                <?php buttonElement
                ("btn-create","btn btn-primary" ," Login ", "LoginBtn" ,
                    "data-toggle ='tooltip' data-placement = 'bottom' title = 'Login'  ");?>
		</form>
		</div>

		<div class="col-md-6">
		   <h2> Register Here </h2>	
		    <form action="registration.php" method="post">
		       <div class="form-group">
		           <label>Username</label>
                   <label>
                       <input type="text" name="user" class="form-control" required>
                   </label>
               </div>

		<div class="form-group">
		<label>Password</label>
            <label>
                <input type="password" name="password" class="form-control" required>
            </label>
        </div>
                <?php buttonElement
                ("btn-register","btn btn-primary" ," Register ", "RegisterBtn" ,
                    "data-toggle ='tooltip' data-placement = 'bottom' title = 'Register'  ");?>
		</div>
        </div>
</body>

</html>