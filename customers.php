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

        $q = "Select * from customer";

        $query = mysqli_query($conn, $q);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="shortcut icon" type="image/png" href="./assets/icon.jpg" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main class="bg-lightgray">
        <div class="container">
            <section>
                <h4 class=" text-uppercase text-white text-center py-3 bg-dark">Customers</h4>
                <div class="py-3">
                    <div class="row">
                    <button class="btn btn-primary m-4 col-lg-2 ml-auto"><a href="./add_customer.php" class="text-white"><i class="fas fa-plus-square mx-2"></i>Add Customer</a></button>
                    </div>
                    <div>
                        <table class="mx-auto bg-white">
                            <thead>
                               <tr class="table-warning">
                                    <td class="border border-danger p-3 text-center">Customer ID</td>
                                    <td class="border border-danger p-3 text-center">First Name</td>
                                    <td class="border border-danger p-3 text-center">Last Name</td>
                                    <td class="border border-danger p-3 text-center">Username</td>
                                    <td class="border border-danger p-3 text-center">Email</td>
                                    <td class="border border-danger p-3 text-center">Contact</td>
                                    <td class="border border-danger p-3 text-center">Product ID</td>
                                    <td class="border border-danger p-3 text-center">Quantity</td>
                                    <td class="border border-danger p-3 text-center">Update</td>
                                    <td class="border border-danger p-3 text-center">Delete</td>
                                    
                                </tr>
                            </thead>

                            <?php

                                    include 'conn.php';                                 

                                    $q = "Select * from customer";                                  

                                    $query = mysqli_query($conn, $q);
                                    while($res = mysqli_fetch_array($query)){                                                                   

                            ?>

                            <tbody>
                            <tr>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['cid'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['cfirst_name'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['clast_name'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['custusername'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['cemail'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['contact'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['prodid'] ?></td>
                                    <td class="border border-danger p-3 text-center"><?php echo $res['qty'] ?></td>
                                    <td class="border border-danger p-3 text-center">
                                        <a href="./update_customer.php?cid=<?php echo $res['cid'] ?>" class="mx-3"><i class="fas fa-edit text-success" style="font-size:1.4rem;"></i></a>
                                    </td>
                                    <td class="border border-danger p-3 text-center">
                                        <a href="./delete_customer.php?cid=<?php echo $res['cid'] ?>" class="mx-3"><i class="fas fa-trash-alt text-danger" style="font-size:1.4rem;"></i></a>
                                    </td>
                                </tr>
                            </tbody>

                            <?php
                                }
                            ?>

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