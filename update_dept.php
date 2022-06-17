<?php

include 'conn.php';
if(isset($_POST['done'])){
        $deptid = $_POST['deptid'];
        $deptname = $_POST['deptname'];
        $mgrid = $_POST['mgrid'];
        $location = $_POST['location'];
        
        $q = "UPDATE department SET dept_id='$deptid', department_name='$deptname', manager_id='$mgrid', location='$location' WHERE dept_id = $deptid";
        $query = mysqli_query($conn, $q);

        header('location:departments.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Department</title>
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
                    <h5 class="text-uppercase text-center my-4">Update Department</h5>
                    <div>
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="form-row px-3">
                            <div class="col-md-6 mb-3 mx-auto">
                                    <label for="deptid">Department Id</label>
                                    <input type="number" class="form-control" id="deptid" name="deptid" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="deptname">Department name</label>
                                    <input type="text" class="form-control" id="deptname" name="deptname" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="mgrid">Manager ID</label>
                                    <input type="number" class="form-control" id="mgrid" name="mgrid" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="col-md-10 text-center mx-auto"><button class="btn btn-primary mx-auto my-3 px-5" type="submit" name="done">Update</button>
                            <div>
                        </form>
                        <div class="row">
                            <button class="btn btn-small btn-success mx-auto my-4 col-lg-4 ml-auto"><a href="./departments.php" class="text-white"><i class="fas fa-list mx-2"></i>Departments List</a></button>
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