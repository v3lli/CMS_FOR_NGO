<!DOCTYPE html>
<?php require "creator/connection.php";?>
<?php
    
    $payload = $_GET["beans"];
    $query = "SELECT * from content_test2 where id = '$payload'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    require "header.php";
    session_start();
    $userid = $_SESSION['id'];
    $userfname = $_SESSION['namefirst'];
    $userlname = $_SESSION['namelast'];
    $uzaname = $_SESSION['username'];
    ?>
<div class="container">
        <header style="margin-top: 2rem;" class ="container">
            <h3 style ="margin-left: 1rem; font-size: 140%" ><?php echo $row['title']?></h3>
            <p style ="margin-left: 1rem; font-size: 80%">by <?php echo $row['author']?></p>
        </header>
          <article class="mx-auto col-sm-12">
              <figure class="animated fadeIn mx-auto col-sm-10">
                  <img class="mx-auto col-sm-12" src="<?php echo $row['spread']?>">
                  <figcaption class ="py-2" style ="margin-left: 1rem; font-size: 80%"><em>Photo Credit: insery here</em></figcaption>
              </figure>
              <p class="font-weight-light col-sm-10"style="margin: auto; margin-top: 2rem; font-size: 100%; font-family: 'Gupter', serif;">
              <?php echo $row['body']?>
              </p>
              <hr style="margin:auto;margin-top:3rem;" class="w-75">
        </article>
        <div id = "comments" class="well container">
        <h4 style ="opacity: 0.45;" class="my-5" >C O M M E N T S..</h4>
        <?php
            $query  = "SELECT * from comment_test2 WHERE article = '$payload' ORDER BY create_date ASC";
            $result = mysqli_query($connection, $query);
            while ($rows = mysqli_fetch_array($result))
        {?><header>
            <p><strong><?php echo $rows['user'];?></strong></p>
            </header>
            <p><?php echo $rows['comment']?></p>
            <small><?php echo $rows['create_date'];?></small>
            <hr>
        <?php
        }
        ?>  
        </div>
        <div id = "commentform" class= "py-5">
        <?php if(isset($userfname)){?>
                <form  style ="opacity: 0.85" method="POST" action="controlla/comment.con.php" class="w-100">
                <input style = "height:1.5rem; width: 6.5rem; margin-left:0.2rem; " class = "form-control form-control-sm" type = "hidden" placeholder = "Username" name = "url_comment" value ="<?php echo $_SERVER['REQUEST_URI']?>"/>
                    <div class="form-group">
                    <input type="hidden" name="uid" value="<?php echo $userid;?>" class="w-50" required/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="author" value="<?php echo $uzaname;?>" class="w-50" required/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="articleid" value="<?php echo $payload;?>" class="w-50" required/>
                    </div>
                    <div class="form-group">
                        <label for ="comment"><?php echo $_SESSION['username'];?></label>
                        <textarea type="text" name="comment" class="w-100" rows="3"
                        placeholder="leave a comment.." required></textarea>
                    </div>
                    <button type = "submit" name= "submit_comment">Comment.</button>
                    <!-- <input type = "hidden" name="size" value="1000000">
                    <input type = "file" name="image" >
                    <button name="Upload">Upload</button> -->
                </form>
                <?php
                }
                else{?>
                <h3>Sign in to leave a comment..</h3>
                <form class = "form-inline" action="controlla/login.con.php" method = "POST">
                <input style = "height:1.5rem; width: 6.5rem; margin-left:0.2rem; " class = " form-control form-control-sm" type = "hidden" placeholder = "Username" name = "url_log" value = "<?php echo $_SERVER['REQUEST_URI']?>"/>  
                      <input style = "height:1.5rem; width: 6.5rem; margin-left:0.2rem; " class = " form-control form-control-sm" type = "name" placeholder = "Username" name = "uname_log" required/>
                      <input style = "height:1.5rem; width: 6.5rem; margin-left:0.2rem; " class = "form-control form-control-sm" type = "password" placeholder = "Password" name = "pw_log" required/>
                      <button style = "height:1.5rem; width: 3rem; font-size:0.6rem; margin-left:0.2rem;" class = "form-control form-control-sm" type = "submit" name = "submit_log">LOG IN</button>
                    </form><br>
                    <h6>Or <a style = "align-self: center; height:3rem; width: 3rem; font-size:1.5rem; margin-left:8px;"href = "signup.php">Sign up</a> if you havent done so already..</h6>
                    <?php
                  }
                  ?>
            </div>
       </div>

       <?php require "footer.php";?>