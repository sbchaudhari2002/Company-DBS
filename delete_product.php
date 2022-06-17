<?php

include 'conn.php';

$productid = $_GET['productid'];
$q = " DELETE FROM product WHERE proid = $productid ";

mysqli_query($conn,$q);

header('location:products.php');

?>