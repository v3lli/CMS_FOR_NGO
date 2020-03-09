<?php
require_once('connection.php');

    $title = $_POST["topic"];
    $type = $_POST["type"];
    $author =$_POST["author"];
    $info = $_POST["desc"];
    $body = $_POST["content"];
    $thumb = $_FILES["thumb"];
    $spread = $_FILES["spread"];


function horpload($file){
    $currentDir = "../../";
    //getcwd();
    $uploadDirectory = "/images/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmpName  = $file['tmp_name'];
    $fileType = $file['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            // echo "The file " . basename($fileName) . " has been uploaded";
            return substr($uploadPath, 3);
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }

}

    // $currentDir = "../../";
    // //getcwd();
    // $uploadDirectory = "/images/";

    // $errors = []; // Store all foreseen and unforseen errors here

    // $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    // $fileName = $thumb['name'];
    // $fileSize = $thumb['size'];
    // $fileTmpName  = $thumb['tmp_name'];
    // $fileType = $thumb['type'];
    // $fileExtension = strtolower(end(explode('.',$fileName)));

    // $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

// $image = $_FILES['image']['tmp_name'];
// if($image==false){
//     $msg="Please insert an image";
//     echo $msg;
    
// }else{
//     $target = "images/".basename($_FILES['image'],['name']);
//     $image = $_FILES['image']['name'];
//     $query = "INSERT INTO content(title, type, author, info, body, thumb, spread ) VALUES ('$title', '$type', '$author', '$info', '$body', '$thumb', '$spred')";
//     $db = mysqli_query($connection,$query);
//     if(move_uploaded_file($_FILES['image']['tmp_name']),$target){
//         header("Location:./index.php");
//     }
// }
if(isset($_POST["submit_post"]))
{
    $thumbdir = horpload($thumb);
    $spreaddir = horpload($spread);
    
    

    $query = "INSERT INTO content_test2(title,author,info,body,thumb,spread) VALUES ('$title','$author','$info','$body','$thumbdir','$spreaddir')";
    $db = mysqli_query($connection,$query);
    if($db){
        header("Location: ../index.php");
    }else{
        header("Location: admin.php");
    }
        // if (! in_array($fileExtension,$fileExtensions)) {
        //     $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        // }

        // if ($fileSize > 2000000) {
        //     $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        // }

        // if (empty($errors)) {
        //     $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        //     if ($didUpload) {
        //         echo "The file " . basename($fileName) . " has been uploaded";
        //     } else {
        //         echo "An error occurred somewhere. Try again or contact the admin";
        //     }
        // } else {
        //     foreach ($errors as $error) {
        //         echo $error . "These are the errors" . "\n";
        //     }
        // }
        // echo $thumbdir;
        // echo $spreaddir;
          
    
}


