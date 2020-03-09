<?php
    require_once("../creator/connection.php");
    

    if(isset($_POST["logout"]))
    {
        session_start();
        session_destroy();
        $userid = 0;
        $userfname = 0;
        $userlname = 0;
        header('Location:../index.php');
    }