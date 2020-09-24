<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php 
    $dayofweek = date("w");
    
    switch($dayofweek){
        case 1:
            echo "It is Monday!";
        break;

        case 2:
            echo "It is Tuesday!";
        break;

        case 3:
            echo "It is Wednesday!";
        break;

        case 4:
            echo "<p>It is Thursday!</p>";
        break;

        case 5:
            echo "It is Friday!";
        break;

        case 6:
            echo "It is Saturday!";
        break;

        case 0:
            echo "It is Sunday!";
        break;

    }


?>

    
</body>
</html>