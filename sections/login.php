<?php
    require_once("creator/connection.php");
    // require_once("posts.php");
    // $query = "Select * from content";
    // $result = mysqli_query($conn,$query);

    require "header.php";
    ?>
<main>
    <div class = "container row w-100">
        <div class = "container w-50 justify-center">
            <div class = "w-100">Sign Up</div>
            
        </div>
        <div class = "container w-50">
            <div class = "w-100">Login</div>
            <form class = "w-50" action="server.php" method = "POST">
            <div class="form-group"> 
                    <label for = "uname_su">Username</label>
                    <input type  = "text" name = "uname_log" required/>
                </div>
                <div class="form-group">     
                    <label for = "pw_su">Password</label>
                    <input type  = "password" name = "pw_log" required/>
                </div>
                <div class="form-group"> 
                    <input type="submit" name = "submit_log"/>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
    require "footer.php";
    ?>