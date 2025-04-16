<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Index Array
    $anArray=array(100,200,300);
    echo $anArray[0];
    foreach($anArray as $arrayValue){
        echo $arrayValue."<br>";
    }
    // Associative Array(key=>value)
    $age=array("AA"=>"21","AB"=>"22","AC"=>"23",);
    echo $age["AB"];
    ?>

    <?php
    $car=array(
        array("Volvo",20,10),
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    echo "Name:".$car[0][0].": In stock: ".$car[0][1].", sold: ".$car[0][2].".<br>";
    
    ?>
</body>
</html>