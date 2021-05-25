<?php

function CreateDB1(){
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $con = mysqli_connect($serverName,$username,$password,$dbname);

    if (!$con){
        die("Connection Failed : ".mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if (mysqli_query($con,$sql)){
        $con = mysqli_connect($serverName,$username,$password,$dbname);

        $sql = "CREATE TABLE IF NOT EXISTS users(
                     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                     userName varchar (25) NOT NULL,
                     password varchar (20))";

        if (mysqli_query($con,$sql)){
            return $con;
        }
        else{echo "cant";}
    }
    else{ echo "Error while detecting database !" .mysqli_error($con);}
}