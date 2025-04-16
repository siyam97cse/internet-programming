<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $myfile=fopen("myfile.txt","w") or die("Unable to open");
      $txt1="Uttara University\n";
      
      //write into file
      fwrite($myfile,$txt1);
      $txt2="Department of CSE\n";
      fwrite($myfile,$txt2);
      fclose($myfile);

      
    ?>
</body>
</html>