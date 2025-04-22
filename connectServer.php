<?php
$serverName="localhost:3307";
$userName="root";
$password="";
//create connection
$connection=mysqli_connect($serverName,$userName,$password);
if(!$connection){
    die("Failed to connect to the DB Server". mysqli_connect_error());
}
echo "Connected successfully";
    ?>