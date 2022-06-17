
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <link rel="shortcut icon" type="image/png" href="./assets/icon.jpg" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main class="bg-info">
        <div class="container">
            <div class="py-4">
                <h4 class="text-center py-2 text-danger"><i class="fas fa-user-circle fa-5x"></i></h4>
                <?php

session_start();

include 'conn.php';
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

else
{
    // echo "Connected to MySQL: " . $conn -> connect_error;

    if(isset($_GET['username']))
    {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $sql = "SELECT * FROM employee WHERE username='".$username."' AND pass='".$password."' limit 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($row["username"]==$username && $row["pass"]==$password)
        {
            echo "<h4> Hello, ".$row['first_name']." ".$row['last_name']."</h4>";
            ?>
            <div class="row"><a href="./adminlogin.php"><button class="btn btn-danger mx-3" type="submit" name="done">Logout</button></a></div>
<?php
            $sql1 = "SELECT * FROM department WHERE manager_id='".$row["empid"]."' limit 1";

            $result1 = mysqli_query($conn,$sql1);
            $row1 = mysqli_fetch_array($result1);
            if($row1['manager_id']==null)
            {
                // header('location:employee_profile.php');
                $sql2 = "SELECT * FROM employee WHERE username='".$username."' limit 1";
            $result2 = mysqli_query($conn,$sql);
            $res = mysqli_fetch_array($result2);
               ?> 
               <h5 class="text-uppercase text-center"><?php echo $res['username'] ?></h5>
               <!-- <a href="./update_emp.php?empid=<?php echo $res['username'] ?>"><button class="btn btn-danger mx-3" type="submit" name="done">Update</button></a> -->
                <div class="mx-auto border pt-4 pb-5 shadow bg-white mb-5">
                    <div class="row">
                        <table class="col-md-6 col-lg-5 mx-auto">
                            <tr>
                                <td class="border border-danger p-3">Employee ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['empid'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">First Name</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['first_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Last Name</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['last_name'] ?></td>
                            </tr>
                           
                            <tr>
                                <td class="border border-danger p-3">Phone No.</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['phone_number'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Skills</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['skills'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Hire date</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['hire_date'] ?></td>
                            </tr>
                        </table>
                        <table class="col-md-6 col-lg-5 mx-auto">
                            <tr>
                                <td class="border border-danger p-3">Job Title</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['job_title'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Salary</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['salary'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Department ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['department_id'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Manager ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['manager_id'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Address</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['address'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Team ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['empid'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div><?php
            }
            else
            {
                // header('location:dept_mgr.php');
                $sql2 = "SELECT * FROM employee WHERE username='".$username."' limit 1";
                $result2 = mysqli_query($conn,$sql);
                $res = mysqli_fetch_array($result2);
               ?> 

               <h5 class="text-uppercase text-center text-white"><?php echo $res['username'] ?></h5>

                <div class="mx-auto border pt-4 pb-5 shadow bg-white mb-5">
                    <div class="row">
                        <table class="col-md-6 col-lg-5 mx-auto">
                            <tr>
                                <td class="border border-danger p-3">Employee ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['empid'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">First Name</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['first_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Last Name</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['last_name'] ?></td>
                            </tr>
                           
                            <tr>
                                <td class="border border-danger p-3">Phone No.</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['phone_number'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Skills</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['skills'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Hire date</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['hire_date'] ?></td>
                            </tr>
                        </table>
                        <table class="col-md-6 col-lg-5 mx-auto">
                            <tr>
                                <td class="border border-danger p-3">Job Title</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['job_title'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Salary</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['salary'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Department ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['department_id'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Manager ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['manager_id'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Address</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['address'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Team ID</td>
                                <td class="border border-danger p-2 text-center"><?php //echo $res['empid']
                                echo "1700" ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <section>
                <div class="py-4">
                <div class="mx-auto border pt-3 pb-5 px-3 shadow bg-white">
                    <h5 class="text-uppercase text-center bg-danger p-3 text-white">Dashboard</h5>
                    <div class="row">
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <div class="card-body bg-success text-center">
                                    <h5 class="card-title text-white">Departments</h5>
                                    <a href="./departments.php" class="card-link"><button class="btn btn-warning">Manage</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <div class="card-body bg-success text-center">
                                    <h5 class="card-title text-white">Employees</h5>
                                    <a href="./employees.php" class="card-link"><button class="btn btn-warning">Manage</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <div class="card-body bg-success text-center">
                                    <h5 class="card-title text-white">Products</h5>
                                    <a href="./products.php" class="card-link"><button class="btn btn-warning">Manage</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <div class="card-body bg-success text-center">
                                    <h5 class="card-title text-white">Customers</h5>
                                    <a href="./customers.php" class="card-link"><button class="btn btn-warning">Manage</button></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
                <?php
            }
        }
        else
        {
            echo "Sorry, your credentials are not valid, Please try again.";
        }
    }
    exit;
}?>

                    
                <h5 class="text-uppercase text-center"><?php echo $res['username'] ?></h5>
                <div class="mx-auto border pt-4 pb-5 shadow bg-white mb-5">
                    <div class="row">
                        <table class="col-md-6 col-lg-5 mx-auto">
                            <tr>
                                <td class="border border-danger p-3">Employee ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['empid'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">First Name</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['first_name'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Last Name</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['last_name'] ?></td>
                            </tr>
                           
                            <tr>
                                <td class="border border-danger p-3">Phone No.</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['phone_number'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Skills</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['skills'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Hire date</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['hire_date'] ?></td>
                            </tr>
                        </table>
                        <table class="col-md-6 col-lg-5 mx-auto">
                            <tr>
                                <td class="border border-danger p-3">Job Title</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['job_title'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Salary</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['salary'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Department ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['department_id'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Manager ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['manager_id'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Address</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['address'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-danger p-3">Team ID</td>
                                <td class="border border-danger p-2 text-center"><?php echo $res['team_id'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
               
            
            </div>
    </main>



    <script src="./js/jquery-3.5.1.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/main.js "></script>
</body>

</html>