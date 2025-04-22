<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$serverName="localhost:3307";
$userName="root";
$password="";
$dbname="mydb";
//create connection
$connection=mysqli_connect($serverName,$userName,$password,$dbname);
if(!$connection){
    die("Failed to connect to the DB Server". mysqli_connect_error());
}
//echo "Connected successfully";
$SQL="CREATE TABLE myguest(id int(6) AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(60),
    lastname  varchar(60),
    email  varchar(100),
    reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if(mysqli_query($connection,$SQL)){
echo "Table created successfully";
}else{
    echo "Error creating table:".mysqli_error($connection);
}

    ?>
</body>
</html>