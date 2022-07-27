<?php
    $dbHost = 'localhost';  //database host name
    $dbUser = 'root';       //database username
    $dbPass = '';           //database password
    $dbName = 'shop'; //database name
    $con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$con){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>