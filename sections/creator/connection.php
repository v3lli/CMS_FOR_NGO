<?php
$user = 'root';
$password = 'root';
$db = 'rvi';
$host = 'localhost';
$port = 8889;
$connection = mysqli_connect($host,$user,$password,$db);
if(mysqli_error($connection)){
    echo 'No connection';
}

