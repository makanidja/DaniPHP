<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $sql = "SELECT * FROM users";
    $request = mysqli_query($conn, $sql);

    $datas = array();

    if(mysqli_num_rows($request) > 0){
        while($row = mysqli_fetch_assoc($request)){
            $datas[] = $row;
        }
        
    }
    //print_r($datas);

    foreach($datas[0] as $data){
        echo $data;
    }
    echo "<br>";


    foreach($datas as $data){
        echo $data['user_first']."<br>";
    }



?>
    
</body>
</html>