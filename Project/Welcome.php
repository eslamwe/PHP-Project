<?php 
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'users');

$name = $_POST['name'];
$email = $_POST['email'];

$s = "select * from users where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "user already taken";
}
else{$reg = "insert into usertable(name,password) values ('$name','$email')";
mysqli_query($con, $reg);
    echo"Done";}
?>