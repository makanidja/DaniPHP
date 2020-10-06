<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listanje</title>
</head>
<body>

<?php

    $sql = "SELECT * FROM users";
    $request = mysqli_query($conn, $sql);

    $redovi = mysqli_num_rows($request);

    if($redovi > 0){

        $row = mysqli_fetch_assoc($request);
        print_r($row);

        for($i = 0; $i < $redovi; $i++){
           echo $row[$i];
        }
        
    }




?>
    
</body>
</html>