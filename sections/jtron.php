<!-- SELECT * FROM Table ORDER BY ID DESC LIMIT 1 -->
<?php require "creator/connection.php";?>
<?php
    $query = "SELECT * FROM content_test2 ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_fetch_assoc($result)?>
<div style="background-image: url('<?php echo $rows["spread"]?>');background-repeat:no-repeat; background-position: center center"
 class="d-flex justify-self-center jumbotron-fluid jumbo align-content-center">
    <div class ="d-flex-inline text-center align-content-center darktron">
        <h1 class="text-light animated fadeInUp"><?php echo $rows["title"]?></h1> 
        <h5 class="text-light animated fadeInUp"><?php echo $rows["info"]?></h5> 
        <p style="font-size: 0.8em" class = "text-light animated fadeIn">by <?php echo $rows["author"]?></p>
        <a class = "animated fadeInLeft btn btn-outline-info" href="article.php?beans=<?php echo $rows["id"]?>">Read on..</a> 
        </p>
    </div>
</div>
    