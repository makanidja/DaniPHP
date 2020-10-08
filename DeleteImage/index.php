<?php 
    session_start();
    include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

    $sql = "SELECT * FROM user";
    $request = mysqli_query($conn, $sql);

    if(mysqli_num_rows($request) > 0){
        while($row = mysqli_fetch_assoc($request)){
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
            $requestImg = mysqli_query($conn, $sqlImg);
            while($rowImg = mysqli_fetch_assoc($requestImg)){
                echo "<div class='user-container'>";
                    if($rowImg['status'] == 0){
                        $filename = "uploads/profile".$id."*";
                        $fileinfo = glob($filename);
                        $fileext = explode(".", $fileinfo[0]);
                        $fileactualext = $fileext[1];
                        echo "<img src='uploads/profile".$id.".".$fileactualext."?".mt_rand()."' >";
                    }else{
                        echo "<img src='uploads/profiledefault.jpg' >";
                    }
                    echo "<p>".$row['username']."</p>";
                echo "</div>";
            }

        }
    }else{
        echo "There are no users yet!";
    }


    if(isset($_SESSION['id'])){
        if($_SESSION['id'] == 1){
            echo "You are logged in as user #1";
        }
        echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>UPLOAD</button>
        </form>";

        echo "<form action='deleteprofile.php' method='POST'>
            <button type='submit' name='submit'>DELETE profile image</button>
        </form>";
    }else{
        echo "You are NOT logged in!";
        echo "<form action='signup.php' method='POST'>
            <input type='text' name='first' placeholder='First name'>
            <input type='text' name='last' placeholder='Last name'>
            <input type='text' name='uid' placeholder='Username'>
            <input type='password' name='pwd' placeholder='Password'>
            <button type='submit' name='submitSignup'>Signup</button>
        </form>";
    }

?>



<p>Login as user!</p>
<form action="login.php" method="POST">
    <button type="submit" name="submitLogin">Login</button>
</form>

<p>Logout as user!</p>
<form action="logout.php" method="POST">
    <button type="submit" name="submitLogout">Logout</button>
</form>

    
</body>
</html>
