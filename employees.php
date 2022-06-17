<?php

include 'conn.php';
if (isset($_POST['done'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $empid = $_POST['empid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $hiredate = $_POST['hiredate'];
    $jobtitle = $_POST['jobtitle'];
    $salary = $_POST['salary'];
    $deptid = $_POST['deptid'];
    $mgrid = $_POST['mgrid'];
    $skills = $_POST['skills'];
    $address = $_POST['address'];
    // salary input
    $salary_input = $_POST['salary_input'];
    // $less_than = $_Post['less_than'];
    // $equals_to = $_Post['equals_to'];
    // $greater_than = $_Post['greater_than'];
    $salary_filter = $_POST['salary_filter'];

    $q = "Select * from employee";

    $query = mysqli_query($conn, $q);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="shortcut icon" type="image/png" href="./assets/icon.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main class="bg-lightgray">
        <div class="container-fluid">
            <section>
                <h4 class=" text-uppercase text-white text-center py-3 bg-dark">Employees</h4>
                <div class="py-3">
                <div class="row">
                        <button class="btn btn-primary m-4 col-lg-2 ml-auto"><a href="./add_emp.php" class="text-white"><i class="fas fa-plus-square mx-2"></i>Add Employee</a></button>
                    </div>
                    <div class="container bg-danger text-white p-3">
                        <h4>Search Employees By Salary</h4>
                        <div class="row">
                            <div class="col-md-9">
                                <form class="needs-validation" action="employee_search.php" method="POST" novalidate>
                                    <div class="form-row">
                                        <div class="col col-md-5">
                                            <input type="text" class="form-control" id="salary_input" placeholder="Salary Input" name="salary_input" required>
                                        </div>
                                        <div class="col col-md-3">
                                            <button class="btn btn-success" type="submit" name="done">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <script>
                                (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                        var forms = document.getElementsByClassName('needs-validation');
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script>
                        </div>
                    </div>
                    <div class="m-2">
                        <table class="mx-auto bg-white">
                            <thead>
                                <tr class="table-warning">
                                    <th class="border border-danger p-3 text-center">Employee ID</th>
                                    <th class="border border-danger p-3 text-center">Username</th>
                                    <th class="border border-danger p-3 text-center">First Name</th>
                                    <th class="border border-danger p-3 text-center">Last Name</th>
                                    <!-- <th class="border border-danger p-3 text-center">Email</th> -->
                                    <th class="border border-danger p-3 text-center">Phone No.</th>
                                    <th class="border border-danger p-3 text-center">Hire date</th>
                                    <th class="border border-danger p-3 text-center">Job Title</th>
                                    <th class="border border-danger p-3 text-center">Salary</th>
                                    <th class="border border-danger p-3 text-center">Department ID</th>
                                    <th class="border border-danger p-3 text-center">Manager ID</th>
                                    <th class="border border-danger p-3 text-center">Address</th>
                                    <th class="border border-danger p-3 text-center">Skills</th>
                                    <th class="border border-danger p-3 text-center">Update</th>
                                    <th class="border border-danger p-3 text-center">Delete</th>
                                </tr>
                            </thead>
                            <?php

                            include 'conn.php';

                            $q = "Select * from employee";

                            $query = mysqli_query($conn, $q);
                            while ($res = mysqli_fetch_array($query)) {

                            ?>

                                <tbody>
                                    <tr>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['empid'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['username'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['first_name'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['last_name'] ?></td>
                                        <!-- <td class="border border-danger p-2 text-center"></td> -->
                                        <td class="border border-danger p-2 text-center"><?php echo $res['phone_number'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['hire_date'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['job_title'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['salary'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['department_id'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['manager_id'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['address'] ?></td>
                                        <td class="border border-danger p-2 text-center"><?php echo $res['skills'] ?></td>
                                        <td class="border border-danger p-2 text-center">
                                            <a href="./update_emp.php?empid=<?php echo $res['empid'] ?>" class="mx-3"><i class="fas fa-edit text-success" style="font-size:1.4rem;"></i></a>
                                        </td>
                                        <td class="border border-danger p-2 text-center">
                                            <a href="./delete_emp.php?empid=<?php echo $res['empid'] ?>" class="mx-3"><i class="fas fa-trash-alt text-danger" style="font-size:1.4rem;"></i></a>
                                        </td>
                                    </tr>

                                <?php
                            }
                                ?>
                                </tbody>
                        </table>
                    </div>
                    <button class="btn btn-small btn-warning mx-auto my-4 col-lg-4 ml-auto"><a href="./adminlogin.php" class="text-white"><i class="fas fa-arrow-left mx-2"></i>Back to Home</a></button>

                </div>
            </section>


    </main>

    <script src="./js/jquery-3.5.1.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/main.js "></script>
</body>

</html>