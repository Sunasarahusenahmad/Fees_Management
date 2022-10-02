<?php


include 'connection.php';

if (isset($_POST['submit'])) {

    $roll_no = $_POST['roll_no'];
    $student_name = $_POST['student_name'];
    $surname = $_POST['surname'];
    $courses = $_POST['courses'];
    $payment_date = $_POST['payment_date'];
    $recieve_by = $_POST['recieve_by'];
    $payment_mode = $_POST['payment_mode'];
    $pay_fees = $_POST['pay_fees'];

    if (isset($_FILES['student_image'])) {

        $file_name = $_FILES['student_image']['name'];
        $file_size = $_FILES['student_image']['size'];
        $file_tmp = $_FILES['student_image']['tmp_name'];
        $file_type = $_FILES['student_image']['type'];

        if (move_uploaded_file($file_tmp, "image_assets/" . $file_name)) {
?>
            <!-- <div class="alert alert-success text-center" role="alert">
                Student_image is Uploaded !...
            </div> -->
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Student_image Dose't Uploaded !...
            </div>
        <?php
        }
    }

    $insert_query = "INSERT INTO `addmission_fees` (roll_no, student_name, surname, courses, payment_date, recieve_by, payment_mode, pay_fees, student_image) VALUES ('$roll_no', '$student_name', '$surname', '$courses', '$payment_date', '$recieve_by', '$payment_mode', '$pay_fees', '$file_name') ";

    $result = mysqli_query($con, $insert_query);

    error_reporting(0);

    if ($result) {
        ?>
        <div class="alert alert-success text-center" role="alert">
            Your Fees has been successfully !...
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Your Fees has Not been successfully !...
        </div>
<?php
    }

    // header("Location : addmission_fees_pay.php");
}

$roll_no = $_GET['roll_no'];

$select_query = "SELECT `roll_no`, `student_name`, `surname`, `courses` FROM `addmission` WHERE roll_no = $roll_no";

$res = mysqli_query($con, $select_query);

$arrdata = mysqli_fetch_array($res);

?>


<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.0
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Crud</title>
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">

    <!-- bootstrap link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font-awesome link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">


</head>

