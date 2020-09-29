<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and Cookie</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>Hello home</h1>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php 
    $_SESSION['username'] = "maka2020";
    echo $_SESSION['username'];

    if(!isset($_SESSION['username'])){
        echo "You are not logged in!";
    }else{
        echo "YOU ARE LOGGED IN!";
    }


?>
    
</body>
</html>