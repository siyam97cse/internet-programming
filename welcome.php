<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>
<body>
    <?php
       $name=$_POST['name'];
       $email=$_POST['email'];
       echo "Your name is:".$name;
       echo "<br>";
       echo "Your email address is:".$email;
    ?>
</body>
</html>