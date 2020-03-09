<?php
    
        // require_once("posts.php");
        // $query = "Select * from content";
        // $result = mysqli_query($conn,$query);
        //session_start();

    

    // var_dump($uname);
    if(isset($_POST["submit_sup"]))
    {   
        require "../creator/connection.php";

        $fname = $_POST["fname_sup"];
        $lname = $_POST["lname_sup"];
        $email = $_POST["email_sup"];
        $pw = $_POST["pw_sup"];
        $uname = $_POST["uname_sup"];
    
        $query = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location:../signup.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            {
                header("Location:../signup.php?error=emailtaken&email_sup=".$email);
                exit();
            }
            else
            {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultCheck = mysqli_stmt_num_rows($stmt);
                    if ($resultCheck > 0)
                    {
                        header("Location:../signup.php?error=usernametaken&email_sup=".$email);
                        exit();
                    }
                    else
                    {
                        $query = "INSERT INTO users(namefirst,namelast,email,password,username) VALUES (?,?,?,?,?)";
                        $stmt = mysqli_stmt_init($connection);
                        if (!mysqli_stmt_prepare($stmt, $query))
                        {
                            header("Location:../signup.php?error=sqlerror");
                            exit();
                        }
                        else
                        {
                            $hashed = password_hash($pw, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $hashed, $uname);
                            mysqli_stmt_execute($stmt);
                        }    

                    }
                
                }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
        header("Location:../login.php");  
    }
else{
    header("Location:../signup.php");
    exit();
}