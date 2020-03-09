<?php
require "../creator/connection.php";
if(isset($_POST["submit_comment"]))
{   
    $uid = $_POST["author"];
    $aid = $_POST["articleid"];
    $comment = $_POST["comment"];
    $url = $_POST["url_comment"];
    $query = "INSERT INTO comment_test2(user,article,comment) VALUES(?,?,?)";
    $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location:".$url."?error=sqlerror");
            exit();
        }
       else
        {
            mysqli_stmt_bind_param($stmt, "sis", $uid, $aid, $comment);
            mysqli_stmt_execute($stmt);
            header("Location:".$url);
        }

}