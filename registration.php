<?php

require_once("../PHP-Project/DataBaseUsers.php");
require_once("../PHP-Project/component.php");
require_once("../PHP-Project/operation.php");
session_start();
$con = CreateDB1();

if (isset($_POST["RegisterBtn"])){
    checkDataReg();
}
if (isset($_POST["LoginBtn"])){
    checkDataLog();
}

/*function checkData(){
    $con = mysqli_connect('localhost','root','','users');
    $userName = textBoxValue("user");
    $password = textBoxValue("password");
    $s = "select * from users where userName = '$userName' ";
    $result = mysqli_query( $con , $s);
    //$num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
}*/
function checkDataReg(){
    $con = mysqli_connect('localhost','root','','users');
    $userName = textBoxValue("user");
    $password = textBoxValue("password");
    $s = "select * from users where userName = '$userName' ";
    $result = mysqli_query( $con , $s);
    //$num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($row ) {
        echo "User is taken, Login instead";
        //TextNode("error","User is taken, Login instead");
    }
    else{
        $sql = "INSERT INTO users(userName,password) 
                VALUES('$userName','$password')";

        if (mysqli_query($GLOBALS['con'],$sql)){
                header('location:index.php');
        }
    }
}

function checkDataLog(){

    $con = mysqli_connect('localhost','root','','users');
    $userName = textBoxValue("user");
    $password = textBoxValue("password");
    $s = "select * from users where userName = '$userName' AND password ='$password'";
    $result = mysqli_query( $con , $s);
    //$num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($row ) {
        header('location:index.php');
    }
    else{

       //"<script>window.togglePopUp();</script>";
       //TextNode('error','User Not found, Register Instead !');
        echo "User not found, Register Instead";
    }
}
