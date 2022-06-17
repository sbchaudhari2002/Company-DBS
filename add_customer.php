<?php

include 'conn.php';
if(isset($_POST['done'])){
        $cid = $_POST['cid'];
        $cfirstname = $_POST['cfirstname'];
        $clastname = $_POST['clastname'];
        $cusername = $_POST['cusername'];
        $cemail = $_POST['cemail'];
        $cmobile = $_POST['cmobile'];
        $prodid = $_POST['prodid'];
        $qty = $_POST['qty'];
        
        $q = "INSERT INTO `customer`(`cid`, `cfirst_name`, `cmiddle_name`, `clast_name`, `cemail`, `custusername`, `contact`, `prodid`, `qty`) 
                            VALUES ('$cid', '$cfirstname', '', '$clastname', '$cemail', '$cusername', '$cmobile', '$prodid', '$qty')";
        $query = mysqli_query($conn, $q);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
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
                    <h5 class="text-uppercase text-center my-4">Add Customer</h5>
                    <div>
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="form-row px-3">
                            <div class="col-md-6 mb-3 mx-auto">
                                    <label for="cid">Customer Id</label>
                                    <input type="number" class="form-control" id="cid" name="cid" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="cusername">Username</label>
                                    <input type="text" class="form-control" id="cusername" name="cusername" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="cfirstname">First Name</label>
                                    <input type="text" class="form-control" id="cfirstname" name="cfirstname" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="clastname">Last Name</label>
                                    <input type="text" class="form-control" id="clastname" name="clastname" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="cemail">Email</label>
                                    <input type="email" class="form-control" id="cemail" name="cemail" required>
                                </div>
                                <div class="col-md-6 mb-3 mx-auto">
                                    <label for="cmobile">Contact</label>
                                    <input type="number" class="form-control" id="cmobile" name="cmobile" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="prodid">Product ID</label>
                                    <input type="number" class="form-control" id="prodid" name="prodid" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="qty">Quantity</label>
                                    <input type="number" class="form-control" id="qty" name="qty" required>
                                </div>
                                <div class="col-md-10 text-center mx-auto"><button class="btn btn-primary mx-auto my-3 px-5" type="submit" name="done">Add</button>
                            <div>
                        </form>
                        <div class="row">
                            <button class="btn btn-small btn-success mx-auto my-4 col-lg-4 ml-auto"><a href="./customers.php" class="text-white"><i class="fas fa-list mx-2"></i>Customers List</a></button>
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