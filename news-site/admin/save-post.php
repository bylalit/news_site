<?php

include "config.php";

if(isset($_FILES["fileToUpload"])){
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $extensions = array("jpeg", "jpg", "png");

    if(in_array($file_ext, $extensions) === false){
        $errors[] =  "This file extension is not allowed,  please upload a JPEG or PNG file.";
    }
    if($file_size > 2097152){
        $errors[] = 'File size must be excately 2 MB';
    }
    if(empty($errors) == true){
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }else{
        print_r($errors);
        die();
    }
}


$tital = mysqli_real_escape_string($conn, $_POST['post_tital']);
$description = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$date = date("d M, Y");
$author = $_SESSION['user_id'];


$sql = "INSERT INTO post(title, description, category,          post_date, authore, post_img) VALUES ('{$tital}','{$description}','{$category}','{$date}','{$author}','{$file_name}')";