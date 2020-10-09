<?php  include 'header.php';?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>


<h1>Front page</h1>

<h2>All articles:</h2>

<div class="article-container">
    <?php 
        $sql = "SELECT * FROM article";
        $request = mysqli_query($conn, $sql);

        $queryResults = mysqli_num_rows($request);

        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($request)){
                echo "<div class='article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                    <p>".$row['a_date']."</p>
                    <p>".$row['a_author']."</p>
                    <hr>
                </div>";
            }
        }
    ?>
</div>
    
</body>
</html>