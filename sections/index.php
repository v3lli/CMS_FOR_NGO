<!-- header -->
<!DOCTYPE html>
<?php
    // require_once("posts.php");
    // $query = "Select * from content";
    // $result = mysqli_query($conn,$query);
    require "header.php";
    ?>
<!--Jtron-->
<?php
    require "jtron.php";
    ?>
<!-- mainbody --> 
<?php
    require "creator/connection.php";
    require "content.php";
?>                      
<?php
    require "footer.php";
    ?>