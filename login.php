<!DOCTYPE html>
<html>
<head>
	<title>User Login and registeration</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container"> 
		<div class="row">
			<div class="col-md-6">
				<h2>Login here</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control"required>
					</div>
					<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control"  required>
					</div>
					<button type="submit" class="btn btn-primary"> Login</button>
				</form>
			</div>

			<div class="col-md-6">
				<h2>Register here</h2>
				<form action="registeration.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control"required>
					</div>
					<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control"  required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>