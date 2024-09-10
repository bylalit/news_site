<?php

include "config.php";

$post_id = $_GET['id'];
$cat_id =  $_GET['cat_id'];

$sql = "DELETE FROM post WHERE post_id = {$post_id};";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: {$hostname}/admin/post.php");
}else{
    echo "Error deleting post";
}
?>
