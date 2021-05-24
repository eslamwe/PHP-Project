<?php
session_start();
if (! isset($_SESSION['username'])){
	header('Location : login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="logout.php">LogOut</a>


	<h1>welcome <?php echo $_SESSION['username'];?></h1>    

</body>
</html>