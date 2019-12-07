<?php

include('../includes/connection.php');

$query2 = " SELECT * FROM category WHERE cat_id = {$_GET['cat_id']} ";
$result =mysqli_query($conn,$query2);
$row    =mysqli_fetch_assoc($result);

unlink("upload/{$row['cat_image']}");


$query = " DELETE FROM category WHERE cat_id = {$_GET['cat_id']} ";

mysqli_query($conn,$query);

header("location:manage_category.php");