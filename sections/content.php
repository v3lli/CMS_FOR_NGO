<?php
session_start();
?>
<div class="container">
        <?php   $query = "SELECT id,thumb,title,info,author,spread FROM content_test2  ORDER BY id DESC LIMIT 3";
                $result = mysqli_query($connection, $query);
                    while($rows = mysqli_fetch_array($result)){?>
                            <section class="content align-content-center container my-2" data-aos="fade-up">
                                <header id="type" style = "font-size: 90%">Article
                                </header>
                                <div class ="container row d-flex col-sm-10">
                                    <figure class="col-sm-7 thumbnail">
                                    <img style=""class="thumbnail" src="<?php echo $rows["spread"];?>" alt="">
                                    </figure>
                                    <div class="info col-sm-5 px-2 ">
                                        <a href="article.php?beans=<?php echo $rows["id"]?>"><h6 id="title"style ="font-family: 'PT Sans', sans-serif;"><?php echo $rows["title"];?></h6></a>
                                        <p id="author" style=""><?php echo $rows["author"]?></p>
                                        <p id="info" style="margin-top: 1rem;">
                                            <?php echo $rows["info"]; ?>
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <hr class="w-75">
                        <?php
                        $_SESSION["author"] = $rows["author"];
                        $_SESSION["spread"] = $rows["spread"];
                        $_SESSION["info"] = $rows["info"];
                        $_SESSION["id"] = $rows["id"];
                        }
                        ?>
</div>