<body style="font-family: arial; font-size: 15px;">

    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <h2>Valudas</h2>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="dashboard.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

            <li class="nav-item"><a class="nav-link" href="inquiry_list.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-address-book"></use>
                    </svg> Inquiry</a></li>

            <li class="nav-item"><a class="nav-link" href="active.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-playlist-add"></use>
                    </svg> Addmission</a></li>
            </li>

            <li class="nav-item"><a class="nav-link" href="feeslist.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-playlist-add"></use>
                    </svg> Addmission Fees</a></li>
            </li>
        </ul>
    </div>


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                    </svg></a>

                <span class="" style="font-size: 2.5rem; font-weight: 700; color: #6FBE44;">
                    Valudas Technology Park
                </span>


                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/valuda.png" alt="admin@email.com">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <a class="dropdown-item" href="logout.php">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>


        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header text-center" style="font-weight: bolder;"> Pay Now</div>
                            <div class="card-body bg-light">

                                <div class="align-items-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="card mb-4 mx-4">
                                                    <div class="card-header text-center" style="font-weight: bolder;">Add Fees</div>

                                                    <div class="card-body bg-light p-4">

                                                        <form class="row g-3" method="POST" enctype="multipart/form-data">

                                                            <div class="col-md-4">
                                                                <label for="inputPassword4" class="form-label">Roll No</label>
                                                                <input type="text" name="roll_no" class="form-control rounded-0" id="inputPassword4" value="<?php echo $arrdata['roll_no'] ?>" placeholder="Roll No" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="inputPassword4" class="form-label">Student Name</label>
                                                                <input type="text" name="student_name" class="form-control rounded-0" id="inputPassword4" value="<?php echo $arrdata['student_name'] ?>" placeholder="Student Name" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="inputAddress" class="form-label">Surname</label>
                                                                <input type="text" name="surname" class="form-control rounded-0" id="inputAddress" value="<?php echo $arrdata['surname'] ?>" placeholder="Surname" required>
                                                            </div>



                                                            <div class="col-md-4">
                                                                <label for="inputState" class="form-label">Courses</label>
                                                                <input type="text" name="courses" class="form-control rounded-0" id="inputAddress" value="<?php echo $arrdata['courses'] ?>" placeholder="Pay Your Fees" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="inputState" class="form-label">Payment Date</label>
                                                                <input type="date" name="payment_date" class="form-control rounded-0" id="inputAddress" placeholder="Payment Date" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="inputAddress" class="form-label">Receive by</label>
                                                                <select id="inputState" name="recieve_by" class="form-select rounded-0" required>
                                                                    <option disabled selected>Select Reference</option>
                                                                    <option>Valuda Aakib</option>
                                                                    <option>Valuda Noman</option>
                                                                    <option>Bhoraniya Mujahid</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="inputAddress" class="form-label">Payment Mode</label>
                                                                <select id="inputState" name="payment_mode" class="form-select rounded-0" required>
                                                                    <option disabled selected>Select Payment Mode</option>
                                                                    <option>Cash</option>
                                                                    <option>Check</option>
                                                                    <option>Online Transfer</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="inputAddress" class="form-label">Pay Fees</label>
                                                                <input type="text" name="pay_fees" class="form-control rounded-0" id="inputAddress" placeholder="Pay Your Fees" required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="inputAddress" class="form-label">Student Photo</label>
                                                                <input class="form-control rounded-0" id="image" name="student_image" placeholder="" type="file" required>
                                                            </div>

                                                            <div class="col-12">
                                                                <button type="submit" name="submit" class="btn btn-primary rounded-0">Pay Amount</button>

                                                                <button type="button" class="btn btn-warning rounded-0"><a href="addmission_fees_personal.php?roll_no=<?php echo $arrdata['roll_no']; ?>" class="text-dark" style="text-decoration: none;"> Check List </a></button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                                <!-- <div class="body flex-grow-1 px-3">
                                    <div class="container-lg">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card mb-4">

                                                    <div class="card-header text-center" style="font-weight: bolder;"> Ammount List

                                                    </div>
                                                    <div class="card-body">

                                                        <div class="table-responsive">
                                                            <table class="table border mb-0">
                                                                <thead class="table-light fw-semibold">
                                                                    <tr class="align-middle">
                                                                        <th class="text-center">Roll No</th>
                                                                        <th class="text-center">Student Name</th>
                                                                        <th class="text-center">Payment Date</th>
                                                                        <th class="text-center">Recieve By</th>
                                                                        <th class="text-center">Payment Mode</th>
                                                                        <th class="text-center">Total Amount</th>
                                                                        <th class="text-center">Paid Amount</th>
                                                                        <th class="text-center">Remaining Amount</th>
                                                                        <th class="text-center">Edit</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php

                                                                    $remaining_fees = '';

                                                                    $select_query = "SELECT * FROM `addmission_fees` ";

                                                                    $result = mysqli_query($con, $select_query);

                                                                    $res = mysqli_query($con, "SELECT addmission_fees FROM `addmission` ");
                                                                    

                                                                    $data = mysqli_fetch_array($res);

                                                                    $num = mysqli_num_rows($result);

                                                                    while ($arrdata = mysqli_fetch_array($result)) {
                                                                    ?>
                                                                        <tr class="align-middle">

                                                                            <td class="text-center"> <?= $arrdata['roll_no']; ?> </td>

                                                                            <td class="text-center"> <?= $arrdata['student_name']; ?> </td>

                                                                            <td class="text-center"> <?= $arrdata['payment_date']; ?> </td>

                                                                            <td class="text-center"> <?= $arrdata['recieve_by']; ?> </td>

                                                                            <td class="text-center"> 💷 <?= $arrdata['payment_mode']; ?> </td>

                                                                            <td class="text-center"> <?= $data['addmission_fees']; ?> </td>

                                                                            <td class="text-center"> <?= $arrdata['pay_fees']; ?> </td>

                                                                            <td class="text-center text-danger"> <?= $remaining_fees =  $data['addmission_fees'] - $arrdata['pay_fees']; ?> </td>


                                                                            <td class="text-center"> <a href="addmission_fees_pay_edit.php?roll_no=<?php echo $arrdata['roll_no']; ?> " class=" text-dark" style="padding-left: 1rem;"> <i class="fa fa-edit"></i></a></td>


                                                                        </tr>

                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                        </div>
                                        <!-- /.row-->
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row-->
    </div>
    </div>

    <footer class="footer">
        <div class="ms-auto">Designed by &nbsp; <a href="https://husenahmad.github.io/husenahmad/">Sunasara
                Husenahmad</a></div>
    </footer>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>