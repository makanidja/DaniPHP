<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays1</title>
</head>
<body>

<?php 

// prvi nacina
    $data = array("first", "second");
    array_push($data, "Maka", "Saka", "Daka"); 
    print_r($data);


    echo "<br>";
    echo "<br>";



//drugi nacin
    $people = array();
    $people[] = "Miljoljka";
    $people[] = "Stanojka";
    $people[] = "Dragojka";
    print_r($people);








?>
    
</body>
</html>