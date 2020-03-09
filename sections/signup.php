<?php
    require_once("creator/connection.php");
    // require_once("posts.php");
    // $query = "Select * from content";
    // $result = mysqli_query($conn,$query);

    require "header.php";
    ?>
    <main> 
    <div style ="margin-top: 2rem;"class="container">
      So you like what were about..<br>
      
      you see where we're going<br>
        ..or don't<br>
        maybe you just like us<br>
      wanna know what we're up to?<br>
      be one of us?<br>
       ..should be fun.

     Fill up!<br>
    <br>
      <form class = "w-50" action="controlla/signup.con.php" method = "POST">
                <div class="form-group"> 
                    <label for = "fname_sup">First Name</label>
                    <input type  = "text" name = "fname_sup" class = "w-100"required/>
                </div>
                <div class="form-group"> 
                    <label for = "lname_sup">Last Name</label>
                    <input type  = "text" name = "lname_sup" class = "w-100" required/>
                </div>
                <div class="form-group"> 
                    <label for = "email_sup">E-mail</label>
                    <input type  = "email" name = "email_sup"  class = "w-100" required/>
                </div>
                <div class="form-group"> 
                    <label for = "email2_sup">Confirm Email</label>
                    <input type  = "email" name = "email2_sup" class = "w-100" required/>
                </div>
                <div class="form-group"> 
                    <label for = "uname_sup">Username</label>
                    <input type  = "text" name = "uname_sup" class = "w-100" required/>
                </div>
                <div class="form-group">     
                    <label for = "pw_sup">Password</label>
                    <input type  = "password" name = "pw_sup" class = "w-100" required/>
                </div>
                <div class="form-group"> 
                    <input type="submit" name = "submit_sup" value ="Sign Up"/>
                </div>
            </form>
            <?php echo $_GET['error'];?>
  </div>
    </main>
</body>
<?php
    require "footer.php";
    ?>
