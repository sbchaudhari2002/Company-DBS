<?php

include 'conn.php';
if(isset($_POST['done'])){
        $deptid = $_POST['deptid'];
        $deptname = $_POST['deptname'];
        $mgrid = $_POST['mgrid'];
        $location = $_POST['location'];
        
        $q = "INSERT INTO `department`(`dept_id`, `department_name`, `manager_id`, `location`) 
                   VALUES ('$deptid', '$deptname', '$mgrid', '$location')";
        $query = mysqli_query($conn, $q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    <link rel="shortcut icon" type="image/png" href="./assets/icon.jpg" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main class="bg-lightgray">
        <div class="container-fluid">
            <section>
                <h4 class=" text-uppercase text-white text-center py-3 bg-dark">Departments</h4>
                <div class="py-3">
                    <div class="row">
                    <button class="btn btn-primary m-4 col-lg-2 ml-auto"><a href="./add_dept.php" class="text-white"><i class="fas fa-plus-square mx-2"></i>Add Department</a></button>
                    </div>
                    <div>
                        <table class="mx-auto bg-white">
                            <thead>
                                <tr class="table-warning">
                                    <td class="border border-danger p-3 text-center">Department ID</td>
                                    <td class="border border-danger p-3 text-center">Department Name</td>
                                    <td class="border border-danger p-3 text-center">Manager ID</td>
                                    <td class="border border-danger p-3 text-center">Location</td>
                                    <th class="border border-danger p-3 text-center">Update</th>
                                    <th class="border border-danger p-3 text-center">Delete</th>
                                </tr>
                            </thead>
                            <?php

                                    include 'conn.php';

                                    $q = "Select * from department";

                                    $query = mysqli_query($conn, $q);
                                    while($res = mysqli_fetch_array($query)){                                 
                            ?>
                            <tbody>
                                <tr>
                                    <td class="border border-danger p-3"><?php echo $res['dept_id'] ?></td>
                                    <td class="border border-danger p-3"><?php echo $res['department_name'] ?></td>
                                    <td class="border border-danger p-3"><?php echo $res['manager_id'] ?></td>
                                    <td class="border border-danger p-3"><?php echo $res['location'] ?></td>
                                    <td class="border border-danger p-2 text-center">
                                        <a href="./update_dept.php?deptid=<?php echo $res['dept_id'] ?>" class="mx-3"><i class="fas fa-edit text-success" style="font-size:1.4rem;"></i></a>
                                    </td>
                                    <td class="border border-danger p-2 text-center">
                                        <a href="./delete_dept.php?deptid=<?php echo $res['dept_id'] ?>" class="mx-3"><i class="fas fa-trash-alt text-danger" style="font-size:1.4rem;"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                    <button class="btn btn-small btn-warning col-lg-4 mx-auto my-4"><a href="./adminlogin.php" class="text-white"><i class="fas fa-arrow-left mx-2"></i>Back to Home</a></button>

                </div>  
            </section>
    </main>

    <script src="./js/jquery-3.5.1.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/main.js "></script>
</body>

</html>