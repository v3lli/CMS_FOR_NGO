<!-- <?php
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