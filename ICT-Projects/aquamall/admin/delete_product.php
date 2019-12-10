<?php

include('../includes/connection.php');

$query2 = " SELECT * FROM product WHERE product_id = {$_GET['product_id']} ";
$result =mysqli_query($conn,$query2);
$row    =mysqli_fetch_assoc($result);

unlink("upload/{$row['product_image']}");


$query = " DELETE FROM product WHERE product_id = {$_GET['product_id']} ";

mysqli_query($conn,$query);

header("location:manage_product.php");