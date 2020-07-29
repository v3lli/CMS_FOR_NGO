<?php
// $user = 'b7e7776743c3fd';
// $password = 'aaa45a01';
// $db = 'rvi';
// $host = 'us-cdbr-east-05.cleardb.net';
// $port = 8889;
// $connection = mysqli_connect($host,$user,$password,$db);

$user = 'root';
$password = 'root';
$db = 'rvi';
$host = 'localhost';
$port = 8889;
$connection = mysqli_connect($host,$user,$password,$db);

if(mysqli_error($connection)){
    echo 'No connection';
}

//  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
 
//  $server = $url["host"];
//  $username = $url["user"];
//  $password = $url["pass"];
//  $db = substr($url["path"], 1);
 
//  $conn = new mysqli($server, $username, $password, $db);
 ?>