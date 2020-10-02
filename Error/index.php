<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Error</title>
</head>
<body>
<h2>Singup</h2>
<form action="includes/singup.inc.php" method="POST">
<?php 
    if(isset($_GET['first'])){
        $first = $_GET['first'];
        echo '<input type="text" name="first" placeholder="Firstaname" value="'.$first.'"></br>';
    }else{
        echo '<input type="text" name="first" placeholder="Firstaname"></br>';
    }

    if(isset($_GET['last'])){
        $last = $_GET['last'];
        echo '<input type="text" name="last" placeholder="Lastaname" value="'.$last.'"></br>';
    }else{
        echo '<input type="text" name="last" placeholder="Lastaname"></br>';
    }

?>
    
    <input type="text" name="email" placeholder="E-mail"></br>
<?php 
    if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
        echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'"></br>';
    }else{
        echo '<input type="text" name="uid" placeholder="Username"></br>';
    }
?>
    <input type="password" name="pwd" placeholder="Password"></br>
    <button type="submit" name="submit">Sign up</button>
</form>

<?php 
    // OVO JE JEDAN PRIMER ZA GRESKE

    // $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // if(strpos($fullURL, "signup=empty") == true){
    //     echo "<p class='error'>You did not fill in all fields!</p>";
    //     exit();
    // }
    // elseif(strpos($fullURL, "signup=char") == true){
    //     echo "<p class='error'>You used invalid characters!</p>";
    //     exit();
    // }
    // elseif(strpos($fullURL, "signup=email") == true){
    //     echo "<p class='error'>You used an invalid e-mail!</p>";
    //     exit();
    // }
    // elseif(strpos($fullURL, "signup=success") == true){
    //     echo "<p class='success'>You have been signed up!</p>";
    //     exit();
    // }



    //OVO JE DRUGI PRIMER

    if(!isset($_GET['signup'])){
        exit();
    }
    else{
        $signupCheck = $_GET['signup'];

        if($signupCheck == "empty"){
            echo "<p class='error'>You did not fill in all fields!</p>";
            exit();
        }
        elseif($signupCheck == "char"){
            echo "<p class='error'>You used invalid characters!</p>";
            exit();
        }
        elseif($signupCheck == "email"){
            echo "<p class='error'>You used an invalid e-mail!</p>";
            exit();
        }
        elseif($signupCheck == "success"){
            echo "<p class='success'>You have been signed up!</p>";
            exit();
        }
    }



?>


    
</body>
</html>