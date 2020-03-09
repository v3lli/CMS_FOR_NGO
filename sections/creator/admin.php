<!DOCTYPE html>
<html>
  <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel='stylesheet' type='text/css' media='screen' href="main.css">
      <link rel='stylesheet' type='text/css' media='screen' href="bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300&display=swap" rel="stylesheet">
  </head>
  <?php require_once('server.php');?>
  <body>
    <div class="container">

      Welcome, Boss , Would you like to post?<br>
      rn
      thats all im Good for..<br>

      Though I'm thinking of inventory <br>
      then maybe analytics as a long term.<br>
      should be fun.<br>

      For now though.. just post!<br>

      <form method="post" action="server.php" class="w-100" enctype="multipart/form-data">
          <div class="form-group">  
            <select name="type">
                <option value = "Article">Article</option>
                <option value = "Specials">Specials</option>
                <option value = "News">News</option>
              </select>
          </div>
          <div class="form-group">
            <label for ="topic"> Topic </label>
            <input type="text" name="topic" value="" class="w-100" required/>
          </div>
          <div class="form-group">
              <label for ="author"> Author </label>
              <input type="text" name="author" value="" class="w-100" required/>
            </div>
          <div class="form-group">
              <label for ="desc">Short-Description</label>
              <textarea type="text" name="desc" value="" class="w-100" rows="2" required></textarea>
          </div>
          <div class="form-group">
              <label for ="content">Body</label>
              <textarea type="text" name="content" value="" class="w-100" rows="4" required></textarea>
          </div>
          <div class="form-group">
              <label for ="thumb">Thumbnail image </label>
              <input type="file" name="thumb" value="" class="w-100" required/>
          </div>
          <div class="form-group">
              <label for ="spread">Spread image </label>
              <input type="file" name="spread" value="" class="w-100" required/>
          </div>
          <button type = "submit" name= "submit_post">Upload</button>
          <!-- <input type = "hidden" name="size" value="1000000">
            <input type = "file" name="image" >
            <button name="Upload">Upload</button> -->
      </form>
  </div>
