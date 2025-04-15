<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "For loop example\n";
    echo "<br>";

    for($i=1;$i<=10;$i++){
        $product=5 * $i;
        echo "The product of 5*$i is $product<br>";
    }
    ?>

<?php
    echo "<br>";
    echo "While loop example\n";
    echo "<br>";
    $i=1;
    while($i<=10){
        $product=5 * $i;
        echo "The product of 5*$i is $product<br>";
        $i++;
    }
    ?>

<?php
    echo "<br>";
    echo "Do-While loop example\n";
    echo "<br>";
    $i=1;
    do{
        $product=5 * $i;
        echo "The product of 5*$i is $product<br>";
        $i++;
    }while($i<=10)
    ?>
</body>
</html>