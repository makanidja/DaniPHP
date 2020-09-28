<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

<?php 

   

    function newCalc($x){
        $newnr = $x *  0.75;
        echo "Here is 75% of whar you wrote($x): " .$newnr;
    }
    
    $x = 100;
    newCalc($x);
    
    echo "</br>";

    $a = 10;
    newCalc($a);




?>
    
</body>
</html>