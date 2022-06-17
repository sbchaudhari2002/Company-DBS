<?php

session_start();

include 'conn.php';
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" type="image/png" href="./assets/icon.jpg" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main>
        <section>
            <div class="container pt-5">
                <div class="col-md-10 col-lg-6 border bg-white mx-auto py-3 shadow">
                <div class="border">
                    <h5 class="text-uppercase text-center my-4">Login Page</h5>
                    <div class="col-md-8 mx-auto">
                        <h4 class="text-center py-2"><i class="fas fa-user-circle fa-4x"></i></h4>
                    </div>
                    <div>
                        <form class="needs-validation" action="employee_profile.php" method="GET" novalidate>
                            <div class="col-md-10 mb-3 mx-auto">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-10 mb-3 mx-auto">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-10 text-center mx-auto"><button class="btn btn-primary mx-auto my-3" type="submit" name="done">Login</button>
                            </div>
                        </form>
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