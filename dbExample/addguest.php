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

    $firstname=$_POST['fn'];
    $lastname=$_POST['ln'];
    $email=$_POST['email'];
    //$regdate=$_POST['rdate'];
    $date=date('Y-m-d');
    $SQL="INSERT INTO myguest(firstname,lastname,email,reg_date) VALUES('$firstname','$lastname','$email','$date')";
    if(mysqli_query($connection,$SQL)){
        echo "new record added";
    }else{
        echo "Error:".mysqli_error($connection);
    }
    mysqli_close($connection);
?>
</body>
</html>