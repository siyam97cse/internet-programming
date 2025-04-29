<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include 'dbConnect.php';
     $id=$_POST['id'];
     $firstname=$_POST['fn'];
     $lastname=$_POST['ln'];
     $email=$_POST['email'];
     $sql= "INSERT INTO mytable VALUES('$id','$firstname'
     ,'$lastname','$email')";
     //EXECUTE QUERY
     mysqli_query($connection,$sql);
     if(mysqli_affected_rows($connection)>0){
        echo "New record added";
     }else{
        echo "Error".mysqli_error($connection);
     }
      //close database
      mysqli_close($connection);
    ?>
</body>
</html>