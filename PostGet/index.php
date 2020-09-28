<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post and Get</title>
</head>
<body>

<form action="" method="GET">
    <input type="hidden" name="name" value="value">
    <button type="submit">PRESS ME GET!</button>
</form>

<form action="" method="PoST">
    <input type="hidden" name="name1" value="value1">
    <br>
    <button type="submit">PRESS ME POST!</button>
</form>
<?php echo $_POST['name1'] ?>
    
</body>
</html>