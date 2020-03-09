<!
<?php
    
    
    // require_once("posts.php");
    // $query = "Select * from content";
    // $result = mysqli_query($conn,$query);

    if(isset($_POST["submit_log"]))
    {
        require "../creator/connection.php";
        
        $pw = $_POST["pw_log"];
        $uname = $_POST["uname_log"];
        $url = $_POST["url_log"];

        if (empty($uname) || empty($password))
        {
                header("Location:".$url."?error=emptyfields");
                exit();
        }
        else
        {
                $query = "SELECT * from users WHERE username = ? OR email = ?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                        header("Location:".$url."?error=sqlerror");
                        exit();
                }
                else
                {
                        mysqli_stmt_bind_param($stmt, "ss", $uname, $uname);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while($row=mysqli_fetch_assoc($result))
                        {
                                if($pwc = password_verify($pw, $row['password']))
                                {
                                        session_start();
                                        $_SESSION['id'] = $row['id'];
                                        $_SESSION['username'] = $row['username'];
                                        $_SESSION['namefirst'] = $row['namefirst'];
                                        $_SESSION['namefirst'] = $row['namelast'];
                                             
                                }
                                else{
                                        header("Location:".$url."?error=wrongpw");
                                        exit();   
                                }
                        }
                     
                }
        }
        //  = $userid;
        //  = $userfname;
        // $_SESSION['namelast'] = $userlname;
        // $_SESSION['username'] = $uzaname;
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
        header("Location:".$url);     

}

    


/*        if(isset($_POST["submit_log"]))
        {
            $pw = $_POST["pw_log"];
            $uname = $_POST["uname_log"];
            $url = $_POST["url_log"];
            $query = "SELECT id from users WHERE username = '$uname' and password = '$pw'";
            
            $result = mysqli_query($connection, $query);
            while($rows = mysqli_fetch_assoc($result)){
                    $userid = $rows['id'];       
            }

            $query = "SELECT namefirst from users WHERE id = '$userid'";
            $result = mysqli_query($connection, $query);
    
            while($rows = mysqli_fetch_assoc($result)){
                    $userfname = $rows['namefirst'];          
            }
            
            $query = "SELECT namelast from users WHERE id = '$userid'";
            $result = mysqli_query($connection, $query);
    
            while($rows = mysqli_fetch_assoc($result)){
                    $userfname = $rows['namelast'];          
            }
            $query = "SELECT username from users WHERE id = '$userid'";
            $result = mysqli_query($connection, $query);
    
            while($rows = mysqli_fetch_assoc($result)){
                    $uzaname = $rows['username'];          
            }
            
            if($userid){
                    $_SESSION['id'] = $userid;
                    $_SESSION['namefirst'] = $userfname;
                    $_SESSION['namelast'] = $userlname;
                    $_SESSION['username'] = $uzaname;
                    header("Location:".$url);        
            }

            else{
        
                         echo "incorrect username or pasword try again";
                        }
            
        }

     */   