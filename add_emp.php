<?php

include 'conn.php';
if(isset($_POST['done'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $empid = $_POST['empid'];
        $firstname = $_POST['firstname'];
        // $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        // $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $hiredate = $_POST['hiredate'];
        $jobtitle = $_POST['jobtitle'];
        $salary = $_POST['salary'];
        $deptid = $_POST['deptid'];
        $mgrid = $_POST['mgrid'];
        $skills = $_POST['skills'];
        $address = $_POST['address'];

        $q = "INSERT INTO `employee`(`empid`, `first_name`, `middle_name`, `last_name`, `username`, `pass`, `phone_number`, `hire_date`, `job_title`, `salary`, `department_id`, `manager_id`, `address`, `skills`)
                             VALUES ('$empid', '$firstname', '', '$lastname', '$username', '$password', '$mobile', '$hiredate', '$jobtitle', '$salary', '$deptid', '$mgrid', '$address', '$skills')";

        $query = mysqli_query($conn, $q);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="shortcut icon" type="image/png" href="./assets/icon.jpg" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="bg-info">
    <main>
        <section>
            <div class="container">
                <div class="col-md-10 col-lg-8 border bg-white mx-auto my-5 py-3 shadow">
                <div class="border">
                    <h5 class="text-uppercase text-center my-4">Add Employee</h5>
                    <div>
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="form-row px-3">
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="empid">Employee ID</label>
                                    <input type="text" class="form-control" id="empid" name="empid" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="col-md-12 mb-3 mx-auto">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"  name="password" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                                </div>
                                <!-- <div class="col-md-6 mb-3 mx-auto">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div> -->
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="mobile">Phone No.</label>
                                    <input type="number" class="form-control" id="mobile" name="mobile" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="hiredate">Hire Date</label>
                                    <input type="date" class="form-control" id="hiredate" name="hiredate" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="jobtitle">Job Title</label>
                                    <input type="text" class="form-control" id="jobtitle" name="jobtitle" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="salary">Salary</label>
                                    <input type="number" class="form-control" id="salary" name="salary" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="deptid">Department ID</label>
                                    <input type="number" class="form-control" id="deptid" name="deptid" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="mgrid">Manager ID</label>
                                    <input type="number" class="form-control" id="mgrid" name="mgrid" required>
                                </div>
                                <div class="col-md-12 mb-3 mx-auto">
                                    <label for="skills">Skills</label>
                                    <input type="text" class="form-control" id="skills" name="skills" required>
                                </div>
                                <div class="col-md-12 mb-3 mx-auto">
                                    <label for="address">Address</label>
                                    <textarea type="text" class="form-control" id="address" name="address" rows="3" required></textarea>
                                </div>
                                <div class="col-md-10 text-center mx-auto"><button class="btn btn-primary mx-auto my-3 px-5" type="submit" name="done"> Add</button>
                            <div>
                        </form>
                        <div class="row">
                        <button class="btn btn-small btn-success mx-auto my-4 col-lg-4 ml-auto"><a href="./employees.php" class="text-white"><i class="fas fa-list mx-2"></i>Employee's List</a></button>
                        <button class="btn btn-small btn-warning mx-auto my-4 col-lg-4 ml-auto"><a href="./adminlogin.php" class="text-white"><i class="fas fa-arrow-left mx-2"></i>Back to Home</a></button>
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
                </div>
            </div>
        </section>
    </main>

    <script src="./js/jquery-3.5.1.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/main.js "></script>
</body>

</html>