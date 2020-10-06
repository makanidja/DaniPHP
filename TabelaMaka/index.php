<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    
<?php 
    $sql = "SELECT * FROM users";
    $request = mysqli_query($conn, $sql);

    $datas = array();

    if(mysqli_num_rows($request) > 0){
        while($row = mysqli_fetch_assoc($request)){      
            
    ?>

    <tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['user_first'] ?></td>
        <td><?php echo $row['user_last'] ?></td>
        <td><?php echo $row['user_email'] ?></td>
        <td><?php echo $row['user_uid'] ?></td>
        <td><?php echo $row['user_pwd'] ?></td>   
    </tr>
        
    <?php

        }
    }
    ?>

</table>
    
<?php

    


    //print_r($datas);

    // foreach($datas[0] as $data){
    //     echo $data;
    // }
    // echo "<br>";


    // foreach($datas as $data){
    //     echo $data['user_first']."<br>";
    // }

?>
    
</body>
</html>