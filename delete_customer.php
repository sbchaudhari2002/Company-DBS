<?php

include 'conn.php';

$cid = $_GET['cid'];
$q = " DELETE FROM customer WHERE cid = $cid ";

mysqli_query($conn,$q);

header('location:customers.php');

?>