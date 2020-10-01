<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    
    <?php 
        $sql = "SELECT * FROM users;";
        $request = mysqli_query($conn, $sql);

        $result = mysqli_num_rows($request);;
        if($result > 0){
            while($row = mysqli_fetch_assoc($request)){
                echo $row['user_uid']."<br>";
            }
        }

    
    ?>
</body>
</html>