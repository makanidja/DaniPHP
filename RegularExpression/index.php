<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression</title>
</head>
<body>

<?php 

// $string = "My name is Marko, Marko is my name";

// if(preg_match_all("/Ma(rk)o/", $string, $array)){
//     print_r($array);
// }


$string1 = "My name is Marko, Marko is my name!";
$string2 = preg_replace("/Marko/", "Makica", $string1);

echo $string1;
echo "<br>";
echo $string2

?>
    
</body>
</html>