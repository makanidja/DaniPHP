<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing and de-hashing</title>
</head>
<body>
  <?php 
    echo "admin1";
    echo "<br>";
    echo password_hash("admin1", PASSWORD_DEFAULT);
    echo "<br>";



    $input = "admin1";
    $hashedPwdOnDB = password_hash($input, PASSWORD_DEFAULT);

    echo password_verify($input, $hashedPwdOnDB);
  
  
  ?>  
</body>
</html>