<?php

include "config.php";

$post_id = $_GET['id'];
$cat_id =  $_GET['catid'];

$sql1 = "SELECT * FROM post WHERE post_id = {$post_id};";
$result = mysqli_query($conn, $sql1) or die("Query Failed");
$row =  mysqli_fetch_assoc($result);

unlink("upload/".$row['post_img']);


$sql = "DELETE FROM post WHERE post_id = {$post_id};";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: {$hostname}/admin/post.php");
}else{
    echo "Error deleting post";
}
?>
