<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique String</title>
</head>
<body>

<?php 

    function genereteKey(){
        $keyLength = 8;
        $str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
        $randStr = substr(str_shuffle($str), 0, $keyLength);

        return $randStr;
    }
    echo genereteKey();


    echo "<br>";

    function genereteKey1(){
        $randStr = uniqid('marko', true);

        return $randStr;
    }
    echo genereteKey1();


    echo "<br>";


    // -------------------------------------------------------------------------------

    $conn = mysqli_connect("localhost", "root", "", "danidb");

    function checkKeys($conn, $randStr){
        $sql = "SELECT * FROM keystring";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            if($row['keystringKey'] == $randStr){
                $keyExists = true;
            break;
            }else{
                $keyExists = false;
            }
        }

        return $keyExists;
    }

    function genereteKey0($conn){
        $keyLength = 8;
        $str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
        $randStr = substr(str_shuffle($str), 0, $keyLength);

        $checkKey = checkKeys($conn, $randStr);

        while($checkKey == true){
            $randStr = substr(str_shuffle($str), 0, $keyLength);
            $checkKey = checkKeys($conn, $randStr);
        }

        return $randStr;

    }

    echo genereteKey0($conn);


?>
    
</body>
</html>