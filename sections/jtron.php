<!-- SELECT * FROM Table ORDER BY ID DESC LIMIT 1 -->
<?php require "creator/connection.php";?>
<?php
    $query = "SELECT * FROM content_test2 ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_fetch_assoc($result)?>
<div style="background-image: url('<?php echo $rows["spread"]?>');background-repeat:no-repeat; background-position: center center" class="jumbotron-fluid jumbo align-bottom">
    <div style="text-align: center;" class ="pt-5">
        <h1 class="text-light animated fadeInUp py-1"><?php echo $rows["title"]?></h1> 
        <h5 class="text-light animated fadeInUp py-1"><?php echo $rows["info"]?></h5> 
        <p style="font-size: 0.8em" class = "text-light animated fadeIn py-1">by <?php echo $rows["author"]?></p>
        <a class = "animated fadeInLeft btn btn-outline-info py-1" href="article.php?beans=<?php echo $rows["id"]?>">Read on..</a> 
    </div>
</div>
    