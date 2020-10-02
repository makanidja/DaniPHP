<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreparedStatement</title>
</head>
<body>


<?php 
    $data = "Admin"; 
    // Created a template 
    $sql = "SELECT * FROM users WHERE user_uid=?;";
    //Create a prepared statemnts
    $stmt = mysqli_stmt_init($conn);
    //Prepare the prepared statements
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statements faild";
    }else{
        //Bind paramaters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data );
        //Run parameters inside database
        mysqli_stmt_execute($stmt);
        $request = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_assoc($request)){
            echo $row['user_uid']."<br>";
        }
    }
    
    
 
        
    

    
?>
    
</body>
</html>