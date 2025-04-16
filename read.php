<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $fn = fopen("myfile.txt","r");
     while(!feof($fn)){
        $result=fgets($fn);
        echo $result."<br>";
     }
     fclose($fn);
    ?>
<!-- reading specific ammount of byte -->
    <?php
       $fn = fopen("myfile.txt","r");
          $result=fgets($fn,20);
          echo $result."<br>";
       fclose($fn);
      ?>
    ?>
</body>
</html>