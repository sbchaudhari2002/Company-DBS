<?php

include 'conn.php';

$empid = $_GET['empid'];
$q = " DELETE FROM employee WHERE empid = $empid ";

mysqli_query($conn,$q);

header('location:employees.php');

?>