<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h2>User Defined Function Example</h2>
    <?php
    //user defined function
    function addNumber($num1,$num2){
        $total = $num1 +$num2;
        echo "Total is :".$total;
    }
    function myname($myname){
        echo "My name is:".$myname;
    }
    function findlargest($n1, $n2){
        if($n1>$n2){
            echo "The largest number is: ".$n1;
        }
        else{
            echo "The largest number is: ".$n2;  
        }
    }
    //call function
    addNumber(100,200);
    echo "<br>";
    myname("Siyam");
    echo "<br>";
    findlargest(100,200);

    ?>
</body>
</html>
