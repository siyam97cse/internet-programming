<?php
    $serverName="localhost:3307";
    $userName="root";
    $password="";
    $dbname="mydatabase";
    //create connection
    $connection=mysqli_connect($serverName,$userName,$password,$dbname);
    if(!$connection){
        die("Failed to connect to the DB Server". mysqli_connect_error());
    }