<?php

include 'conn.php';

$deptid = $_GET['deptid'];
$q = " DELETE FROM department WHERE dept_id = $deptid ";

mysqli_query($conn,$q);

header('location:departments.php');

?>